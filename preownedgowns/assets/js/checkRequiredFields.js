function checkRequiredFields(parentForm){
	var valid = true;
	var badFieldLabels = new Array();
	var form = document.getElementById(parentForm);
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;


	 if(form.firstname.value == ''){
		valid = false;
		badFieldLabels.push('First Name <br />');
	 }
	 if(form.lastname.value == ''){
		valid = false;
		badFieldLabels.push('Last Name <br />');
	 }
	 if (form.email.value.search(emailRegEx) == -1) {
			valid = false;
			badFieldLabels.push('Email <br />');
     }
	 if (form.cemail.value.search(emailRegEx) == -1) {
			valid = false;
			badFieldLabels.push('Confirm Email <br />');
     }
     if (form.email.value != form.cemail.value) {
		 valid = false;
          badFieldLabels.push('Email addresses do not match. <br />')  
     }
	if(form.address1.value == ''){
		valid = false;
		badFieldLabels.push('Address <br />');
	}
	if(form.city.value == ''){
		valid = false;
		badFieldLabels.push('City <br />');
	}
	if(form.state.value == ''){
		valid = false;
		badFieldLabels.push('State <br />');
	}
	if(form.zip.value == ''){
		valid = false;
		badFieldLabels.push('Zip <br />');
	}
	if(form.telephone.value == ''){
		valid = false;
		badFieldLabels.push('Telephone <br />');
	}
	if (form.password.value.length <6 ) {
			valid = false;
			badFieldLabels.push('Password must be at least 6 characters <br />');
     }
	 if (form.cpassword.value.length <6 ) {
			valid = false;
			badFieldLabels.push('Confirm Password <br />');
     }
     if (form.password.value != form.cpassword.value) {
          valid = false;
          badFieldLabels.push('Passwords do not match. <br />')
     }
	 if(!valid){
		var errorMessage = 'The following fields cannot be blank: <br /><br />';
		for(var i=0;i<badFieldLabels.length;i++){
			errorMessage += badFieldLabels[i] + '<br />';	
		}
		$('#errorBox').html(errorMessage);
		$('#errorBox').dialog('open');
		return false;
	}
	else{
		return true;
	}
}