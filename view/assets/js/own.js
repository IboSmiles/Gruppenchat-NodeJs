window.onload = function(){
  $(".login").click(function(){
    $(".loginForm").addClass("overlayDisable");
   
  });
  $(".exitForm").click(function(){
    $(".loginForm").removeClass("overlayDisable");
   
  });

  $(".register").click(function(){
    $(".registerForm").addClass("overlayDisable");
   
  });
  $(".exitForm").click(function(){
    $(".registerForm").removeClass("overlayDisable");
   
  });
  $(".exitForm_register").click(function(){
    $(".loginForm").removeClass("overlayDisable");
    $(".registerForm").addClass("overlayDisable");
  });
  $(".exitForm_login").click(function(){
    $(".registerForm").removeClass("overlayDisable");
    $(".loginForm").addClass("overlayDisable");
  });
}