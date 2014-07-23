<?php
//default.php
	$this->load->view($this->config->item('theme') . 'header');
	foreach($query as $customer)
	{
   		//var_dump($customer);
   		echo '<br /><code>' . $customer['FirstName'] . '</code><br />';
	}
	$this->load->view($this->config->item('theme') . 'footer');
?>
		