<!doctype html>
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?php echo "$restName"; ?></title>

	<meta name="keywords" content="<?php "echo $restName,  $restCity restaurant delivery, $restZip food delivery, order food online, menus, takeout, carryout, $restStreet"; ?>"/>
	<meta name="description" content="<?php echo "$restName $restCuisine"; ?> - Order food online for Delivery and Takeout. Best <?php echo $restCuisine; ?> restaurant delivery in <?php echo $restCity; ?>."/>
	<meta property="og:title" content="<?php echo $restName; ?>"/> 
	<meta property="og:type" content="restaurant"/> 
	<meta property="og:image" content="http://eat24hours.com/files/logo/<?php echo $restID; ?>.jpg"/> 
	<meta property="og:url" content="/"/> 
	<meta property="og:latitude" content="<?php echo $restLat; ?>"/> 
	<meta property="og:longitude" content="<?php echo $restLong; ?>"/> 
	<meta property="og:street-address" content="<?php echo $restStreet; ?>"/> 
	<meta property="og:locality" content="<?php echo $restCity; ?>"/> 
	<meta property="og:region" content="<?php echo $restState; ?>"/> 
	<meta property="og:postal-code" content="<?php echo $restZip; ?>"/> 
	<meta property="og:country-name" content="USA"/> 
	<meta property="og:phone_number" content="<?php echo $restPhone; ?>"/> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=8">
	<meta property="og:site_name" content="Eat24Hours.com"/>

	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/styles.css"/>
	<link rel="stylesheet" href="fonts/stylesheet.css"/>