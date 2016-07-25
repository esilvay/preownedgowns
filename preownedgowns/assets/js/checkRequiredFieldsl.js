function checkRequiredFieldsl(parentForm){
	var valid = true;
	var badFieldLabels = new Array();
	var form = document.getElementById(parentForm);

	if(form.email.value == ''){
		valid = false;
		badFieldLabels.push('Email');
	}
	if(form.password.value == ''){
		valid = false;
		badFieldLabels.push('Password');
	}

	if(!valid){
		var errorMessage = 'The following fields cannot be blank: \n\n';
		for(var i=0;i<badFieldLabels.length;i++){
			errorMessage += badFieldLabels[i] + '\n';	
		}
		alert(errorMessage);
		return false;
	}
	else{
		return true;
	}
}