<?php
$active = Array('', '', '', '');
$active[$current] = 'class="selected"';

?>			
<nav class="right">
					<ul class="nav">
						<li><a href="./"  <?php echo $active[1]?>>home</a> |</li>
						<li><a href="portfolio.php"  <?php echo $active[2]?>>portfolio</a> |</li>

						<li><a href="docs/nthomson_resume.pdf">resum&eacute;</a></li>
					</ul>
				</nav>
