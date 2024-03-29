<footer>
	<div id="footer">
		<div class="row">
			<div class="flex footer-con">
				<div class="left">
					<div class="logo-holder">
						<h1>Get in Touch</h1>
						<a href="home"><img loading="lazy" src="public/images/content/logo.png" alt="Logo"></a>
					</div>

					<div class="comp-info">
						<a>Brian M. Popp</a>

						<div class="phone content">
							<div class="text-left">
								<div class="label">Phone</div>
								<a href="tel:<?php $this->info("phone1"); ?>">
									<?php $this->info("phone1"); ?>
								</a> |
								<a href="tel:<?php $this->info("phone2"); ?>">
									<?php $this->info("phone2"); ?>
								</a>
							</div>
						</div>

						<div class="email content">
							<div class="text-left">
								<div class="label">Email</div>
								<a href="mailto:<?php $this->info("email"); ?>">
									<?php $this->info("email"); ?>
								</a>
							</div>
						</div>

						<div class="location content">
							<div class="text-left">
								<div class="label">Location</div>
								<a>
									<?php $this->info("address"); ?>
								</a>
							</div>
						</div>

						<div class="label">FOLLOU US:</div>
						<div class="socials">
							<a href="<?php $this->info('fb_link') ?>" target="_blank"><img loading="lazy"
									src="public/images/content/fb.png" alt="facebook"></a>
							<a href="<?php $this->info('gp_link') ?>" target="_blank"><img loading="lazy"
									src="public/images/content/gp.png" alt="google"></a>
						</div>
					</div>
				</div>

				<div class="right">
					<div id="contact" class="contact-con">
						<h1>Contact Us</h1>
						<p>I will be glad to answer your questions, Please fill out the form and send us a message, i
							will get back to you right away.</p>
						<form action="sendContactForm" method="post" class="sends-email ctc-form">

							<label><span class="ctc-hide">Name</span>
								<input type="text" name="name" placeholder="Name:">
							</label>

							<label><span class="ctc-hide">Email</span>
								<input type="text" name="email" placeholder="Email:">
							</label>

							<label><span class="ctc-hide">Phone</span>
								<input type="text" name="phone" placeholder="Phone;">
							</label>

							<label><span class="ctc-hide">Message</span>
								<textarea name="message" cols="30" rows="10" placeholder="Message:"></textarea>
							</label>

							<label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>

							<div class="text-left ctcCheckbox">
								<label>
									<input type="checkbox" name="consent" class="consentBox">I hereby consent to
									having this
									website store my submitted information so that they can respond to my inquiry.
								</label><br>

								<label>
									<input type="checkbox" name="termsConditions" class="termsBox" /> I hereby
									confirm that
									I have read and understood this website’s <a
										href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy
										Policy.</a>
								</label>
							</div>

							<div class="g-recaptcha"></div>

							<button type="submit" class="ctcBtn btn hvr-grow hvr-sweep-to-top" disabled>SUBMIT</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="row flex">
			<div class="nav-holder">
				<nav>
					<ul>
						<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a>
						</li>
						<li <?php $this->helpers->isActiveMenu("about"); ?>><a
								href="<?php echo URL ?>about#content">ABOUT</a></li>
						<li <?php $this->helpers->isActiveMenu("services"); ?>><a
								href="<?php echo URL ?>services#content">SERVICES</a></li>
						<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a
								href="<?php echo URL ?>reviews#content">REVIEWS</a></li>
						<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a
								href="<?php echo URL ?>gallery#content">GALLERY</a></li>
						<li <?php $this->helpers->isActiveMenu("contact"); ?>><a
								href="<?php echo URL ?>contact#content">CONTACT US</a></li>
					</ul>
				</nav>
			</div>


			<div class="copyrights">
				<p class="copy">
					COPYRIGHT ©
					<?php echo date("Y"); ?>
					<?php $this->info("company_name"); ?>. ALL RIGHTS RESERVED.
					<?php if ($this->siteInfo['policy_link']): ?>
						<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>.
					<?php endif ?>
				</p>
				<p class="techno">
					<a href="http://technodreamoutsourcing.com/">Web Design</a> Done by <img loading="lazy"
						src="public/images/hd-logo.png" alt="">
				</p>
			</div>
		</div>
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<script>
	// EFFECTS / ANIMATION
	function reveal() {
		var reveals = document.querySelectorAll(".reveal");

		for (var i = 0; i < reveals.length; i++) {
			var windowHeight = window.innerHeight;
			var elementTop = reveals[i].getBoundingClientRect().top;
			var elementVisible = 150;

			if (elementTop < windowHeight - elementVisible) {
				reveals[i].classList.add("active");
			} else {
				reveals[i].classList.remove("active");
			}
		}
	}

	window.addEventListener("scroll", reveal);

	// HEADER FIXED
	// document.addEventListener("DOMContentLoaded", function () {
	// 	var header = document.getElementById("header");
	// 	var logoImg = document.querySelector("#header .logo-holder img");

	// 	function updateHeader() {
	// 		if (window.scrollY > 0) {
	// 			header.classList.add("fixed");
	// 		} else {
	// 			header.classList.remove("fixed");
	// 		}

	// 		// Resize logo image based on scroll position
	// 		var maxImgWidth = 250;
	// 		var scrolledPercentage = Math.min(1, window.scrollY / 100); // You can adjust the factor based on your design
	// 		var newImgWidth = maxImgWidth + (1 - scrolledPercentage) * (logoImg.width - maxImgWidth);
	// 		logoImg.style.maxWidth = newImgWidth + "px";
	// 	}

	// 	// Initial call to set header and image size
	// 	updateHeader();

	// 	window.addEventListener("scroll", function () {
	// 		updateHeader();

	// 		// Check if scroll position is at the top
	// 		if (window.scrollY === 0) {
	// 			// Reset the image size when back at the top
	// 			logoImg.style.maxWidth = "489px"; // Adjust the original max-width value
	// 		}
	// 	});
	// });

</script>

<?php if ($this->siteInfo['cookie']): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])): ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function () {
			$('.g-recaptcha').each(function (index, el) {
				grecaptcha.render(el, { 'sitekey': '6LeWgAkpAAAAAFSpZWANpqUHal-W0bgABjVJveRl' });
			});
		};

		$('.consentBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.termsBox').length) {
					if ($('.termsBox').is(':checked')) {
						$('.ctcBtn').removeAttr('disabled');
					}
				} else {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

		$('.termsBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.consentBox').is(':checked')) {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

	</script>

<?php endif; ?>


<?php if (in_array($view, ["home", "gallery"])): ?>
	<script type="text/javascript" src="public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="public/scripts/jquery.pajinate.js"></script>
	<script>
		$(document).ready(function () {
			$('#gall1').pajinate({
				num_page_links_to_display: 3,
				items_per_page: 10
			});
			$('.fancy').fancybox({
				helpers: {
					title: {
						type: 'over'
					}
				}
			});
		})
	</script>
<?php endif; ?>


<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span
		style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>

</html>