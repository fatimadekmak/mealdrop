<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Meal<br><small>Drop</small></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item 
			 	<?php
					if (basename($_SERVER['PHP_SELF']) == "index.php")
						echo "active";
					?> 
			  "><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item 
			 	<?php
					if (basename($_SERVER['PHP_SELF']) == "restaurants.php")
						echo "active";
					?> 
			  "><a href="restaurants.php" class="nav-link">Restaurants</a></li>
				<li class="nav-item 
			 	<?php
					if (basename($_SERVER['PHP_SELF']) == "cuisines.php")
						echo "active";
					?> 
			  "><a href="cuisines.php" class="nav-link">Cuisines</a></li>
				<li class="nav-item 
			 	<?php
					if (basename($_SERVER['PHP_SELF']) == "contact.php")
						echo "active";
					?> 
			  "><a href="contact.php" class="nav-link">Contact</a></li>
				<li class="nav-item 
			 	<?php
					if (basename($_SERVER['PHP_SELF']) == "cart.php")
						echo "active";
					?> 
			  "><a href="cart.php" class="nav-link">Cart</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Login</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Signup</a></li>
			</ul>
		</div>
	</div>
</nav>