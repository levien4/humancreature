$(document).ready(function(){

  var framenumber = 1;
  var last = 83;
  var frame = new Image();
  var loading = 1;
  function load_image(){
    for(i = 11; i < last;){
      frame.src = '00' + i + '.jpg';
      i++;
    };
  };
  window.onload = load_image;

  $("#seekbar").on('input', function(){
    var input = parseInt($("#seekbar").val());
    console.log(input);
    var framenumber = input;
    var part = $('<div id="part" style="background-image: url(00' + framenumber + '.jpg);"></div>');
    $('#part').replaceWith(part);
  });

})
