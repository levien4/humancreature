$(document).ready(function(){
  $("#info").toggle(
    function(){$("#info").css("transform", "translate(0px,-100px)");},
    function(){$("#info").css("transform", "translate(500px,-100px)");},
    function(){$("#info").css("transform", "translate(0,0)");
  });
  $("#route").toggle(
    function(){$("#route").css("transform", "translate(0px,-100px)");},
    function(){$("#route").css("transform", "translate(500px,-100px)");},
    function(){$("#route").css("transform", "translate(0,0)");
  });
});
