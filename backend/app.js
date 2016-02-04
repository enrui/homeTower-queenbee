global.__base = __dirname + '/';

var express    = require('express');        // call express
var app        = express();                 // define our app using express
var bodyParser = require('body-parser');
var glob = require( 'glob' );
var path = require( 'path' );
var io = require('socket.io').listen(8883);
var crypto = require('crypto');

var common_obj = new Object();
common_obj.io = io;
common_obj.cryp = crypto;
global.cubeStation = new Array();
global.cubeStation['sensor_data'] = new Array();

var common = require( './library/common.js' );
common_obj.common = common;


glob.sync( './library/websocket.js' ).forEach( function( file ) {
  require( path.resolve( file ) )(common_obj);
}); 



// configure app to use bodyParser()
// this will let us get the data from a POST
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

var port = process.env.PORT || 8080;        // set our port

// ROUTES FOR OUR API
// =============================================================================
var router = express.Router();              // get an instance of the express Router

common_obj.rt = router;

glob.sync( './apis/*/*.js' ).forEach( function( file ) {
  require( path.resolve( file ) )(common_obj);
}); 


app.use('/', router);


// START THE SERVER
// =============================================================================
app.listen(port);
console.log('Magic happens on port ' + port);