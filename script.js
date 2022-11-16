$(document).ready(function() {
  $("#btn-reg").click(function() {
    $("#showreg,.mask").hide().fadeIn(405);
  });

  $("#btn-reg-close,.mask").click(function() {
    $("#showreg,.mask").fadeOut(405);
  });
  
  $("#btn-log").click(function() {
    $("#showlog,.mask").hide().fadeIn(405);
  });

  $("#btn-log-close,.mask").click(function() {
    $("#showlog,.mask").fadeOut(405);
  });

  //close the POPUP if the button with id="close" is clicked
  /*$("#btn-close,.mask").on("click", function (e) {
    e.preventDefault();
    $("#pop-cont,.mask").fadeOut(405);
  });*/
  
})