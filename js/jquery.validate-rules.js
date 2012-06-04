	$(document).ready(function() {
			
				jQuery.validator.addMethod("lettersonly", function(value, element) {
					return this.optional(element) || /^[a-z]+$/i.test(value);
					}, "Please enter only letters"); 
					
			// validate contact form on keyup and submit
			$("#form").validate({
			
			 errorElement: "span", 
			 
			 
			//set the rules for the fild names
			rules: {
			
				username: {
					required: true,
					minlength: 5,
					maxlength:12,
					lettersonly: true
				},
				email: {
					required: true,
					email: true
				},
				password: {
					required: true,
					minlength: 5,
					maxlength:15
				},
				
				gender : {
					required :true
				},
				
				state : {
					required :true
				},
				
				agree : {
					required :true
				},	
				
			},
			//set messages to appear inline
			messages: {
			
				username: {
					required: "Name is required..",
				},
				
				password: {
				required: "Please provide a password.",
				minlength: "Your password must be at least 5 characters long",
				maxlength: "Password can not be more than 15 characters"
				},
				
				email: "Valid email is required.",
				
				agree: "You must agree to our terms.",
				gender: "Gender is required",
				state: "Select state"
				
				
				
			},
			
		errorPlacement: function(error, element) {               
					error.appendTo(element.parent());     
				}

		});
	});