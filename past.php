<!DOCTYPE html>

<html>
	<head>
		<?php
		$thisPage = "Past";
		require_once("head.php");
		?>
	</head>

    <body>

        <?php
		require_once("title.php");
        require_once("navbar.php");
        ?>

        <div class = "container">
			<div class = "main">
				<h1>Previous Events</h1>
				<?php
				require_once("previous.php");

				$id = $_GET['id'];

				if (strlen($id) > 1) {
					makedivs($id);
				} else {
					makedivs("PastEvents");
				}
				?>

			</div>

			<div class = 'sidebar'>
				<?php
				require_once("sidebar.php");
				?>
			</div>
        </div>
        <?php
        require_once("footer.php");
        ?>
    </body>
</html>
