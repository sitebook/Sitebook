<!DOCTYPE html>
<html lang="en">
<head>
<title>Sitebook</title>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/site.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css" media="all">
<script>
  $(function() {
    var availableTags = [
	"Mckinney Cotton Mill, Dallas, Tx",
	"Southside on Llamar, Dallas, Tx",
	"Fort Worth Japanese Botanic Gardens, Fort Worth, Tx",
    ];
    $( "#search" ).autocomplete({
      source: availableTags
    });
  });
</script>
</head>

<body>
<div id="wrapper">

<nav>
	<div id="navleft">
		<a href="#" id="logo"><img src="logo.png"/></a>
	</div>	
	<div id="navright">
		<a href="#">Sign up</a>
		<a href="#">Log in</a>
		<a href="#" id="listvenue">List your Venue</a>
	</div>
	<div class="clear"></div>
</nav>

<section id="splash">
<div class="container leftalign">
<h1>Book a location for your photo shoot</h1>
<form>
	<input type="text" id="search" name="q" placeholder="Search by city, zip code, location name, or any keyword" /><input type="submit" name="submit" value="Show Locations" class="btn" />
</form>
</div>
</section>
<div class="clear"></div>



<section id="featured">
<h2>Premiere Locations near Dallas, Texas</h2>
<div class="featuredrow">
	<div class="featuredrowitem">
		<a href="#"><img src="assets/img/cm1.jpg" /></a>
		<p>About this venue&hellip;</p>
	</div>
	<div class="featuredrowitem">
		<a href=""><img src="assets/img/cm2.jpg" /></a>
		<p>About this venue&hellip;</p>
	</div>
	<div class="featuredrowitem">
		<a href=""><img src="assets/img/cm3.jpg" /></a>
		<p>About this venue&hellip;</p>
	</div>
</div>
<div class="featuredrow">
	<div class="featuredrowitem">
		<a href="#"><img src="assets/img/cm3.jpg" /></a>
		<p>About this venue&hellip;</p>
	</div>
	<div class="featuredrowitem">
		<a href=""><img src="assets/img/ss1.jpg" /></a>
		<p>About this venue&hellip;</p>
	</div>
	<div class="featuredrowitem">
		<a href=""><img src="assets/img/cm2.jpg" /></a>
		<p>About this venue&hellip;</p>
	</div>
</div>

</section>
<div class="clear"></div>

<footer>

</footer>
<div class="clear"></div>

</div>
</body>
</html>
