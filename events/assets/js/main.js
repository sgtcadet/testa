/*
 * Change Navbar color while scrolling
*/

$(window).scroll(function(){
	handleTopNavAnimation();
});

$(window).load(function(){
	handleTopNavAnimation();
});

function handleTopNavAnimation() {
	var top=$(window).scrollTop();

	if(top>10){
		$('#site-nav').addClass('navbar-solid'); 
	}
	else{
		$('#site-nav').removeClass('navbar-solid'); 
	}
}

/*
 * Registration Form
*/

$('#registration-form').submit(function(e){
    e.preventDefault();
    
    // var postForm = { //Fetch form data
    //         'fname'     : $('#registration-form #fname').val(),
    //         'lname'     : $('#registration-form #lname').val(),
    //         'email'     : $('#registration-form #email').val(),
    //         'cell'      : $('#registration-form #cell').val(),
    //         'address'   : $('#registration-form #address').val(),
    //         'zip'       : $('#registration-form #zip').val(),
    //         'city'      : $('#registration-form #city').val(),
    //         'program'   : $('#registration-form #program').val()
    // };
    var postForm = 
    {
        //'fullname'  : $('#registration-form #fullname').val(),
        'firstname' : $('#registration-form #firstname').val(),
        'lastname'  : $('#registration-form #lastname').val(),
        'email'     : $('#registration-form #email').val(),
        'cell'      : $('#registration-form #cell').val(),
        'event'     : $('#registration-form #event').val(),
        'package'   : $('#registration-form #package').val()
    };
    $.ajax({
            type      : 'POST',
            url       : './assets/php/register.php',
            data      : postForm,
            dataType  : 'json',
            success   : function(data,status,result) {
                            if (data.success) {
                            //if (status == 'success') {
                                $('#registration-msg .alert').html("Registration Successful");
                                $('#registration-msg .alert').removeClass("alert-danger");
                                $('#registration-msg .alert').addClass("alert-success");
                                $('#registration-msg').show();
                                //$('#reg-form-title').html("<h1>" + result + "</h1>");
                                alert('Thank You for registering!!');
                            }
                            else
                            {
                                $('#registration-msg .alert').html("Registration Failed");
                                $('#registration-msg .alert').removeClass("alert-success");
                                $('#registration-msg .alert').addClass("alert-danger");
                                $('#registration-msg').show();
                            }
                        }
        });
});

/*
 * SmoothScroll
*/

smoothScroll.init();