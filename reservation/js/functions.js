$('document').ready(function() {
    /* handle form validation */
    $("#reservation-form").validate({
        rules:
            {
                guest: {
                    required: true,
                    minlength: 1
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    phone: true
                },
                date: {
                    required: true,
                    date: true
                },
                time: {
                    required: true,
                    time: true
                },
                suggestions: {
                    required: true,
                    maxlength: 255
                },
            },
        messages:
            {
                quest: "Unesite broj gostiju",
                email: "Unesite validnu email adresu",
                phone: "Unesite broj telefona",
                date: "Unesite datum",
                time: "Unesite vreme",
                suggestions: {
                    request: "Unesite sugestije",
                    maxlength: "Uneli ste previše karaktera!"

                }


            },
        submitHandler: submitForm
    });
    /* handle form submit */
    function submitForm() {
        var data = $("#register-form").serialize();
        $.ajax({
            type : 'POST',
            url  : 'register.php',
            data : data,
            beforeSend: function() {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Šalje se ...');
            },
            success :  function(response) {
                if(response==1){
                    $("#error").fadeIn(1000, function(){
                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Email već postoji !</div>');
                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Registruj se');
                    });
                } else if(response=="registered"){
                    $("#btn-submit").html(' Sačekajte trenutak...');
                    setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("../page_log.php"); }); ',3000);
                } else {
                    $("#error").fadeIn(1000, function(){
                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Registruj se');
                    });
                }
            }
        });
        return false;
    }
});