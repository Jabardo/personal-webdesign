<!DOCTYPE html>
<html>
  <head>
		<?php include("inc/header.php") ?>	
		    
    <script src="http://code.jquery.com/jquery-1.4.4.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function() { 
    		$('#welcomePic').fadeIn(3000);
			});
		</script>
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
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="cv.php">CV</a></li>      
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </header>
    
    <div id="wrapper">
			<section>
				<ul id="welcome">
					<li>
						<a href="about.php">
						<img src="img/welcome.png" alt="welcome" id="welcomePic">
					</li>
				</ul>
			</section>

<?php include("inc/footer.php") ?>
