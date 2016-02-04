module.exports = function(comm_obj){
	
	var io = comm_obj.io;
	var device_id='';
	var cryp =  comm_obj.cryp;	
	
	function gen_random_string(leng){
		var randomString = cryp.randomBytes(32).toString('base64').substr(0, leng);
		return randomString
	}
	
	io.sockets.on('connection', function (socket) {  
		
		socket.on('subscribe', function (data) {
			console.log('has subscribe');
			var device_id=data.deviceId;
			socket.emit(device_id+'/token/response', gen_random_string(16));
		});
		
		//for request and response sensor data 
				
		socket.on('/sensor_data/response', function (data) {
			var device_id = data.deviceId;
			global.cubeStation['sensor_data'][device_id]= new Array();
			global.cubeStation['sensor_data'][device_id]['temp'] = data.temp;
			global.cubeStation['sensor_data'][device_id]['rh'] = data.rh;
			//console.log(global.sensor_log);	
		});
	}); 
		
};




