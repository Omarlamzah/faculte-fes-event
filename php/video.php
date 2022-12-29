<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>video</title>
    <script src="https://www.youtube.com/iframe_api"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- Docs styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/CDNSFree2/Plyr/plyr.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/css.css">
    <link rel="stylesheet" href="../style/animate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<style>
     .container {

      position: relative;
    padding-top: 22vh;
    left: 10%;
    width: 66%;
    margin: auto;
}


.plyr--paused .plyr__poster {
		z-index: 2;
	filter: blur(1rem);
	position: absolute;
	opacity: 1;
	top: 65px;
	  left: 0;
  bottom: 0;
  right: 0;

}

ul{
  
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;
    width: 100%;
}
a{text-decoration: none;transition: 1s;}
a:hover{
    font-size: 1.3rem;
}

li{
    transition:1s ;
    font-size: large;
}
li:hover{background-color: #ffeb3b;}

body{
    background-image: url("../pics/web2.jpg");
    background-size: 118% 100%;
    background-repeat: no-repeat;
}
.cntone{
  display: none;
}

.plyr{
  border-radius: 20px;
}

</style>
<body>

<div class="cntone container">

<?php

if(isset($_GET["id"]))

$id=$_GET["id"];
	echo "<div id='player' data-plyr-provider='youtube' data-plyr-embed-id='".$id."'></div>";
?>
<ul>
<li class="btn btn.info">
<i class="fa-solid fa-backward"></i> <a href="../php/home.php">précédent</a>
</li>




<li class="btn btn.info">
<i class="fa-solid fa-house"></i>   <a href="../index.html">accueil</a>
</li>
</ul>

</div>
    


<div style="position: absolute; left: 10%; right:10%; top :7vh;" class='container' id="animate">
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
<script src="https://cdn.playr.io/latest/playr.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/CDNSFree2/Plyr/plyr.js"></script>


<script>


  // Change "{}" to your options:
// https://github.com/sampotts/plyr/#options
   const player = new Plyr('#player', {});

// Expose player so it can be used from the console
  window.player = player;
  player.poster="../pics/web2.jpg"



  

</script>


<script>
  

setTimeout( function(){
    $('#animate').fadeToggle();
    $('.cntone').fadeToggle();
   
    },4000)
</script>

</html>