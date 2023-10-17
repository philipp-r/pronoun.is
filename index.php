<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" type="text/css" href="/assets/style.css">
		<title>pronouns.3q3.de</title>
	</head>
	<body data-sveltekit-preload-data="hover">
		<div style="display: contents">

      <?php
			/*
			 	PRONOUNS
			*/
			if(
					empty($_GET['lang']) &&
					!empty($_GET['subjPronoun']) && preg_match("/^[a-zA-Z]+$/", $_GET['subjPronoun']) &&
					!empty($_GET['objPronoun']) && preg_match("/^[a-zA-Z]+$/", $_GET['objPronoun'])
			) { ?>
				<div class="section title">
					<h1><a href="/index.php">pronouns.3q3.de</a> <?php echo $_GET['subjPronoun']; ?>/<?php echo $_GET['objPronoun']; ?></h1>
				</div>
				<div class="section examples">
						<h2>Here are some example sentences using my <em><?php echo $_GET['subjPronoun']; ?>/<?php echo $_GET['objPronoun']; ?></em> pronouns:</h2>
						<p><span class="sentence"><b style="text-transform: capitalize;"><?php echo $_GET['subjPronoun']; ?></b> went to the park.</span></p>
						<p><span class="sentence">I went with <b><?php echo $_GET['objPronoun']; ?></b>.</span></p>
				</div>
				<div class="section own">
						<p>You can <a hreflang="en" href="/index.php">use this website</a> to display your pronouns - just like <b><?php echo $_GET['subjPronoun']; ?></b> did.</p>
				</div>
			<?php }


			/*
			 	GERMAN
			*/
			elseif(
					!empty($_GET['lang']) && $_GET['lang']=='DE' &&
					!empty($_GET['subjPronoun']) && preg_match("/^[a-zA-Z]+$/", $_GET['subjPronoun']) &&
					!empty($_GET['objPronoun']) && preg_match("/^[a-zA-Z]+$/", $_GET['objPronoun'])
			) { ?>
				<div class="section title">
					<h1><a hreflang="en" href="/index.php">pronouns.3q3.de</a> <?php echo $_GET['subjPronoun']; ?>/<?php echo $_GET['objPronoun']; ?></h1>
				</div>
				<div class="section examples">
						<h2>Beispielsätze für <em><?php echo $_GET['subjPronoun']; ?>/<?php echo $_GET['objPronoun']; ?></em> Pronomen:</h2>
						<p><span class="sentence"><b style="text-transform: capitalize;"><?php echo $_GET['subjPronoun']; ?></b> ging in den Park.</span></p>
						<p><span class="sentence">Ich ging mit <b><?php echo $_GET['objPronoun']; ?></b>.</span></p>
				</div>
				<div class="section own">
						<p>Du kannst <a hreflang="en" href="/index.php">auch diese Webseite nutzen</a> um deine Pronomen anzuzeigen, genauso wie <b><?php echo $_GET['subjPronoun']; ?></b> es getan hat.</p>
				</div>
			<?php }



			/*
			 	HOMEPAGE
			*/
			else {
      ?>
				<div class="section title">
					<h1><a hreflang="en" href="/index.php">pronouns.3q3.de</a></h1>
				</div>
				<div class="section content">
        	<h2>Usage</h2>
        	<p>Choose a link below to display examples of your pronouns.</p>
        	<p>For example: <code>https://pronouns.3q3.de/he/him/</code></p>
        	<p>You can use SVG badges for all pronouns. <a hreflang="en" href="https://pronouns.3q3.de/she/her/"><img src="https://pronouns.3q3.de/she/her.svg"></a></p>
        	<p>Add .svg to the URL: <code>https://pronouns.3q3.de/she/her.svg</code><br>
					change the color (red/blue/green/yellow): <code>https://pronouns.3q3.de/she/her-red.svg</code><br>
					or use any hex color: <code>https://pronouns.3q3.de/she/her-7ed6d3.svg</code></p>

        	<h3>Other languages</h3>
        	<p>This site also works in German.</p>
        	<p>For example: <code>https://pronouns.3q3.de/DE/er/ihm/</code></p>
        	<p>You can use SVG badges in German. <a hreflang="de" href="https://pronouns.3q3.de/DE/sie/ihr/"><img src="https://pronouns.3q3.de/DE/sie/ihr.svg"></a></p>
					<p>Add .svg to the URL: <code>https://pronouns.3q3.de/DE/sie/ihr.svg</code><br>
					change the color (red/blue/green/yellow): <code>https://pronouns.3q3.de/DE/sie/ihr-yellow.svg</code><br>
					or use any hex color: <code>https://pronouns.3q3.de/DE/sie/ihr-D3D3D3.svg</code></p>

        	<h3>Some pronouns</h3>
        	<p>Some pronouns the site knows about (but you are not limited to these):</p>
        	<ul>
						<li><a hreflang="en" href="https://pronouns.3q3.de/ae/aer/">ae/aer</a></li>
						<li><a hreflang="en" href="https://pronouns.3q3.de/ce/cir/">ce/cir</a></li>
						<li><a hreflang="en" href="https://pronouns.3q3.de/ae/aer/">co/cos</a></li>
        		<li><a hreflang="en" href="https://pronouns.3q3.de/he/him/">he/him</a></li>
						<li><a hreflang="en" href="https://pronouns.3q3.de/ne/nem/">ne/nem</a></li>
						<li><a hreflang="en" href="https://pronouns.3q3.de/she/her/">she/her</a></li>
						<li><a hreflang="en" href="https://pronouns.3q3.de/they/them/">they/them</a></li>
						<li><a hreflang="en" href="https://pronouns.3q3.de/xe/xir/">xe/xir</a></li>
						<li><a hreflang="en" href="https://pronouns.3q3.de/ze/hir/">ze/hir</a></li>
						<li><a hreflang="en" href="https://pronouns.3q3.de/ze/zir/">ze/zir</a></li>
        	</ul>
        	<p>German:</p>
        	<ul>
						<li><a hreflang="de" href="https://pronouns.3q3.de/DE/dey/denen/">dey/denen</a></li>
						<li><a hreflang="de" href="https://pronouns.3q3.de/DE/en/ens/">en/ens</a></li>
						<li><a hreflang="de" href="https://pronouns.3q3.de/DE/er/ihm/">er/ihm</a></li>
						<li><a hreflang="de" href="https://pronouns.3q3.de/DE/mensch/mensch/">mensch/mensch</a></li>
						<li><a hreflang="de" href="https://pronouns.3q3.de/DE/nin/nim/">nin/nim</a></li>
						<li><a hreflang="de" href="https://pronouns.3q3.de/DE/sei/seim/">sei/seim</a></li>
						<li><a hreflang="de" href="https://pronouns.3q3.de/DE/sie/ihr/">sie/ihr</a></li>
						<li><a hreflang="de" href="https://pronouns.3q3.de/DE/sey/sem/">sey/sem</a></li>
						<li><a hreflang="de" href="https://pronouns.3q3.de/DE/they/them/">they/them</a></li>
						<li><a hreflang="de" href="https://pronouns.3q3.de/DE/xier/xiem/">xier/xiem</a></li>
        	</ul>
				</div>
			<?php } ?>


			<footer>
				<div class="section contact">
					<p>Created by <a href="https://github.com/philipp-r">philipp</a> (<a hreflang="en" href="https://pronouns.3q3.de/he/him/">he/him</a>) based on pronoun.is.</p>
          <p>Contact via email: 3mail @ 3q3 . de</p>
				</div>
				<div class="section legal">
          <p><small><b>Disclaimer:</b> This website is a purely private, non-commercial offer and is also not operated with profit-making intentions. The website is provided "as is" without any warranty. In no event shall we be liable for any damages of any kind or character, including without limitation any compensatory, incidental, or consequential damages, loss of data or profit, claims of third parties, or other losses of any kind. As a service provider, we are responsible only for our own content on these pages. Should we notice any illegal content or other legal infringements, we will of course remove them immediately. We are not liable for content created by users.</small></p>
          <p><small><b>Privacy:</b> We use Cloudflare (a service by Cloudflare Inc., 101 Townsend St, San Francisco, CA 94107 / Cloudflare Ltd., County Hall/The Riverside Building, Belvedere Road, London, SE1 7PB) to protect and optimize this website. Cloudflare processes End Users’ information in logs. The information processed may include but is not limited to IP addresses, system configuration information, and other information about traffic to and from Customers’ websites, devices, applications, and/or networks. Cloudflare keeps user-level data for less than 24 hours. Please contact me to delete your data. According to article 17 and 18 GDPR you have a right to erasure of your data and to restriction the processing of your data. You can withdraw your consent in processing your data at any time. You can request an statement about you personal data which we store and process. You have the right to lodge a complaint with a supervisory authority according to the GDPR.</small></p>
          <p><small><b>Cookies:</b> We use cookies by Cloudflare to detect malicious visitors, correctly handle HTTP requests, handle bots, keep this website online, and for security purposes on the grounds of Art. 6 (1)(b) and (f) GDPR for 1 day.</small></p>
				</div>
			</footer>

		</div>
	</body>
</html>
