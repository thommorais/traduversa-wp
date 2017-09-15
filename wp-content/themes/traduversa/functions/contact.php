<?php

session_start();
define('WP_USE_THEMES', false);

$errors     = array();
$data 			= array();

// GET VALUES ==================================================================

$fname 	= 'Thom';
$email 	= 'thommorais@gmail.com';


// return a response ===========================================================

	if (!empty($errors)) {
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {

		date_default_timezone_set('America/Sao_Paulo');

		$date_ 			= implode('-', array_reverse(explode('.', $date_)));
		$date_s 		= new DateTime($date_);
		$timestamp 	= $date_s->getTimestamp();
		$date__date = $date_s->format('Ymd');
		$min        = date('H:i:s');

		$pubdate = date('Y-m-d H:i:s');

		$my_post = array(
			'post_title' 		=> $fname,
			'post_date' 		=> $pubdate,
			'post_content'	=> '',
			'post_status' 	=> 'pending',
			'post_type' 		=> 'post',
		);

		$post_id = wp_insert_post($my_post);

		add_post_meta($post_id, 'nome', $fname, true);
		add_post_meta($post_id, 'email', $address, true);

		$data['success'] = true;

    session_destroy();

	}

	echo json_encode($data);
