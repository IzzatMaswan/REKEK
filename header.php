<!DOCTYPE html>
<html>
<head>
	<title>My E-commerce Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt="My E-commerce Store"></a>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="shop.php">Shop</a></li>
				<li><a href="cart.php">Cart</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<div class="search-bar">
			<form action="search.php" method="GET">
				<input type="text" name="search" placeholder="Search for products...">
				<button type="submit">Search</button>
			</form>
		</div>
	</header>
	<main>
