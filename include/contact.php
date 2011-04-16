<p>
	<strong>Email: </strong><script language="JavaScript">document.write(hideEmail("gmail", "nthomsondev", "com"));</script><br />
	<strong>Phone: </strong><script language="JavaScript">document.write(hidePhone("951", "0069", "407"));</script>
</p>
<p>
	<a href="http://github.com/nthomson"><img title="Github" src="img/icons/github.png" /></a>
    <a href="http://nick.kanicweb.com/id_rsa.pub"><img title="Public Key" src="img/icons/rsa_key.png" /></a>
	<a href="http://www.facebook.com/profile.php?id=100000116258369"><img title="Facebook" src="img/icons/facebook.png" /></a>
	<a href="http://twitter.com/#!/sunshineq117"><img title="Twitter" src="img/icons/twitter.png" /></a>
</p>
<form name="contact" class="contact">
	<p>
		<label for="name">Name:</label>
		<input class="niceInput" type="textbox" placeholder="Your Name" id="nameInput" name="name"  />
	</p>
	<p>
		<label for="replyTo">E-Mail:</label>
		<input class="niceInput" type="textbox" placeholder="you@example.com" id="replyto" name="replyTo"  />
	</p>

	<p >
		<textarea class="niceInput" id="msgArea" placeholder="Your message goes here" name="message" ></textarea>
	</p>

	<p class="center clear submit">
		<input type="button" value="Send" onclick="doWork()"/>
	</p>
	<p id="response"></p>
</form>
