<!DOCTYPE html>

<html>
	<head>
		<?php
		$thisPage = "About";
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
				<h1>Your Exec</h1>

				<div class="exec">
					<img src="Exec/josh.png" alt="Josh" />
					<h2>President - Josh Borrow</h2>
					<p>Josh is a 2nd year Physics student who also runs Cafe
					Scientifique Durham City (one of the societies projects)
					in his spare time.</p>
					<p>Contact: <a href='m&#97;i&#108;to&#58;%6Ao&#37;73%68&#117;a&#46;bor&#37;72ow%40%64ur%68a&#109;&#46;%61&#37;63&#46;%75&#107;'>joshu&#97;&#46;bo&#114;r&#111;w&#64;durham&#46;&#97;c&#46;u&#107;</a></p>
				</div>

				<div class="exec">
					<img src="Exec/harry.png" alt="Harry" />
					<h2>Treasurer - Harry Wang</h2>
					<p>Harry is a 2nd year Natural Sciences student from
					Collingwood who studies modules in both Physics and
					Mathematics.</p>
					<p>Contact: <a href='&#109;&#97;&#105;lto&#58;h&#46;h&#46;&#119;a%&#54;E&#103;&#64;durha&#109;&#46;&#97;c&#46;u&#107;'>h&#46;h&#46;w&#97;ng&#64;dur&#104;am&#46;ac&#46;u&#107;</a></p>
				</div>
				<div class="exec">
					<img src="Exec/eve.png" alt="Eve" />
					<h2>Secretary - Eve Twivy</h2>
					<p>Eve is a second year Psychology student at Van Mildert
					college (also studied Chemistry and Biology in first year)
					</p>
					<p>Contact: <a href='m&#97;i&#108;&#116;o&#58;e&#46;r&#46;%6&#55;&#46;&#37;74&#119;i&#118;y&#64;durham&#46;&#37;&#54;1c&#37;&#50;&#69;&#117;k'>e&#46;r&#46;g&#46;twi&#118;y&#64;du&#114;ham&#46;&#97;c&#46;uk</a></p>
				</div>
				<div class="exec">
					<img src="Exec/emily.png" alt="Emily" />
					<h2>Publicity Officer - Emily Hughes</h2>
					<p>Emily is a 2nd year Natural Sciences student at St
					Aidan's College. She is studying joint honours Biology and
					Chemistry.</p>
					<p>Contact: <a href='m&#97;ilto&#58;e&#46;l&#46;&#104;ug%68&#101;&#37;&#55;3%40d%75rh%61m&#46;a&#99;%2Euk'>e&#46;l&#46;hug&#104;es&#64;dur&#104;&#97;m&#46;ac&#46;u&#107;</a></p>
				</div>
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
