var xhttp = new XMLHttpRequest();

function getElement(id) {
	return document.getElementById(id);
}
document.getElementById("myForm").addEventListener("submit", function (event) {
	event.preventDefault();
	validationForm();
	getElement('myForm').reset();
});

function validationForm() {
	var formdata = new FormData(document.getElementById("myForm"));
	console.log("============================ formData" , formdata.values()  	)
	function callApi(url, type = 'POST', data, header, callback) {
		
		xhttp.onreadystatechange = function () {
			let response = {};
			try {
				response = JSON.parse(this.response);
			} catch (e) {
				console.log("error :", e.message)
			}

			if (this.readyState == 4 && this.status == 200) {
				console.log(response);
				callback(null,response);
			} else if (this.readyState == 4 && this.status != 200) {
				console.log(response);
				callback(response, null);
			}
		}
		xhttp.open(type, url, true);
		xhttp.send(formdata);
	}
	callApi('McodeSendEmail.php', 'POST', formdata, {}, (err, response) => {
		if (err) {
			
			swal("Error",err.message, "error");
		} else {
			if (response) {
				swal("Success",response.message, "success");
			} else {
			}
		}
	});
}