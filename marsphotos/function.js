$(document).ready(function(){
  var x = 8;
  for(i = 8; i < 13; i++){
    var thing = $("<div id='photo' style='background-image:url(" + x +".jpg)'></div>");
    $("body").append(thing);
    x += 1;
  }
})
