module.exports = function(comm_obj){
	
	var router = comm_obj.rt;
	var io = comm_obj.io;
	
	
	function test(){
		return "test";
	}
	
	router.get('/sensor/v1/all', function(req, res) {
		var device_id = req.body.did;
		if(typeof(global.cubeStation['sensor_data'][device_id]) != 'undefined')
		{
			var temp = global.cubeStation['sensor_data'][device_id]['temp'];
			var rh = global.cubeStation['sensor_data'][device_id]['rh'];
		}
		else{
			var temp = "";
			var rh = "";
		}
		
		var response = new Object();
		response.device_id = device_id;
		response.temp = temp;
		response.rh = rh;
		
		res.setHeader('Content-Type', 'application/*+json');
		res.write('Posted data:\n');
		res.end(JSON.stringify(response, null, 2))
	});
	
	
};
