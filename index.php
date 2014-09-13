<!DOCTYPE html>

<html>
	<head>
		<?php
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
				Hello, world
			
				<img src="http://blog.jimdo.com/wp-content/uploads/2014/01/tree-247122.jpg" alt="An image of a tree" />
			</div>

			<div class="sidebar">
				<?php
				require_once('sidebar.php');
				?>
			</div>
		</div>
		
		<div class="footer">
			<?php
			require_once('footer.php')
			?>
		</div>
	</body>
</html>
