$(document).ready(function(){
  vid = document.getElementById('v0');
  var input = parseInt($("#seekbar").val());
  var framenumber = input/13;
  vid.currentTime = framenumber;
  //var framenumber = 1;
  $("#seekbar").on('input', function(){
    var input = parseInt($("#seekbar").val());
    console.log(input);
    var framenumber = input/13;
    vid.currentTime = framenumber;
  });
  $("#rechts").click(function(){
    framenumber++;
    vid.currentTime = framenumber;
    console.log(framenumber);
  });
  $("#links").click(function(){
    framenumber--;
    vid.currentTime = framenumber;
    console.log(framenumber);
  });
})
