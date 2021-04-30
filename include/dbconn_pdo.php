<?php
ob_start();

//login data
define('db_host','localhost'); //access to mysql
define('db_user','root'); //username
define('db_pass',''); //password
define('db_name','rabit'); //choose the database


//trycatch....
try {
	$db=new PDO("mysql:host=".db_host.";port=3306;charset=utf8;dbname=".db_name, db_user, db_pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
	//printing any error
    print $e->getMessage();
    exit;
}
?>