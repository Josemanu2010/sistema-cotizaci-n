<?php 

	function get_views($get_view) {
		$view = VIEWS.$get_view.'.php';
		
		if (!is_file($view)) {
			die('La vista solicitada '.$view.' no existe');
		}

		require_once $view;
	}