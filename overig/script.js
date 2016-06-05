$(document).ready(function(){
  $("#info").toggle(
    function(){$("#info").css("transform", "translate(0,-20%)");},
    function(){$("#info").css("transform", "translate(120%,-20%)");},
    function(){$("#info").css("transform", "translate(0,0)");
  });
  $("#route").toggle(
    function(){$("#route").css("transform", "translate(0px,-20%)");},
    function(){$("#route").css("transform", "translate(120%,-20%)");},
    function(){$("#route").css("transform", "translate(0,0)");
  });
});
