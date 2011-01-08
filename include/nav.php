<?php
$active = Array('', '', '', '');
$active[$current] = 'class="selected"';

?>			
<nav class="right">
					<ul class="nav">
						<li><a href="./"  <?=$active[1]?>>home</a> |</li>
						<li><a href="portfolio.php"  <?=$active[2]?>>portfolio</a> |</li>
						<li><a href="contact.php"  <?=$active[3]?>>contact</a> |</li>
						<li><a href="docs/resume.pdf">resum&eacute;</a></li>
					</ul>
				</nav>
