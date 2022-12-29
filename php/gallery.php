<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Our Modern Office Space, INTUITIVE">
    <meta name="description" content="">
    <title>Gallery</title>
     <link rel="stylesheet" href="../style/animate.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">


    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>

<style>
  
 /* width */
 ::-webkit-scrollbar {
  width: 10px;
    }
    
    /* Track */
    ::-webkit-scrollbar-track {
   box-shadow: inset 0 0 5px grey;
   border-radius: 10px;
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: rgb(16, 16, 43);
      border-radius: 10px;
    }
    
    
    .u-gallery-item{
      height: 200px;
    }

    .u-section-1{
      display: none;
    }









    @import url('https://fonts.googleapis.com/css?family=Open+Sans:300');

html{
  font-family: 'Open Sans', sans-serif;
  height: 100%;
}

body{
  height:100%;
  background-color: #ccc;
}

#container{
  min-height:100%;
  min-width:100%;
}

#footer{
   position:fixed;
   bottom:0;
   width:100%;
   height:60px;
   background-color: #333;
}

#footer span{
  display: block;
  color: #fff;
  margin: 0 auto;
  margin-top: 15px;
  width: 200px;
  font-size:1.5em;
}

#images-container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  margin-bottom: 100px;
}

.thumbnail-wrapper {
  background-color: #333;
  min-width: 22rem;
  min-height: 18rem;
  position: relative;
  flex: 1;
  flex-basis: 10rem;
  margin: 8px;
  margin-left:0px;
  margin-bottom:0px;
  transition: all .2s ease-in-out;
}

.thumbnail-wrapper:hover {
  transform: scale(1.025);
}

/* For an uneven grid in the gallery */
/*  
.thumbnail-wrapper:nth-child(5n) {
  flex-basis: 24rem;
}

.thumbnail-wrapper:nth-child(2n+1) {
  flex-basis: 23rem;
}

.thumbnail-wrapper:nth-child(7n+4) {
  flex-basis: 26rem;
  min-height: 22rem;
}*/

.thumbnailElem {
  width: 100%;
  height: 100%;
  position: absolute;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  transition: .3s ease-in-out;
}

.thumbnailElem:hover {
  opacity: 0.9;
  /*background-size: contain;*/
  
}

.text-wrapper{
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(80, 80, 80, 0.7);
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .2s ease;
}

.thumbnailElem:hover .text-wrapper{
  height: 1.8rem;
}

span.image-text{
  position: absolute;
  top: 0px;
  left: 5px;
  font-size: .9em;
  color: white;
}

.modal-content{
  background-color: #444;
  color: #fff;
}

.modal-content  img.img-responsive{
  border: 1px solid #333;
  border-radius: 7px;
}

.modal-body .img-responsive{
  min-height: 200px;
}

.imageLink{
  
  margin-right: 30%;
}

.modal-header {
  border-bottom: none;
  padding: 15px 20px 0px 20px;
  /*border-bottom: 1px solid #333;*/
}

.modal-title{
  font-size: 1.75em;
}

.modal-footer {
  border-top: 1px solid #333;
}

.close{
  color: #ddd;
  opacity: .7;
  font-weight: 400;
  transition: all .2s ease-in-out;
}

#loadMoreBtn {
  display: block;
  margin: 0 auto;
  margin-top: 8px;
  text-align: center;
  font-size: 1.3em;
  font-weight: 700;
  
  padding: 8px 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
    
  transition: all .2s ease-in-out;
}

#loadMoreBtn:hover{
  background-color: #bcbcbc;
}

.btn-primary{
  border: 1px solid #ccc;
  transition: all .2s ease-in-out;
}

.btn:hover{
  background-color: #bcbcbc;
}




#container{display: none;}











</style>

  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-a32d"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">

    
    </header>
 
<?php



?>


      </div>
    </section>

  






<div id="container">

  <div id="image-modal"></div>

  <div id="images-container"></div>
  
  <div id="footer"></div>
  
</div>



<div class='container' id="animate">
  <div class='loader'>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--text'></div>
  </div>
</div>

  
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.3.9/jquery.jscroll.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

<script>
  

  setTimeout( function(){
      $('#animate').fadeToggle();
      $('#container').fadeToggle();
     
      },7000)














  






      

  var images = [];






/*

async function getData() {
  const response = await fetch('test.php');
  const data = await response.json();
  return data;
}

var data = getData();
console.log(data ); // logs the data returned by the API


for (let i = 0; i < data.length; i++) {
  console( data[i]) ;
 }
  
 console.log(11111111111111);
  console.log(data.length)
  console.log(images.length)
  console.log(11111111111111);


async function geturl (){
 await fetch('test.php')
  .then(response => response.json())
   .then(data => {
    console.log(data); // logs the data returned by the API
  });
}

  
 geturl()
*/


function getData() {
  return new Promise((resolve, reject) => {
    // Make an HTTP request to get the data
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'test.php');
    xhr.onload = () => {
      if (xhr.status === 200) {
        // Resolve the promise with the response data
        resolve(xhr.response);
      } else {
        // Reject the promise with an error
        reject(Error(xhr.statusText));
      }
    };
    xhr.onerror = () => {
      // Reject the promise with an error
      reject(Error('Network Error'));
    };
    xhr.send();
  });
}

// Call the getData function
getData()
  .then(response => {
    // Handle the successful response
   
    
$( document ).ready(function() {

 
  images=JSON.parse(response)
// Load content first time
loadContent(start, end, size);
var loadMoreBtn = document.createElement('button');
loadMoreBtn.setAttribute("id", "loadMoreBtn");
loadMoreBtn.textContent = "charger plus";
loadMoreBtn.setAttribute("OnClick","loadMoreButtonClick()");
footer.appendChild(loadMoreBtn);

// Click event for Modal
/*$('a.thumbnailElem').click(function(e) {
e.preventDefault();

createImageModal('image-modal', $(this).prop('innerText'), $(this).attr('src'), 'hideModal()', 'Stäng');
});  */

$(document).on('click', 'a.thumbnailElem', function(e){
e.preventDefault();

createImageModal('image-modal', $(this).prop('innerText'), $(this).attr('src'), 'hideModal()', 'Stäng');
});


});



// Scroll Listener
var lastScrollTop = 0, delta = 5;
$(window).scroll(function() {
//console.log('loadContent:' + end + ' ' + images.length);
if($(window).scrollTop() + $(window).height() > $(document).height() - 60) {
 
 // Load content if there is some
 if (end < images.length) {
   
        ShowHideFooter(false, false);
        start += size;
        end += size;
        loadContent(start, end, size);
 }
 else if (end == images.length) {
     if($(window).scrollTop() + $(window).height() > $(document).height()) {
       var noMoreContent = document.createElement('span')
       noMoreContent.setAttribute('id','noContentText');
       noMoreContent.innerText = "No more content";
       footer.appendChild(noMoreContent);
       ShowHideFooter(true,false);
    }
 }
}

// Detect scroll direction
var st = $(this).scrollTop();

if(Math.abs(lastScrollTop - st) <= delta)
return;

if (st > lastScrollTop){
// downscroll code

} else {
// upscroll code
var elem = document.getElementById('noContentText');
if (elem != null){
  elem.parentNode.removeChild(elem);
  ShowHideFooter(false, false);
}
}
lastScrollTop = st;
});

function loadContent(start, end, size){
    var rowSize = end - start;
    for (var i = start; i < end; i++) {
      var thumbnailWrapper = document.createElement("div");
      thumbnailWrapper.className = "thumbnail-wrapper row" + start;

      var thumbnail = document.createElement("a");
      thumbnail.className = "thumbnailElem";
      thumbnail.setAttribute('style', 'background-image:url(\"' +   images[i].Url + '\");');
      thumbnail.setAttribute('src', images[i].Url);

      var textContainer = document.createElement("div");
      textContainer.className = "text-wrapper";

      var imageText = document.createElement("span");
      imageText.className = "image-text";
      imageText.innerHTML = images[i].Text;

      thumbnailWrapper.appendChild(thumbnail);
      thumbnail.appendChild(textContainer);
      textContainer.appendChild(imageText);
      imagesContainer.appendChild(thumbnailWrapper);
        
}
}

function createImageModal(placementId, heading, imagesSrc)
{
var html =  '<div id="modalWindow" class="modal fade" tabindex="-1" role="dialog">';
html += '<div class="modal-dialog modal-lg">';
html += '<div class="modal-content">';
html += '<div class="modal-header">';
html += '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>';
if (heading === undefined){
  html += '<div id="modalTitle" class="modal-title">No title</div>'
}
else {
  html += '<div id="modalTitle" class="modal-title">'+heading+'</div>'
}
html += '</div>'; // header
html += '<div class="modal-body">';
html += '<img class="img-responsive center-block" src="'+imagesSrc+'" alt="">'
html += '</div>';
html += '<div class="modal-footer">';
html += '<a class="imageLink" href="'+imagesSrc+'"target="_blank">'+imagesSrc+'</a>'
html += '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
html += '</div>';  // footer
html += '</div>';  // content
html += '</div>';  // dialog
html += '</div>';  // modalWindow
$("#"+placementId).html(html);
$("#modalWindow").modal();
}


function hideModal()
{
// Using a very general selector - this is because $('#modalDiv').hide
// will remove the modal window but not the mask
$('.modal.in').modal('hide');
}

function loadMoreButtonClick(){
start += size;
end += size;
loadContent(start, end, size);
ShowHideFooter(false,false);
}

function ShowHideFooter(fo ,btn){
if (fo == true){
$('#footer').fadeIn();
}
else{
$('#footer').fadeOut(100);
}
if(btn == true){
    $('#loadMoreBtn').fadeIn();
 }
else{
    $('#loadMoreBtn').fadeOut(200);
 }
}



    console.log(111)
  })
  .catch(error => {
    // Handle the error
    console.error(error);
  });





var imagesContainer = document.getElementById("images-container");
var footer = document.getElementById("footer");

var size = 23;
var start = 0;
var end = size;








</script>

</html>