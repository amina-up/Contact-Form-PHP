
$(function(){

    'use strict';
    let formErrors=true;

function checkErrors(){
    
    if(formErrors==true){
        console.log("there's Errors in Form")
    }else{
        console.log('Form is valid')
    }
} 


  $('.username').blur(function(){

    if($(this).val().length < 4){
        $(this).css('border','1px solid #F00');
    }
    else {
        $(this).css('border','1px solid #5fb404');

    }
    checkErrors();
  });
  
  $('.email').blur(function(){

    if($(this).val().length < 1){
        $(this).css('border','1px solid #F00');
    }
    else {
        $(this).css('border','1px solid #5fb404');
        

    }
    checkErrors();

  });
  $('.cell').blur(function(){

    if($(this).val().length < 8 || $(this).val().length >8){
        $(this).css('border','1px solid #F00');
    }
    else {
        $(this).css('border','1px solid #5fb404');
        

    }
    checkErrors();

  });
  $('.message').blur(function(){

    if($(this).val().length < 10){
        $(this).css('border','1px solid #F00');
    }
    else {
        $(this).css('border','1px solid #5fb404');
        

    }


  });
  

});