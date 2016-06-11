<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
  <nav class="navbar navbar-default navbar-custom">
		<div class="container">
			<div class="navbar-inner">
			<div class="navbar-header navbar-right"><button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nwdNav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="nwdNav">
				<ul class="nav navbar-nav">
					<li><a class="page-scroll btn btn-default" id="btnSpecial" href="#donate">Donate </a><span class="sr-only"></span></li>
					<li><a class="page-scroll" href="#about">About </a><span class="sr-only"></span></li>
					<li><a class="page-scroll" href="#adoption">Adoptions </a><span class="sr-only"></span></li>
					<li><a class="page-scroll" href="#help">How to help </a><span class="sr-only"></span></li>
					<li><a class="page-scroll" href="#partners">Our Partners </a><span class="sr-only"></span></li>
					<li><a class="page-scroll" href="#contact">Contact </a><span class="sr-only"></span></li>
				</ul>
			<div class="navbar-right">
				<a href="#" id="logoFloat"><img src="img/nwd-float-logo.jpg" alt="Northwest Dog Project"></a>
			</div>
			</div>
			</div>
		</div>
	</nav>
	<header class="intro">
		<div class="intro-body">
			<div class="container-fluid">
				<div class="row c-wrapper">
				<!-- Pasted from Bootstrap Site, Carousel Example-->
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner center" role="listbox">
						<div class="item active">
						<img src="img/caro-love.jpg" class="" alt="...">
						<div class="carousel-caption">

						</div>
						</div>
						<div class="item">
						<img src="img/caro-resq.jpg" class="" alt="...">
						<div class="carousel-caption">

						</div>
						</div>
						<div class="item">
						<img src="img/caro-emmasally.jpg" class="" alt="...">
						<div class="carousel-caption">

						</div>
						</div>
						<div class="item">
						<img src="img/caro-big.jpg" class="" alt="...">
						<div class="carousel-caption">

						</div>
						</div>
					</div>

					<!-- Controls -->
					<!--
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					</div>
					-->
				</div><!-- end bootstrap paste-->
			</div>
		</div>
		</div>
	</header>

	<!-- About Section -->
	<section id="about" class="container content-section">
		<div class="container">
				<h2>Our Mission</h2>
				<p class="lead">Northwest Dog Project rescues, re-homes and enhances the lives of neglected, abused and homeless dogs, while promoting responsible pet ownership in the Northwest and beyond.</p>
			<div class="row">
				<div class="col-md-8">
					<h2>About</h2>
					<p class="lead">Northwest Dog Project is a non-profit organization located in Eugene, Oregon. We are so excited to share with the world our passion and dream of helping dogs and the people who love them. We are dedicated to rescuing, training, and re-homing, homeless, unwanted, neglected, and abused dogs. We are also devoted to creating strong bonds within our community and we are very excited about the programs Northwest Dog Project is going to be offering for the community as we grow as an organization! We cannot wait for the adventures to come and the many friends, both dog and human, that we will meet along the way.</p>
				</div>
				<div class="col-md-4">
					<img src="img/org-bio.jpg" alt="" class="img-responsive img-rounded">
					<quote>"The eye opening experiences we’ve had with the dire state of pet overpopulation has motivated us to make a change. We share a vision that one day all will value the lives of dogs --animals-- equally. We are on a mission to help the dogs that need us and the humans who need them."
					<div class="text-right">
					-Emma Scott
					<br>
					Co-Founder & Executive Director
					</div></quote></p>
				</div>
			</div>
		</div>
	</section>
	<!-- adoption section -->
	<section id="adoption" class="container content-section">
		<div class="container">
		<h2>Adoptions</h2>
			<div class="row">
				<div class="col-md-3 col-xs-4 pull-right text-right"></div>
				<div class="col-md-3 col-xs-4">
				<h3>Rose</h3>
				<img src="img/big-dog-rose.jpg" alt="" class="img-responsive img-rounded"></div>
				<div class="col-md-4 col-xs-4">
					<br>
					<br>
					<br>
					<p class="lead">An affectionate and extremely loving, young adult female Pit Bull. Rose is all about her humans and loves to be the center of attention so a home with no other animals would be best for her. This beautiful girl is smart, eager to please and very attentive to her handler. Rose will make a loving and loyal companion no doubt. To learn more about Rose please visit her RescueMe link below.</p>
					<br/>
					<p class="text-left">
					<a href="http://www.rescueme.org/id?n=15-05-02-00303&p=15/05/02/&b=Pit%20Bull" target="_blank">Adopt Rose</a>
					</p>
				</div>
				</div><div class="row">
				<div class="col-md-offset-5 col-md-4 col-xs-6">
					<br>
					<p class="lead">
                                            The sweetest little lady around, this adorable Pom/Chi mix is all LOVE. Marsha is wonderful with other dogs both big and small and has made a friend in every human she has met. We know this special girl is going to be a great addition to a very lucky family. To learn more about Marsha please visit her RescueMe link below.
					</p>
					<br/>
					<p class="text-right">
					<a href="http://www.rescueme.org/id?n=15-07-13-00588&p=15/07/13/&b=Maltese" target="_blank">Adopt Marsha</a>
					</p>
				</div>

				<div class="col-md-3 col-xs-6">
					<h3>Marsha</h3>
					<img src="img/little-dog-marsha.jpg" alt="" class="img-responsive img-rounded">
				</div>
			</div>
			<br>
			<br><br>
			<div class="row">
				<div class="col-xs-offset-1 col-xs-10">
					<p class="lead">Thank you so much for your interest in adopting a Northwest Dog Project dog!
Our goal is to find loving, life long homes for our dogs, & for our adopters to find the perfect canine companion for their lifestyle. We take our matchmaking skills seriously -- for both the dogs & humans we work with.
Please take a moment to fill out our adoption application. This helps us learn about you, your lifestyle & household so we can pair you with your most compatible companion.
We require home checks for all of our adoptions. It is our job to know that our dogs are going to safe, proper environments for their particular personalities and behaviors.
Please let us know if you have any questions. We look forward to helping you find your new best friend!<br/><center>
<a href="http://northwestdogproject.rescueme.org" class="btn btn-default btn-lg" target="_blank">link to adoptable dogs</a>&nbsp;<a href="./files/adoptionapp-nwdog.pdf" class="btn btn-default btn-lg">Adoption Application</a></center>
				</p>
				</div>
			</div>
		</div>
	<br>
	</section>
	<div class="container-fluid">
			<iframe src="http://snapwidget.com/sc/?u=bndkb2dwcm9qZWN0fGlufDMwMHwzfDN8fG5vfDV8bm9uZXxvblN0YXJ0fHllc3xubw==&ve=010115" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height:300px"></iframe>
	</div>
	<!-- how to help section -->
	<section id="help" class="content-section">
		<div class="download-section">
			<div class="container">
				   <h2>How to help</h2>
				   <ul class="list-unstyled banner-social-buttons">
					   <li>
					   <p>A shining bridge from the negativity of what was, to the sheer joy of what will be -- this is the true grit of what it means to foster a NW Dog Project rescue dog. Being a foster dog parent prepares the dog for a home like nothing else can. We are lucky to have a solid base of foster homes, but we could never have enough.</p>
					   <p>When we have a new foster home, we are able to save another life, it's as simple & critical as that.</p>
					   <p>
                                           If you're interested in providing a foundation for a deserving pup -- one who could fit seamlessly into your daily life -- please send your completed foster application to <a href="mailto:info@northwestdogproject.org">info@northwestdogproject.org</a> .
					   </p><center>
						<a href="files/nwdp-foster.pdf" target="_blank" class="btn btn-default btn-lg"><span class="network-name">Foster Application</span></a></center>
					</li><hr><br />
					<li>
						<p>Our volunteers are the heart & soul of Northwest Dog Project. We would run on empty without the compassion & selfless service of crazy dog people. However, crazy dog person experience is not mandatory. We have a number of volunteer opportunities -- ranging from dog walks/agility fun, to painting/construction, to drinking a cold brew & talking up our organization.</p>
						<p>Have a skill set and want to help? Whatever your fancy, we would love to hear from you & help you find your unique niche as a beloved NW Dog Project volunteer.</p>
						<center>
						<img src="img/help-1.jpg" class="img-rounded img-responsive">
						<br>
						<a href="files/nwdp-volunteer.pdf" target="_blank" class="btn btn-default btn-lg"><span class="network-name">Volunteer Application</span></a>
						</center>
					</li>
				   </ul>
			</div>
		</div>
	</section>
	<!-- end help section -->

	<!-- Partners Section -->
	<section id="partners" class="container content-section text-center">
		<h2>Our Partners</h2>
		<br>
		<div class="col-xs-2">
		<a href="http://www.kellybealphotography.com" target="_blank">
		<img src="img/kellybeal-logo.jpg" alt="" class="img-responsive img-circle img-thumbnail">
		<br>Kelly Beal Photography</a>
		</div>
		<div class="col-xs-2">
		<a href="http://thehealthypet.com" target="_blank">
		<img src="img/nwd-float-logo.jpg" alt="" class="img-responsive img-circle img-thumbnail">
		<br>The Healthy Pet</a>
		</div>
		<div class="col-xs-2">
		<a href="https://www.facebook.com/pages/Dr-Doreen-Hock-DVM-
CVA/316237735115775" target="_blank"><img src="img/nwd-float-logo.jpg" alt="" class="img-responsive img-circle img-thumbnail">
		<br>Dr. Doreen Hock</a>
		</div>
		<div class="col-xs-2">
		<a href="http://connectingwithk9s.com" target="_blank">
		<img src="img/nwd-float-logo.jpg" alt="" class="img-responsive img-circle img-thumbnail">
		<br>Connecting with K9s</a>
		</div>
		<div class="col-xs-2">
			<a href="http://kateanddesign.com" target="_blank">
			<img src="img/kateanddesign-logo.jpg" alt="" class="img-responsive img-circle img-thumbnail">
			<br>Kate & Design</a>
		</div>
		<div class="col-xs-2">
			<a href="https://www.facebook.com/VendorNo5" target="_blank">
			<img src="img/vendorfive-logo.jpg" alt="" class="img-responsive img-circle img-thumbnail">
			<br>Vendornofive Dorianne</a>
		</div>
	</section>

	<!-- Donations Section -->'
	<section id="donate" class="container content-section text-center">
		<div class="row">
				<h2>Donation Options</h2>
				<p>Any donation NW Dog Project receives goes directly to the quality care, training and forever homing of our dogs. We are completely dependent on donations -- your generosity keeps us in the business of finding the best possible homes for neglected, abused & homeless dogs. We are so grateful for your support & truly could not do this work without you.</p>
		</div>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-3"><p class="lead">
			from shelter intake
				<img src="img/donation-before.jpg" class="img-rounded img-responsive"></p>
			</div>
			<div class="col-xs-offset-1 col-xs-3"><p class="lead">
			to NW dog project
				<img src="img/donation-middle.jpg" class="img-rounded img-responsive"></p>
			</div>
			<div class="col-xs-offset-1 col-xs-3"><p class="lead">
			to forever home
				<img src="img/donation-after.jpg" class="img-rounded img-responsive"></p>
			</div>
                </div><br/>
                <div class="row">
			<p>Looking for more of a commitment? Become an official Northwest Dog Project member by donating monthly. Monthly donations provide us with a sustainable budget so that we are able to save even more lives!</p>
		</div>
		<div class="row">
		<div class="col-xs-offset-2 col-xs-3">
		<p class="lead">One time donation:<br/>
				<ul class="list-inline banner-social-buttons">
					<li>

						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="nwdogproject.emma@gmail.com">

<!-- Specify a Donate button. -->
<input type="hidden" name="cmd" value="_donations">

<!-- Specify details about the contribution -->
<input type="hidden" name="item_name" value="Donation">
<input type="hidden" name="item_number" value="Donation">
<input type="text" name="amount" placeholder="Enter amount here">
<input type="hidden" name="currency_code" value="USD">
<br/><br />
<!-- Display the payment button. -->
<input type="image" name="submit" border="0" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" alt="PayPal - The safer, easier way to pay online">
</form>
					</li>
					</p>
				</ul>
				<br/>
			</div>
			<div class="col-xs-offset-1 col-xs-3">
				<p class="lead">Monthly donation:<br/><br /><br />
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ADFALNY29RA9C">
<input type="image" name="submit" border="0" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" alt="PayPal - The safer, easier way to pay online">
</form>

				</p>
			</div>
			</div>
			<div class="row">
				<p>We strive to be as transparent as possible with our community of rescue crusaders. Whether it be donating a small amount to buying dog treats, or giving a generous chunk to help cover 5 spay/neuters -- a key component of donating is knowing that your money went exactly where you intended it to go. You're welcome to inquire about specific needs or dog sponsorship if you'd like to see your money go to a specific cause/project here at Northwest Dog Project.</p>
				<p>Thank you so much for your interest and teamwork in helping us save these deserving dogs.</p>
				<a href="img/sponsorship-program.jpg" target="_blank" class="btn btn-default btn-lg">Sponsorship Program</a>
		</div>
	</section>

	<!--contact section -->
	<section id="contact" class="container content-section">
		<h2>Contact Information</h2>
		<br>
	 <!-- Emma About -->
		<div class="row">
			<div class="col-xs-3">
				<img src="img/emma-bio.jpg" class="img-responsive img-rounded" alt="Emma Scott - NWDP">
			</div>
			<div class="col-xs-9">
				<div class ="text-left">
					<h3>Emma Scott</h3>
					<h4>Executive Director & Co-Founder</h4>
					<p class="lead"><a href="mailto:emma@northwestdogproject.org">emma@northwestdogproject.org</a></p>
				</div>
			</div>
		</div><br />

		<!-- Sally About -->
		<div class="row">
			<div class="col-xs-9">
				<div class ="text-right">
					<h3>Sally Roney</h3>
					<h4>Associate Director & Co-Founder</h4>
					<p class="lead"><a href="mailto:sally@northwestdogproject.org">sally@northwestdogproject.org</a></p>
				</div>
			</div>
			<div class="col-xs-3">
				<img src="img/sally-bio.jpg" class="img-responsive img-rounded" alt="Sally Roney - NWDP">
			</div>
		</div>
	</section>

	<footer>
		<div class="container text-center">
			<p>Copyright &copy; Northwest Dog Project</p>
			<p><small>photography by <a href="http://kellybealphotography.com" target="_blank">kelly beal photography</a> | created by <a href="https://twitter.com/csjoblom" target="_blank">@csjoblom</a></small></p>
		</div>
	</footer>
	<!-- Plugin JavaScript -->
	<script src="js/jquery.easing.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="js/main.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		console.log("ready");
	});
	</script>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-56542307-1', 'auto');
	ga('require', 'displayfeatures');
	ga('send', 'pageview');
	</script>

<?php get_footer(); ?>
