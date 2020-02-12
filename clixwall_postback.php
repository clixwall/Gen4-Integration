<?php
$secret_password = 'ENTER YOUR SECRET PASSWORD HERE';



include_once('lib/lib.php');
include_once('lib/configuration.php');





$password = $_REQUEST['pwd'];
$credit = $_REQUEST['c'];
$user = trim($_REQUEST['u']);
$type = trim($_REQUEST['t']);
$status = trim($_REQUEST['s']);


if( $password == $secret_password )
{
	if($status == 1)
	{
     	if($type ==1)
     	{
      		 $db->query("UPDATE users SET balance=balance+'$credit' WHERE username='$user'");      
     	}
     	else
     	{
       	 $db->query("UPDATE user SET points=points+'$credit' WHERE username='$user'");      
      	}
   	exit('Done');
 	}
	else
	{
		 if($type ==1)
     	{
      		 $db->query("UPDATE users SET balance=balance-'$credit' WHERE username='$user'");    
   	}
   	else
   	{
   		 $db->query("UPDATE users SET points=points-'$credit' WHERE username='$user'");
   	}
   	exit('Done');
	}			
}
else
{
	die();
}





?>