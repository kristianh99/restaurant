$('document').ready(function() {
    /* handling form validation */
    $("#login-form").validate({
        rules: {
            password: {
                required: true,
            },
            user_email: {
                required: true,
                email: true
            },
        },
        messages: {
            password:{
                required: "Unesite lozinku"
            },
            user_email: "Unesite email adresu",
        },
        submitHandler: submitForm
    });
    /* Handling login functionality */
    function submitForm() {
        var data = $("#login-form").serialize();
        $.ajax({
            type : 'POST',
            url  : 'login.php',
            data : data,
            beforeSend: function(){
                $("#error").fadeOut();
                $("#login_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Šalje se ...');
            },
            success : function(response){
                if(response=="ok"){
                    $("#login_button").html('Sačekajte trenutak ...');
                    setTimeout(' window.location.href = "../../reservation/reservation.php"; ',4000);
                } else {
                    $("#error").fadeIn(1000, function(){
                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
                        $("#login_button").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Uloguj se');
                    });
                }
            }
        });
        return false;
    }
});