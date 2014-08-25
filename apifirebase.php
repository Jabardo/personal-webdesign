<!doctype html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>Alvaro Hernandez | Software Developer and Network Engineer</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster%7CShadows+Into+Light%7CDroid+Serif%7CChanga+One%7COpen+Sans:400italic,700italic,400,800,700%7CIndie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css" type="text/css" media="screen" title="no title">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen" title="no title">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='img/lego.png' rel='shortcut icon' type='image/png'>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>    
    <script src="https://cdn.firebase.com/js/client/1.0.18/firebase.js"></script>
  </head>
  <body>
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
					<div id='messagesDiv'></div>
			  	<div class="att">
			  		<label for="nameInput"> Leave a message -> </label>
			  		<input type='text' id='nameInput' placeholder='Your Name'>
			  		<input type='text' id='messageInput' placeholder='Your Message'>
			  	</div>
			  <script src="js/apfirebase.js"></script>
			</section>
			
			<footer>
			  <p>Check more information about Firebase <a href="https://www.firebase.com" target="_blank">here</a></p>
				<a href="http://twitter.com/alv_jabardo"><img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
	      <a href="https://www.facebook.com/alvaro.hernandezjabardo"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
	      <a href="https://www.linkedin.com/in/alvarohernandezjabardo"><img src="img/linkedin-wrap.png" alt="LinkedIn Logo" class="social-icon"></a>
	      <a href="https://github.com/Jabardo"><img src="img/github-wrap.png" alt="Github Logo" class="social-icon"></a>
	      <p>&copy;2014 Alvaro Hernandez Jabardo.</p>
	    </footer>
		</div>
  </body>
</html>