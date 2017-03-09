/*Created by @jerssonbc */

Dropzone.options.uploads={
	mazFilesize:2,
	acceptedFiles:".png, .jpg, .jpeg, .bmp",
	success:function(file, response) {
		if(file.status ==="success"){
			handleResponse.handleSuccess(response);
		}else{
			handleResponse.handleError(response);
		}
	}
};

var handleResponse ={
	handleError:function(response){
		console.log(response);
	},
	handleSuccess:function(response){
		var msg = document.getElementById('msg');
		msg.innerHTML = 'Subida exitosamente';
	}
}