<?php
//customer/default.php

	$this->load->view($this->config->item('theme') . 'header');
	echo '<h2>Default Customer Page</h2>';
	$this->load->view($this->config->item('theme') . 'footer');	
?>
		