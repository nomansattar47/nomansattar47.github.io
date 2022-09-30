<?php 

/**
 * 
 * Author: 		Noman
 * Date:   		26 Aug, 2022
 * Website: 	https://portfolio-noman.herokuapp.com/
 * Category:	Portfolio website
 * 
 * */

define( 'DEBUG' , false );

$base_url = '';

if( DEBUG ) {
    $base_url = 'http://' . 'localhost/portfolio-website';
} else{
    $base_url = 'https://portfolio-noman.herokuapp.com';
}

define( 'BASE_URL', $base_url );

?>