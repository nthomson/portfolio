// Get the HTTP Object
function getHTTPObject(){
   if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
   else if (window.XMLHttpRequest) return new XMLHttpRequest();
   else {
      alert("Your browser does not support AJAX.");
      return null;
   }
}   
 
// Change the value of the outputText field

 
// Implement business logic    
function doWork(){
	var toInput = document.getElementById('replyto').value;
	var nameInput = document.getElementById('nameInput').value;
	var messageInput = document.getElementById('msgArea').value;
	
	var errors = validate(toInput, nameInput, messageInput);
	
	if (errors == ""){
		document.getElementById('response').style.color = "#000";
		document.getElementById('response').innerHTML = "Sending...";
		httpObject = getHTTPObject();
		if (httpObject != null) {
			var params = getQueryString(toInput, nameInput, messageInput);
			var url = "script/message.php";
		
			httpObject.open("POST", url, true);
			httpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			httpObject.setRequestHeader("Content-length", params.length);
			httpObject.setRequestHeader("Connection", "close");
			httpObject.onreadystatechange = function setOutput(){
				if(httpObject.readyState == 4){
					document.getElementById('response').innerHTML = httpObject.responseText;
				}
			 
			};
			httpObject.send(params);
			
			
		}
	}
	else {
		document.getElementById('response').innerHTML = errors;
		document.getElementById('response').style.color = "#f00";
	}
	
}

function getQueryString(toInput, nameInput, messageInput){
	return "replyTo="+toInput+"&name="+nameInput+"&message="+messageInput;
}

function validate(to, name, message){
	var error = "";
	if(name == ""){
		error += "The 'Name' field cannot be blank. <br />";
	}
	if (to == ""){
		error += "The 'E-mail' field cannot be blank. <br />";
	}
	if(message == ""){
		error += "You must write a message.";
	}
	
	return error;
}

 //replyTo, name, message
var httpObject = null;
