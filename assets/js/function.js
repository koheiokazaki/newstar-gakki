jQuery(function($){

  $("#hamburger").on('click', function(){
    $("#hamburger-menu").slideToggle();
  });

  $("#course_btn").hover(function() {
    $("#menu").fadeIn(300);
  }, function() {
    $("#menu").fadeOut(300);
  });

});
