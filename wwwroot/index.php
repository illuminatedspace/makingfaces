<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MakingFaces - an InteractAble product</title>
    <script type="text/javascript">
        function preloader(){
            document.getElementById("loading").style.display = "none";
            document.getElementById("content").style.display = "block";
        }//preloader
        window.onload = preloader;
	</script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:300' rel='stylesheet' type='text/css'>
    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index" data-spy="scroll" data-target=".navbar-fixed-top">
    
    <!-- PHP FOR CONTACT FORM -->
    <?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
//		$human = intval($_POST['human']);
		$from = 'admin@interactable.co'; 
		$to = 'admin@interactable.co'; 
		$subject = 'Message from MakingFaces Contact Form ';
		$headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From: " . $from;
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
//		//Check if simple anti-bot test is correct
//		if ($human !== 5) {
//			$errHuman = 'Your anti-spam is incorrect';
//		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage /*&& !$errHuman*/) {
	if (mail ($to, $subject, $body, $headers)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch soon.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>
    
<div id="loading"></div>
<div id="content" data-spy="scroll" data-target="#bs-example-navbar-collapse-1">
    <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-shrink ">
            <div class="navbarpic"></div>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#page-top">
                        <div class = top-icon><img src="img/TemplateImg/MakingFacesIcon.png" alt="MakingFaces icon"></div>
                        <div class = top-logo><img src="img/TemplateImg/logo.png" alt="MakingFaces logo"></div></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="page-scroll">
                            <a href="#page-top"> Home</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#features"> Features</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#faq"> F.A.Q.</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about"> About</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#contact"> Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        <!-- /.container-fluid -->
        </nav>
        <header class="home">
            <div  id="output" class="home_wrap">
             <div id="container">
                <div class="container">
                    <div class="row">
                            <div class="col-md-5">
                                <div class="intro-text">
                                    <div class = 'blue-intro'>
                                    Practice showing <br> and reading emotions, <br> and have fun doing it!
                                    </div>
                                    <div class = 'green-intro'>
                                    Available now <br> for the Apple iPad.
                                    </div>
                                    <div class = 'apple-store-button'><a href="https://itunes.apple.com/us/app/makingfaces-by-interactable/id1100850122?mt=8"><img src="img/TemplateImg/apple-store.png" alt="Available in the Apple Store Button"> </a></div>	
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="intro-screenshot">
                                    <img src="img/TemplateImg/01-game.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </header>
    
    <!-- EMPTY ANCHOR ELEMENT TO COMPENSATE FOR HEADER IN ANCHOR SCROLL -->
    <a class="anchor" id="features"></a>
    <section class="success" id="features">    
            <div class="container">
                <div class="row">
                    <div class="header-image">
                        <h2 class="main_heading">MakingFaces Features</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-header">
                            MakingFaces is designed to help those with autism spectrum disorders who have difficulty identifying emotions in others and themselves.
                    </div>
                    <div class="feature-header-image">
                        <div class="col-md-8">
                            <div class="feature-image">
                                <img src="img/TemplateImg/02-game.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="how-it-works-header">
                            How It Works
                        </div>
                    </div>
                    <div class="feature">
                        <div class="col-md-4">
                            <div class="feature-title-left">
                                <h4>Choose Your Character</h4>
                            </div>
                        </div>	
                        <div class="col-md-8">
                            <div class="feature-image">
                                <img src="img/TemplateImg/03-characters.png">
                            </div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="col-md-8">
                            <div class="feature-image">
                                <img src="img/TemplateImg/04-hints.png">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-title-right"><h4>Choose Your Level</h4></div>
                            <div class="feature-description-right">
                                EASY level has written hints.<br><br> HARD level has NO written hints.
                            </div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="col-md-4">
                            <div class="feature-title-left">
                                <h4>Make the Face</h4>
                            </div>
                            <div class="feature-description-left">
                                An emotion is randomly picked for your chosen character. Match the nose/mouth and the eyes.<br><br>Emotions:<br><ul><li>Angry</li><li>Sad</li><li>Suprised</li><li>Happy</li><li>Bored</li><li>Nervous</li></ul>
                            </div>
                        </div>	
                        <div class="col-md-8">
                            <div class="feature-image">
                                <img src="img/TemplateImg/05-incorrect-face.png">
                                <img src="img/TemplateImg/06-correct-face.png">
                            </div>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="col-md-8">
                            <div class="feature-image">
                                <img src="img/TemplateImg/07-selfie.png">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-title-right"><h4>Selfie Time!</h4></div>
                            <div class="feature-description-right">
                                Match your face to the emotion you see!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <a class="anchor" id="faq"></a>
    <section class="success" id="faq">
        <div class="container">
            <div class="row">
                <div class="header-image">
                    <h2 class="main_heading">Frequently Asked Questions</h2>
                </div>
                <div class="col-lg-12">
                    <div class="faq-question">
                        <strong>Q: </strong>What's the difference between the EASY and HARD levels?
                    </div>
                    <div class="faq-answer">
                        <strong>A: </strong>The EASY level has on-screen hints that indicate what the face parts should look like; the HARD level does not have these hints.
                    </div>
                    <div class="faq-question">
                        <strong>Q: </strong>Does my child need to know how to read to use this app?
                    </div>
                    <div class="faq-answer">
                        <strong>A: </strong>A basic level of reading is necessary to read the emotion requested. If your hcild does not read yet, we recommend using the app alongside him or her, for guidance with the game.
                    </div>
                    <div class="faq-question">
                        <strong>Q: </strong>Can i print the face comparison page after the selfie is taken?
                    </div>
                    <div class="faq-answer">
                        <strong>A: </strong>You sure can! When you reach the comparison page, simultaneously press the Sleep/Awake button (located at the top of the iPad) and the Home button. This takes a screenshot, which will automatically be saved to your photos. To print, go to the Photos app and find the screenshot. Tap on the share button (in the lower right-hand corner) and find the option to print. You can also share this photo via email, text message or through a variety of other apps.
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="faq-footer">
                        Have another question that hasn't been answered here?<br>Feel free to <a href="#contact">Contact Us</a>.
                    </div>
                </div>
            </div>
        </div>
	</section>
    
    <a class="anchor" id="about"></a>
	<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="header-image">
                <h2 class="main_heading">About</h2>
            </div>
            <div class="container">
                <div class="about-image-left-1">
                    <div class="col-md-6">
                        <img src="img/TemplateImg/logo.png">
                    </div>
                </div>
                <div class="about-text-right">
                    <div class="col-md-6">
                        MakingFaces was born out of uChoose, InteractAble's innovative iPad-based social skills role-play game.
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="about-text-left">
                    <div class="col-md-6">
                        MakingFaces is available for the Apple iPad.
                        <a href="https://itunes.apple.com/us/app/makingfaces-by-interactable/id1100850122?mt=8">
                            <div class="apple-store-button-about">
                                <img src="img/TemplateImg/apple-store.png">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="about-image-right">    
                    <div class="col-md-6">
                        <img src="img/TemplateImg/MakingFacesIcon.png">
                    </div>
                </div>
            </div>
            <a href="http://uchoosegame.com/">
                <div class="container">
                    <div class="about-image-left">
                        <div class="col-md-6">

                            <img src="img/TemplateImg/uChooseIcon.png">
                        </div>
                    </div>
                    <div class="about-text-right">
                        <div class="col-md-6">
                            Click here to learn more about the game MakingFaces came from, uChoose.
                        </div>
                    </div>
                </div>
            </a>
        </div>
        </div>
	</section> 
        
    <a class="anchor" id="contact"></a>
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="header-image">
                    <h2 class="main_heading">Contact</h2>
                </div>
            </div>
			<div class="gap-50"></div>
            <div class="row">
                <div class="col-md-7 animateright">
                    <form role="form" method="post" action="#contact">
                        <div class="row">
                            <div class="form-group input-group col-xs-12 floating-label-form-group">
								<span class="input-group-addon"> <i class="fa fa-user fa-lg"></i> </span>
  
								<label for="name" class="control-label">Name</label>
								
								<input class="form-control" type="text" name="name" id="name" placeholder="Name">
                                <?php echo "<p class='text-danger'>$errName</p>";?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group input-group col-xs-12 floating-label-form-group">
                                <span class="input-group-addon"> <i class="fa fa-envelope-o fa-lg"></i> </span>
								<label for="email" class="control-label">Email Address</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="example@email.com">
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group input-group col-xs-12 floating-label-form-group message-addon">
                                <span class="input-group-addon"> <i class="fa fa-pencil-square-o fa-lg"></i> </span>
								<label for="message" class="control-label">Message</label>
                                <textarea placeholder="Message" class="form-control" name="message" id="message" rows="5"></textarea>
                                <?php echo "<p class='text-danger'>$errMessage</p>";?>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-default btn-lg">
                            </div>
                        </div>
                        <div class="form-group">
		                  <div class="col-sm-10 col-sm-offset-2">
                              <?php echo $result; ?>
			                 <!-- Will be used to display an alert to the user -->
		                  </div>
	                   </div>
                    </form>
                </div>
				<div class="col-md-5 animateleft">
					<div class="inline-icons-text">
						<div class="inline-icon">
							<div class="btn-social btn-outline"><i class="fa fa-fw fa-envelope"></i>
							</div>
						</div>
						<div class="inline-icon">
							<div class="marker">admin@interactable.co</div>
						</div>
					</div>
                </div>
            </div>
        </div>
	</section>
    
    <footer>
        <div class = 'footer-header-cloud'>
        </div>
        <div class="footer-content">
            <div class="footer-section">
                <div class='col-md-1'>
                    <div class="footer-title">InteractAble</div>
                </div>
                <div class='col-md-2'>
                    <div class="footer-links">
                        <a href="http://interactable.co/">Home</a><br>
                        <a href="http://interactable.co/team/">Team</a><br>
                        <a href="http://interactable.co/careers/">Careers</a><br>
                        <a href="http://interactable.co/contact-us/">Contact</a>
                    </div>
                </div>
            </div>
            <div class="footer-section">
                <div class='col-md-1'>
                    <div class="footer-title">MakingFaces</div>
                </div>
                <div class='col-md-2'>
                    <div class="footer-links">
                        <a href="http://interactable.co/">Home</a><br>
                        <a href="http://interactable.co/team/">Features</a><br>
                        <a href="http://interactable.co/careers/">About</a><br>
                        <a href="http://interactable.co/contact-us/">Contact</a><br>
                        <a href="https://itunes.apple.com/us/app/makingfaces-by-interactable/id1100850122?mt=8">In the App Store</a>
                    </div>
                </div>
            </div>
            <div class="footer-section">
                <div class='col-md-1'>
                    <div class="footer-title">uChoose</div>
                </div>
                <div class='col-md-2'>
                    <div class="footer-links">
                        <a href="http://uchoosegame.com/">Home</a><br>
                        <a href="http://uchoosegame.com/features/">Features</a><br>
                        <a href="http://uchoosegame.com/advisory-board/">Advisory Board</a><br>
                        <a href="http://interactable.tumblr.com/">Blog</a><br>
                        <a href="http://uchoosegame.com/contact-us/">Contact Us</a><br>
                        <a href="https://itunes.apple.com/us/app/uchoose-by-interactable/id1074064211?mt=8">In the App Store</a>
                    </div>    
                </div>
            </div>  
        </div>
    </footer>
</div>
    
	<script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	
	<script src="js/dat.gui.min.js"></script>
    <script src="js/fss.min.js"></script>
    
	
	<script src="js/centro.js"></script>
	
    
  

</body>

</html>
