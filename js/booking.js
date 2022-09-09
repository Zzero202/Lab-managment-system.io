var personerror  = true;
function checkErrors() {
   if(personerror === true){
      console.log("error");
   }else{
      console.log("no error");
   }
  }
  checkErrors();
$(document).ready(function(){
   $('.person').blur(function(){
   
      if($(this).val().length != 14){
         $(this).css('border', '1px solid red');
         $(this).parent().find('.id').fadeIn(300);
         personerror = true;
      }
      else if($(this).val().length == 0){
         $(this).css('border', '1px solid red');
         $(this).parent().find('.id').fadeIn(300);
         personerror = true;

      }
      
      else{
         $(this).parent().find('.id').fadeOut(100);
         $(this).css("border", "2px solid green");
         personerror = false;

      }
   })
   
   $('.booking-form').submit(function(e){
      if(personerror === true ){
      e.preventDefault();
        
      $('.person').blur();        
      }
   })
})