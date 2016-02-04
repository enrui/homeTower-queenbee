module.exports = function(comm_obj){
	
	var router = comm_obj.rt;
	var common = comm_obj.common;
	function test(){
		return "test";
	}
	
	router.post('/device/v1/notify', function(req, res) {
		common.test();
		res.setHeader('Content-Type', 'application/*+json')
		res.write('Posted data:\n')
		res.end(JSON.stringify(req.body, null, 2))
	});
	
	
};
