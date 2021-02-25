
var obj;
function loadJSON(){
  let requestURL = 'https://www.humancreature.nl/data.json';
  let request = new XMLHttpRequest();
  request.open('GET', requestURL);
  request.responseType = 'text';
  request.send();
  request.onload = function() {
    const data = request.response;
    obj = JSON.parse(data);
    console.log("data:");
    console.log(obj);
    populateImages(obj);
  }
}

function populateImages(obj) {
  console.log(obj.images.length);
  var imgId;
  var images = "";
  for (i = 0; i < obj.images.length; i++){
    imgId = "#img" + i;
    newimg = "<a href='" + imgId + "' id='galerij'><img src='" + obj.images[i].lowres + "'></a><a href='#_' class='lightbox' id='" + imgId.substr(1) + "'><img src='" + obj.images[i].highres + "''><br>" + obj.images[i].sub + "</a>";
    images = images.concat(newimg);
  }
  document.getElementById("galerij").innerHTML = images;
}
