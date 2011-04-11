<p>
	<strong>Email: </strong><script language="JavaScript">document.write(hideEmail("gmail", "nthomsondev", "com"));</script><br />
	<strong>Phone: </strong><script language="JavaScript">document.write(hidePhone("951", "0069", "407"));</script>
</p>
<p>
	<a href="http://github.com/nthomson"><img title="Github" src="img/github.png" /></a>
	<a href="http://www.facebook.com/profile.php?id=100000116258369"><img title="Facebook" src="img/facebook.png" /></a>
	<a href="http://twitter.com/#!/sunshineq117"><img title="Twitter" src="img/twitter.png" /></a>
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
