<!DOCTYPE html>
<html>
  <head>
    <?php include("inc/header.php") ?>
  </head>
  
  <body>
  	<?php include_once("analyticstracking.php") ?>
  	  
    <header>
      <a href="index.php" id="logo">
        <h1>Alvaro Hernandez Jabardo</h1>
        <h2>Software Developer and Network Engineer</h2>
      </a>
      <nav>
        <ul>
          <li><a href="portfolio.php" class="selected">Portfolio</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="cv.php">CV</a></li>      
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </header>
    
    <div id="wrapper">
      <section>
        <ul id="gallery">
          <li>
            <a href="apifirebase.php">
              <img src="img/firebase.png" alt="Back-End test with Firebase database using simple chat app.">
              <p>Back-End test with Firebase database and AJAX using simple chat app. Leave me a message!</p>
            </a>  
          </li>
          
          <li>
            <a href="flexbox.html">
              <img src="img/flexbox.png" alt="Playing with Flexbox Layout Module.">
            </a> 
            <p>Take a look at Flexbox Layout Module inside. Click <a href="http://caniuse.com/flexbox" target="_blank">here</a> to check if your browser supports Flexbox.</p>
          </li>
        
          <li>
            <a href="apflickrajax.html">
              <img src="img/flickr-logo.jpg" alt="Use of AJAX and JSON with Flickr API">
              <p>Use of AJAX and JSON with Flickr API. Search for pictures inside.</p>
            </a>  
          </li>
          
          <li>
            <a href="canvas.html">
              <img src="img/drawing_canvas.jpg" alt="Drawing on canvas element with jQuery">
              <p>Be an artist! Draw on canvas element with jQuery.</p>
            </a>  
          </li>
          
          <li>
            <a href="https://www.youtube.com/watch?v=9adxBKXuYsQ" target="_blank">
              <img src="img/VideoDance.jpg" alt="Dancing project using Adobe Effects and Blender.">
              <p>Dancing project using Adobe Effects and Blender.</p>
            </a>  
          </li>
          
          <li>
            <a href="movies.html">
              <img src="img/angularjs.png" alt="Working with Angular.js JavaScript Framework.">
              <p>Movie Reviews with Angular.js JavaScript Framework. Check them out and leave a review!</p>
            </a>  
          </li>
          
            
        </ul>
      </section>
      
<?php include("inc/footer.php") ?>
