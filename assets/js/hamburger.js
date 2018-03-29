jQuery(function($){

  $("#hamburger").on('click', function(){
    alert("hogehoge");
    console.log("ooo");
  });
  $("#course_btn").hover(function() {
    $("#menu").fadeIn(300);
  }, function() {
    $("#menu").fadeOut(300);
  });

});
