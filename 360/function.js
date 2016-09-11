$(document).ready(function(){
  //vid = document.getElementById('v0');
  //var input = parseInt($("#seekbar").val());
  var framenumber = 1;
  var last = 41;
  //vid.currentTime = framenumber;
  //var framenumber = 1;
//  $("#seekbar").on('input', function(){
    //var input = parseInt($("#seekbar").val());
    //console.log(input);
    //var framenumber = input/13;
  //  vid.currentTime = framenumber;
  //});
  $("#rechts").click(function(){
    if(framenumber < last){
      framenumber+=1;
    };
    var part = $('<div id="part" style="background-image: url(' + framenumber + '.jpg);"></div>');
    $('#part').replaceWith(part);
    console.log(framenumber);
  });
  $("#links").click(function(){
    if(framenumber > 20){
      framenumber-=1;
    };
    var part = $('<div id="part" style="background-image: url(' + framenumber + '.jpg);"></div>');
    $('#part').replaceWith(part);
    console.log(framenumber);
  });


})
