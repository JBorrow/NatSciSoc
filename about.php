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
					<img src="Exec/josh.jpg" alt="Josh" />
					<h2>President - Josh Borrow</h2>
					<p>Josh is a 2nd year Physics student who also runs Cafe
					Scientifique Durham City (one of the societies projects)
					in his spare time.</p>
					<p>Contact:</p>
				</div>

				<div class="exec">
					<img src="Exec/harry.jpg" alt="Harry" />
					<h2>Treasurer - Harry Wang</h2>
					<p>Harry is a 2nd year Natural Sciences student.</p>
				</div>
				<div class="exec">
					<img src="Exec/eve.jpg" alt="Eve" />
					<h2>Secretary - Eve Twivy</h2>
					<p>Eve is a 2nd year Natural Sciences Student.</p>
					<p>Contact:</p>
				</div>
				<div class="exec">
					<img src="Exec/emily.jpg" alt="Emily" />
					<h2>Publicity Officer - Emily Hughes</h2>
					<p>Emily is a 2nd year Natural Sciences Student.</p>
					<p>Contact:</p>
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
