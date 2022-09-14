<?php 

/**
 * 
 * Author: 		Noman
 * Date:   		26 Aug, 2022
 * Website: 	https://portfolio-noman.herokuapp.com
 * Category:	Portfolio website
 * 
 * */

include_once ( 'include/functions.php' );

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>

		<!-- Regular data -->
        <meta charset="utf-8">
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		
		<!-- Description -->
		<meta name="author" content="Noman"/>
		<meta name="description" content="I design & build digital products."/>
		<meta name="keywords"  content="noman,nouman, noman portfolio,portfolio,software engineer,software developer,php developer,ux,ui,branding,experience,PHP,product,manager,freelance,interface" />
		<meta name="Resource-type" content="Document"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Open Graph data -->		
		<!-- <meta property="og:site_name" content="Noman Portfolio"/>
		<meta property="og:title" content="Noman" />
		<meta property="og:description" content="I design & build digital products."/>
		<meta property="og:image" content="https://noman47147062765.wordpress.com/img/thumbnail.png" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://noman47147062765.wordpress.com" /> -->
  
		<!-- Title -->
		<title>Noman</title>

		
		<link rel="icon" href="<?php echo BASE_URL; ?>/assets/img/favicon-16x16.png" type="image/png" sizes="16x16">  
		<link rel="icon" href="<?php echo BASE_URL; ?>/assets/img/favicon-32x32.png" type="image/png" sizes="32x32">  
		<link rel="icon" href="<?php echo BASE_URL; ?>/assets/img/favicon-96x96.png" type="image/png" sizes="96x96"> 
		
		<!-- CSS -->
		<link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.17/dist/css/splide.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<!-- Toggle button mobile -->		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			    $(".mobile-tap-area").click(function(){
			        $(".toggle-mobile-first").toggle();
			        $(".toggle-mobile-second").toggle();
			    });
			});
		</script>
		
    </head>

<body class="website-background-black">
