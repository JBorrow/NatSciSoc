<!DOCTYPE html>

<html>
	<head>
		<?php
		$thisPage = "Home";
		require_once('head.php');
		?>
	</head>

	<body>
		<?php
		require_once('title.php');
		require_once('navbar.php');
		?>

		<div class="container">
			<div class="main">
				<h1>Welcome!</h1>
				<p>The Durham University Natural Sciences Society is a society
				for anyone intrested in science. You don't need to be doing
				Natural Sciences or even a science subject to join. We organise
				also outreach events to the public through our child
				organisation, <a href = "http://www.cafescidurham.co.uk">Cafe
				Scientifique Durham City</a>!</p>

				<p>We aim to support other science societies by bringing them 
				together (where possible) to discuss events. This cuts down on
				double-booking and allows us to use each others' skills to bring
				even better events to you!</p>
					
				<img src="homepage.png" alt="Picture of society outings" />

				<h1>What's in it for Natural Scientists?</h1>
				<p>As well as public outreach and organising general science
				events, we also provide support to Natural Science students
				specifically, through a mentor system. If you are having trouble
				picking modules, we will try and match you up with someone in
				the year above that is interested in similar things to you.
				This allows us to cover a wide range of subjects! If you are
				interested in support, or would like to be a mentor, please
				contact us at <a href='mailto&#58;n&#97;t&#46;sc%6&#57;&#46;soc%4&#48;du%72&#37;&#54;8am%2Ea&#37;6&#51;&#46;u%6B'>nat&#46;sci&#46;&#115;oc&#64;d&#117;rha&#109;&#46;&#97;c&#46;u&#107;</a>.</p>
			</div>

			<div class="sidebar">
				<?php
				require_once('sidebar.php');
				?>
			</div>
		</div>
	
		<?php
		require_once('footer.php')
		?>
	</body>
</html>
