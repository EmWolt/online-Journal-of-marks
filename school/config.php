<?php 
require 'libs/rb.php';

R::setup('mysql::host=localhost;dbname=school','root','');

if (!R::testConnection()) {
exit('No connection to DB');
}

$config = array(
	'title' => 'Школа 78',
);
session_start();
 ?>