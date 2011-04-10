<!DOCTYPE HTML>
<!--LINODE-->
<html>
	<?php include('include/headSection.php'); ?>
	<body>
		<div class="wrapper">
			<?php $current=1; include('include/head.php'); ?>

			<div id="main" class="contain clear">
				<div id="content">
					<div id="leftContent" class="left">
						<p>
							<strong>Email: </strong><script language="JavaScript">document.write(hideEmail("gmail", "nthomsondev", "com"));</script><br />
							<strong>Phone: </strong><script language="JavaScript">document.write(hidePhone("951", "0069", "407"));</script>
						</p>
						<p>
							<a href="http://github.com/nthomson"><img src="img/github.png" width="28" height="28"/></a>
							<a href="http://www.facebook.com/profile.php?id=100000116258369"><img src="img/facebook.png" /></a>
							<a href="http://twitter.com/#!/sunshineq117"><img src="img/twitter.png" /></a>
						</p>
						<form name="contact" class="contact">
							<p>
								<label for="name">Name:</label>
								<input class="niceInput" type="textbox" id="nameInput" name="name"  />
							</p>
							<p>
								<label for="replyTo">E-Mail:</label>
								<input class="niceInput" type="textbox" id="replyto" name="replyTo"  />
							</p>

							<p >
								<textarea class="niceInput" id="msgArea" name="message" ></textarea>
							</p>

							<p class="center clear submit">
								<input type="button" value="Send" onclick="doWork()"/>
							</p>
							<p id="response"></p>
						</form>
					</div>
					<div id="rightContent" class="right">
						<p>
							Hello! My name is Nicholas Thomson. I'm a web developer specializing in
							implementing designs in standards-compliant HTML, CSS and JavaScript.
						</p>
						<p>
							This site is where I'll post any projects I've done over the years, you can see them by going to
						 	my <a href="portfolio.php">portfolio</a> page. At the moment there are very few entries, but I'm
							working towards changing that.
						</p>
						<p>
							You can contact me through any of the methods listed to the left, I'm most likely to
							respond to an email. You can also fill out the contact form and it will email me automatically. You should feel free to contact me through Facebook or Twitter. I don't
							use them frequently, but I should get your message within a reasonable amount of time.
						</p>
						
					</div>
				</div>
			</div>
		</div>
		<?php include('include/foot.php'); ?>
	</body>
</html>
