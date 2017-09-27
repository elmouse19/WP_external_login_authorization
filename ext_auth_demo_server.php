<?php

/*

ext_auth_demo_server.php 

This would be replaced by a call to the OAuth Server

*/

if($_GET['user'] == 'Mike' && $_GET['pass'] == '2303') {
  echo json_encode(array('result' => '1', 'username' => 'miksto', 'first_name' => 'Mike', 'last_name' => 'Sto', 'email' => 'mike@sto.net'));
} else {
  echo json_encode(array('result' => '0'));
}