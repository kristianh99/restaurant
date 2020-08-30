$('document').ready(function() {   
  /* handle form validation */  
  $("#register-form").validate({
      rules:
   {
   user_name: {
      required: true,
   minlength: 3
   },
   password: {
   required: true,
   minlength: 8,
   maxlength: 15
   },
   cpassword: {
   required: true,
   equalTo: '#password'
   },
   user_email: {
            required: true,
            email: true
            },
    },
       messages:
    {
            user_name: "Unesite korisnicko ime",
            password:{
                      required: "Unesite lozinku",
                      minlength: "Lozinka mora biti duža od 8 karaktera"
                     },
            user_email: "Unesite validnu email adresu",
   cpassword:{
      required: "Ponovite lozinku",
      equalTo: "Lozinka ne odgovara !"
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
        if(response===1){
			 $("#error").fadeIn(1000, function(){
			   $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Email već postoji !</div>');
			   $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Registruj se');
			 });                    
        } else if(response==="registered"){
			 $("#btn-submit").html(' Sačekajte trenutak...');
			 setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("../../page1/page_index.php"); }); ',3000);
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