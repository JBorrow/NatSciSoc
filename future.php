<!DOCTYPE html>

<html>
	<head>
		<?php
		$thisPage = "Future";
		require_once("head.php");
		?>
	</head>

    <body>
        <?php
		require_once("title.php");
        require_once("navbar.php");
        ?>
        <div class = "upcomingcontainer">
            <h1 class="upcomingh1"> Upcoming Events </h1>

            <?php
            require_once("upcoming.php");
            upcomingmakedivs("Events");
            ?>            
        </div>

        <?php
        require_once("footer.php");
        ?>
    </body>
</html>


