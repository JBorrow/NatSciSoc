<!DOCTYPE html>

<html>
	<head>
		<?php
		require_once("title.php");
		require_once("head.php");
		?>
	</head>

    <body>
        <?php
        require_once("navbar.php");
        ?>
        <div class = "container">
			<div class = 'main'>
				<?php
				require_once("previous.php");
				
				$id = $_GET['id'];
				echo read($id);
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

