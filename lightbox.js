//File created to show an overlay with the large image. - Lightbox

var $_overlay = $('<div id="overlay"></div>');
var $_image = $("<img>");
var $_caption = $("<p></p>");

//Add image to overlay
$_overlay.append($_image);

//Add caption to the overlay
$_overlay.append($_caption);

//Add the overlay
$("body").append($_overlay);
  

//Capture the click event on a link to an image
$("#gallery a").click(function(event){
  event.preventDefault();
  var imageLocation = $(this).attr("href");
  //Update overlay with the image linked in the link
  $_image.attr("src",imageLocation);
  
  //Show the overlay
  $_overlay.show();
  
  //Get child alt attribute and set caption
  var captionText = $(this).children("img").attr("alt");
  $_caption.text(captionText);
});


//When overlay is clicked 
$_overlay.click(function(){
  //Hide the overlay
  $_overlay.hide();
});
  
