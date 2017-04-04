<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Nintendo 2017 - Iceland Convention</title>
	<link rel="stylesheet" type="text/css" href="css/allstyles.css">
	<link rel="stylesheet" href="https://i.icomoon.io/public/temp/bf0c7f3582/UntitledProject/style.css">
	<link rel="icon" href="img/NintendoFire.ico">
</head>
<body class="body">
	<?php
				$servername = "tsuts.tskoli.is";
				$username = "2704912199";
				$password = "mypassword";
				$myDb = "2704912199_skilaverkefni4_vsh2b3u";
				// Create connection
				$conn = new mysqli($servername, $username, $password,$myDb);

				// Check connection $conn->connect_error
				if ($conn === false) {
				    die("Villa, getum ekki tengst: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM nintendopower";
				$result = $conn->query($sql);

				
				
				
				mysqli_close($conn);

			?>
	<div class="flexin">
	<h1 class="borderbox haed">Welcome to the Nintendo 2017 Summar convention in Iceland webpage. Please look on below the page to get more infomation on the time and place for the event.</h1>
	<input type="checkbox" id="toggle" class="menuInput">
	<label for="toggle" class="menuLabel">&#9776;Menu</label>
	<nav>
	<!--
		<ul class="topMenu">
			<li class="button one"><a href="#">Home</a></li>
			<li class="button two"><a href="videos.html">Videos</a></li>
			<li class="button three"><a href="links.html">Links</a></li>
			<li class="button four"><a href="webgl/webgl.html">Games *Firefox*</a></li>
			<li class="button five"><a href="contacts.html">Contacts</a></li>
		</ul>
	-->
	<div class="navbar">
	  		<a href="http://share2.earthlinktele.com.hypestat.com/"><div class="icon-share2"></div></a>
			<a href="https://www.facebook.com/Nintendo/"><div class="icon-facebook2"></div></a>
			<a href="https://www.youtube.com/user/Nintendo"><div class="icon-youtube2"></div></a>
			<a href="https://github.com/retropie/retropie-setup/wiki/Nintendo-Entertainment-System"><div class="icon-github"></div></a>
			<a href="https://www.reddit.com/r/gaming/"><div class="icon-reddit"></div></a>
	</div>
	</nav>
	<header class="mainHeader">
		
	</header>

	<div class="mainContent">
		<article>
			<div class="parallaxnmeitt"></div>

			
			<content>
				

				<h2 class="borderbox hugleft">Nintendo 2017: Everything you need to know about this year's gaming extravaganza.
				It’s a big year for Nintendo and according to Nintendo of America's president Reggie Fils-Aime the company is planning a "big" convention to reflect this.

				It's been a few years since Nintendo has done a traditional convention briefing, however, Fils-Aime has recently told fans that we can expect "big" things from Nintendo at this year's show.
				
				Nintendo has a lot to play for at this year’s convention. The Switch will be five months old and Nintendo will need to use its presence at the show to maintain the console’s momentum, and convince people that it has a lot of games coming for the console for the coming years.</h2>

				<div class="parallaxnmtvo"></div>

				<h2 class="borderbox hugleft">It’s an exciting show for the big player in the industry, Nintendo will be competeing to get the most out of the gaming convension by by saving their biggest announcements for the show.</h2>
				<div>
				<h1 class="borderbox">Nintendo reveals plans for Nintendo Switch presentation.</h1>
				<figure class="resize"><img src="img/Nintendodebu.jpg"></figure>	
				</div>
				<h2 class="borderbox hugleft">In a presentation to financial analysts today in Tokyo, Nintendo Co., Ltd. president Tatsumi Kimishima announced that major details regarding the company’s new Nintendo Switch home gaming system will be shared at the Nintendo Switch Presentation 2017. This will be an event for invited media, financial analysts and trade partners in Tokyo that will be globally livestreamed on Jan. 12, U.S. time. The presentation will include the launch date and pricing for Nintendo Switch, as well as a look at the lineup of games currently in development.

				Kimishima also announced that Nintendo Switch sampling events for invited media, partners, and consumers will take place in the U.S. and Europe after the presentation at later dates. There will be opportunities for the public to participate in other hands-on events around the same time, details of which will be announced later.

				The exact time of the Nintendo Switch Presentation 2017 will be announced through Nintendo’s social media channels</h2>

				<div class="parallaxnmthrju">
					<div class="borderbox moveInside">
						<h4>Please sign up for the Nintendo fan club</h4>
							<form action="insert.php" method="post">
							<table>
								
									<tr >
										<td>
											<label class="phpLabelTop">Full Name: </label>
										</td>
										<td>
											<input type="text" name="name" class="phpInputTop" placeholder="Full name" required title="Vinsamlegast skráið nafn">
										</td>
									</tr>
									<tr>
										<td>
											<label class="phpLabelBot">Phone number: </label>
										</td>
										<td>
											<input type="text" name="simanmr" class="phpInputBot" placeholder="123 4567" pattern="\d{3}(?:[\-\s]?)\d{4}" title="Vinsamlegast skráið 7 tölustafi" required>
										</td>
									</tr>
									<tr>
										<td>
										<button type="submit" class="takki">Confirm!
										</button>
										</td>
									</tr>
								
							</table>
							</form>
					</div>
				</div>

			</content>
			
		</article>
	</div>

	<footer>
		<p class="footertxt"> #1 Rule on this site is: No hate speech / No illegal activity. [Feel the power, Nintendo power!  &copy;]</p>

		<hr>

		<div>
			<figure class="resize"><img src="img/NintendoSwitch.gif"></figure>
		</div>

		<hr>
		</div>
	</footer>
		
	</div>
</body>
</html>