var emailerror  = true;
var phoneerror  = true;
var birtherror  = true;
function checkErrors() {
   if(emailerror === true || phoneerror === true || birtherror === true){
      console.log("error");
   }else{
      console.log("no error");
   }
  }
  checkErrors();
$(document).ready(function(){
   
   $('.email').blur(function(){
   
      if($(this).val().length <= 3){
         $(this).css('border', '1px solid red');
         $(this).parent().find('.emailz').fadeIn(300);
         emailerror = true;
      }
      else if($(this).val().length == 0){
         $(this).css('border', '1px solid red');
         $(this).parent().find('.emailz').fadeIn(300);
         emailerror = true;

      }
      
      else{
         $(this).parent().find('.emailz').fadeOut(100);
         $(this).css("border", "2px solid green");
         emailerror = false;

      }
   })
   
   $('.phone').blur(function(){
   
      if($(this).val().length <= 3){
         $(this).css('border', '1px solid red');
         $(this).parent().find('.phonez').fadeIn(300);
         phoneerror = true;
      }
      else if($(this).val().length == 0){
         $(this).css('border', '1px solid red');
         $(this).parent().find('.phonez').fadeIn(300);
         phoneerror = true;
      }
      
      else{
         $(this).parent().find('.phonez').fadeOut(100);
         $(this).css("border", "2px solid green");
         phoneerror = false;
      }
   })
   // submit form validation
  
})

$(document).ready(function() {
    $('#password').keyup(function() {
        var password = $('#password').val();
        if (checkStrength(password) == false) {
            $('#register-form').attr('disabled', true);
        }
    });
    function checkStrength(password) {
        var strength = 0;


        //If password contains both lower and uppercase characters, increase strength value.
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
            strength += 1;
            $('.low-upper-case').addClass('text-success');
            $('.low-upper-case i').removeClass('icon-file-text').addClass('icon-check-sign');
            $('#popover-password-top').addClass('hide');


        } else {
            $('.low-upper-case').removeClass('text-success');
            $('.low-upper-case i').addClass('icon-file-text').removeClass('icon-check-sign');
            $('#popover-password-top').removeClass('hide');
        }

        //If it has numbers and characters, increase strength value.
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) {
            strength += 1;
            $('.one-number').addClass('text-success');
            $('.one-number i').removeClass('icon-file-text').addClass('icon-check-sign');
            $('#popover-password-top').addClass('hide');

        } else {
            $('.one-number').removeClass('text-success');
            $('.one-number i').addClass('icon-file-text').removeClass('icon-check-sign');
            $('#popover-password-top').removeClass('hide');
        }

        //If it has one special character, increase strength value.
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
            strength += 1;
            $('.one-special-char').addClass('text-success');
            $('.one-special-char i').removeClass('icon-file-text').addClass('icon-check-sign');
            $('#popover-password-top').addClass('hide');

        } else {
            $('.one-special-char').removeClass('text-success');
            $('.one-special-char i').addClass('icon-file-text').removeClass('icon-check-sign');
            $('#popover-password-top').removeClass('hide');
        }

        if (password.length > 7) {
            strength += 1;
            $('.eight-character').addClass('text-success');
            $('.eight-character i').removeClass('icon-file-text').addClass('icon-check-sign');
            $('#popover-password-top').addClass('hide');

        } else {
            $('.eight-character').removeClass('text-success');
            $('.eight-character i').addClass('icon-file-text').removeClass('icon-check-sign');
            $('#popover-password-top').removeClass('hide');
        }




        // If value is less than 2

        if (strength < 2) {
            $('#result').removeClass()
            $('#password-strength').addClass('progress-bar-danger');

            $('#result').addClass('text-danger').text('Very Week');
            $('#password-strength').css('width', '10%');
        } else if (strength == 2) {
            $('#result').addClass('good');
            $('#password-strength').removeClass('progress-bar-danger');
            $('#password-strength').addClass('progress-bar-warning');
            $('#result').addClass('text-warning').text('Week')
            $('#password-strength').css('width', '60%');
            return 'Week'
        } else if (strength == 4) {
            $('#result').removeClass()
            $('#result').addClass('strong');
            $('#password-strength').removeClass('progress-bar-warning');
            $('#password-strength').addClass('progress-bar-success');
            $('#result').addClass('text-success').text('Strength');
            $('#password-strength').css('width', '100%');

            return 'Strong'
        }

    }
    $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye icon-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
      });
});
