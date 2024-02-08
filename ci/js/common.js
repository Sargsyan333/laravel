$(function() {
	// EXPENSE FORM VALIDATION STARTS
	$("#expenseform").validate({
		rules: {
			date: "required",
			name: "required",
			Expense_category:"required",
			amount:{
				  required: true,
				  digits: true
					},
			paid_by:"required",
			paid_to:"required"
			
		},
		// Specify validation error messages
		messages: {
			date: "Please enter Date",
			name: "Please enter your Name",
			Expense_category:"Please Select Expense Type",
			amount:{required:"Please enter Amount",
			digits:"Please Enter Amount in Digits"},
			paid_by:"Please Select Paid by user",
			paid_to:"Please Select Paid to user",
		},
		// Make sure the form is submitted to the destination defined // in the "action" attribute of the form when valid
		submitHandler: function(form) {
			form.submit();
		}
	});
	// EXPENSE FORM VALIDATION ENDS
	
	// Site Information FORM VALIDATION STARTS
	$("#siteform").validate({
		rules: {
			cpanel: "required",
			user: "required",
			password:{
					  required:true,
					  minlength:8
					},
			admin:"required",
			adminpassword: {
					   required:true,
					   minlength:8
					},
			
			textarea:"required"
			
		},
		// Specify validation error messages
		messages: {
			cpanel: "Please enter Cpanel Information",
			user: "Please enter User Name",
			password:{
				required:"Please enter Password",
				minlength:"Minimum 8 characters"
			},
			admin:"Please enter Admin Name",
			adminpassword:{
				required:"Please enter Admin Password",
				minlength:"Minimum 8 characters"
			},
			textarea:"Please Enter Description",
			
		},
		// Make sure the form is submitted to the destination defined // in the "action" attribute of the form when valid
		submitHandler: function(form) {
			form.submit();
		}
	});
	// Site Information FORM VALIDATION ENDS
	
	// Project Information FORM VALIDATION STARTS
	$("#projectform").validate({
		rules: {
			name: "required",
			client: "required",
			project_source:"required",
			time_duration:"required",
			cost:{
					   required:true,
					   digits:true
					},
			
			project_status:"required"
			
		},
		// Specify validation error messages
		messages: {
			name: "Please enter Project Name",
			client: "Please enter Client Name",
			project_source:"Please select Source",
			time_duration:"Please enter Time Duration",
			cost:{
				required:"Please enter Cost Of Project",
				digits:"Only Digits allowed"
			},
			project_status:"Please Select Project Status",
			
		},
		// Make sure the form is submitted to the destination defined // in the "action" attribute of the form when valid
		submitHandler: function(form) {
			form.submit();
		}
	});
	// Project Information FORM VALIDATION ENDS

	// Ticket Information FORM VALIDATION STARTS
	$("#ticketform").validate({
		rules: {
			due_date: "required",
			ticket_title: "required",
			ticket_priority:"required",
			user_name:"required",
			status:"required",
			ticket_description:"required"
		},
		// Specify validation error messages
		messages: {
			due_date: "Please enter Date Value",
			ticket_title: "Please enter Ticket Title",
			ticket_priority:"Please select Ticket Priority",
			user_name:"Please Select User Name",
			status:"Please Select Ticket Status",
			ticket_description:"Please Enter Some Description"
		},
		// Make sure the form is submitted to the destination defined // in the "action" attribute of the form when valid
		submitHandler: function(form) {
			form.submit();
		}
	});
	// Ticket Information FORM VALIDATION ENDS
	
	// User Information FORM VALIDATION STARTS
	$("#userinfo_form").validate({
		rules: {
			user_name: "required",
			lname: "required",
			password:{
					required:true,
					minlength:8
			},
			confirmpassword:{
					required:true,
					equalTo:"#password"
			},
			email_address:{
				required:true,
				email:true
				},
			address:"required",
			dob:"required",
			phone:{
				required:true,
				digits:true
			},
			user_level:"required"
		},
		// Specify validation error messages
		messages: {
			user_name: "Please enter User Name",
			lname: "Please enter User Last Name",
			password:{
				required:"Please Enter Password",
				minlength:"Minimum 8 Characters Allowed"
			},
			confirmpassword:{
				required:"Please Re-enter Password",
				equalTo:"Password Doesn't Match"
			},
			email_address:{
				required:"Please Enter Email Address",
				email:"Enter a Valid Email Address"
			},
			address:"Please Enter Address",
			dob:"Please Enter Date of Birth",
			phone:{
				required:"Please Enter Phone Number",
				digits:"Only Digits Allowed"
			},
			user_level:"Please Select User Level"
		},
		// Make sure the form is submitted to the destination defined // in the "action" attribute of the form when valid
		submitHandler: function(form) {
			form.submit();
		}
	});
	// User Information FORM VALIDATION ENDS
	
	// Revenue Information FORM VALIDATION STARTS
	$("#revenuform").validate({
		rules: {
			date: "required",
			select: "required",
			project_source:"required",
			project:"required",
			amount:{
				required:true,
				digits:true
				},
			status:"required"
			
		},
		// Specify validation error messages
		messages: {
			date: "Please enter Date",
			select: "Please Select Project or Source",
			project_source:"Please Select Source",
			project:"Please Select Project",
			amount:{
				required:"Please Enter Amount",
				digits:"Only Digits Allowed"
			},
			status:"Please Select Status"
			
		},
		// Make sure the form is submitted to the destination defined // in the "action" attribute of the form when valid
		submitHandler: function(form) {
			form.submit();
		}
	});
	
	
	// Source Information FORM VALIDATION STARTS
$("#sourceform").validate({
		rules: {
			source_name: "required",
			
		},
		// Specify validation error messages
		messages: {
			source_name: "Please enter Source Name",
		},
		// Make sure the form is submitted to the destination defined // in the "action" attribute of the form when valid
		submitHandler: function(form) {
			form.submit();
		}
	});
	// Source Information FORM VALIDATION ENDS
	
	// Status Information FORM VALIDATION STARTS
	$("#statusform").validate({
		rules: {
			status_name: "required",
			
		},
		// Specify validation error messages
		messages: {
			status_name: "Please enter Status Name",
		},
		// Make sure the form is submitted to the destination defined // in the "action" attribute of the form when valid
		submitHandler: function(form) {
			form.submit();
		}
	});
	// Status Information FORM VALIDATION ENDS
	
	// Level Information FORM VALIDATION STARTS
	$("#levelform").validate({
		rules: {
			level_name: "required",
			
		},
		// Specify validation error messages
		messages: {
			level_name: "Please enter Status Name",
		},
		// Make sure the form is submitted to the destination defined // in the "action" attribute of the form when valid
		submitHandler: function(form) {
			form.submit();
		}
	});
	// Level Information FORM VALIDATION ENDS
	
	// Add Expense Category FORM VALIDATION STARTS
	$("#add_expense_category_form").validate({
		rules: {
			category_type: "required",
			
		},
		// Specify validation error messages
		messages: {
			category_type: "Please enter Status Name",
		},
		// Make sure the form is submitted to the destination defined // in the "action" attribute of the form when valid
		submitHandler: function(form) {
			form.submit();
		}
	});
	// Add Expense Category FORM VALIDATION ENDS
});