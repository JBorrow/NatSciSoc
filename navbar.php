<ul class="navbar">
	<li <?php if ($thisPage=="Home") echo "id=\"thisPage\"";?>>
		<a href="index.php">Home</a>
	</li>
	<li <?php if ($thisPage=="Future") echo "id=\"thisPage\"";?>>
		<a href="future.php">Upcoming Events</a>
	</li>
	<li <?php if ($thisPage=="Past") echo "id=\"thisPage\"";?>>
		<a href="past.php">Previous Events</a>
	</li>
	<li <?php if ($thisPage=="About") echo "id=\"thisPage\"";?>>
		<a href="about.php">About</a>
	</li>
	<li <?php if ($thisPage=="Support") echo "id=\"thisPage\"";?>>
		<a href="support.php">Support</a>
	</li>
</ul>
