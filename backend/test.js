
var events = require('events');
var util = require('util');
var cry = require('crypto');
 
var testObj = function(){
	this.count=0;
}

util.inherits(testObj,events.EventEmitter);

testObj.prototype.counter = function(){
	this.count++;
	this.emit('countxx',this.count);
}

var tobj = new testObj();

tobj.on('countxx',function(a){
	console.log('This count'+a);
});

tobj.counter();
tobj.counter();
tobj.counter();

var encry = cry.createHmac('sha256','password');

console.log(encry.digest('hex'));

