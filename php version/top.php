

<div id="top">
		<div id="topinfo">
			<div id="photo">
				<IMG src="https://sites.google.com/site/kiyoasis/_/rsrc/1326222498526/home/kiyo.png?height=200&width=180">
			</div>
			<div id="info">
				<H2>Kiyoshi Nakayama<br></H2>
				<H3>Ph.D. Student<br>
				Donald Bren School of Information and Computer Science<br>
				University of California Irvine</H3>		
			</div>
		</div>        
		<div id="topmenu">  
			<a  class="textbutton" href="index.php"><div <?php if(curPageName()=="index.php"){ ?>class="current"<?php ;}  else {?> class="button1" <?php }?> >Home</div></a>
			<a  class="textbutton" href="biography.php"><div <?php if(curPageName()=="biography.php"){ ?>class="current"<?php ;}  else {?> class="button1" <?php }?> >Biography</div></a>
			<a  class="textbutton" href="publications.php"><div <?php if(curPageName()=="publications.php"){ ?>class="current"<?php ;}  else {?> class="button1" <?php }?> >Publications</div></a>
			<a  class="textbutton" href="awards.php"><div <?php if(curPageName()=="awards.php"){ ?>class="current"<?php ;}  else {?> class="button1" <?php }?> >Awards</div></a>
			<a  class="textbutton" href="projects.php"><div <?php if(curPageName()=="projects.php"){ ?>class="current"<?php ;}  else {?> class="button1" <?php }?> >Projects</div></a>
			
		</div>
    </div>
	<?php
	function curPageName() {
	return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}
	?>
