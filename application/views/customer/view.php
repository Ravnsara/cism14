<?php
//customer/view.php

	$this->load->view($this->config->item('theme') . 'header');
	echo '<h2>Customer Details</h2><br />';
	if ($query->num_rows() > 0){//loop through data
		foreach($query->result() as $customer)
		{
	   		//var_dump($customer);
	   		echo '<p>';
	   		echo '<p>CustomerID: ' . $customer->CustomerID . '</p>';
	   		echo '<p>FirstName: ' . $customer->FirstName . '</p>';
	   		echo '<p>LastName: ' . $customer->LastName . '</p>';
	   		echo '<p>Email: ' . $customer->Email . '</p>';
	   		echo '<p><br />';
	   		//echo '<br /><code>' . $customer['FirstName'] . '</code><br />';
		}
	}else{//sorry no customers
		echo '<p>Sorry, no such customer!</p>';
	}		
	$this->load->view($this->config->item('theme') . 'footer');	
?>
		