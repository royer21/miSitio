<?php 

$data = array(
	'15'  => 'https://www.facebook.com',
	'4'  => 'https://www.google.com'
);

echo $this->calendar->generate(2014, 07, $data);

?>