<?php
####### db config ##########
$db_username = 'root';
$db_password = '';
$db_name = 'pbw';
$db_host = 'localhost';
####### db config end ##########
if($_POST)
{
	$sql_con = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
	
	//Periksa apakah itu permintaan ajax, keluar jika tidak

    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    } 
	mysqli_query($sql_con, "CREATE TABLE IF NOT EXISTS `chat_box` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`user` varchar(60) NOT NULL,
	`message` varchar(100) NOT NULL,
	`date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`ip_address` varchar(40) NOT NULL, 
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;");
	if(isset($_POST["message"]) &&  strlen($_POST["message"])>0 && !empty($_POST["username"]) && preg_match("/^[a-zA-Z]*$/",$_POST["username"]{0}))
	{
		
		//Anda bisa mengganti username dengan username terdaftar, jika hanya pengguna terdaftar yang diijinkan mengirim pesan

		$username = filter_var(trim($_POST["username"]),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
		$message = filter_var(trim($_POST["message"]),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
		$user_ip = $_SERVER['REMOTE_ADDR'];
	
		if(mysqli_query($sql_con,"INSERT INTO chat_box(user, message, ip_address) value('$username','$message','$user_ip')"))
		{
			$msg_time = date('h:i A M d',time()); // current time
			echo '<div class="chat_msg"><time>'.$msg_time.'</time><span class="username">'.$username.'</span><span class="message">'.$message.'</span></div>';
		}
		
		// Hapus semua pesan kecuali 10 terakhir

		mysqli_query($sql_con,"DELETE FROM chat_box WHERE id NOT IN (SELECT * FROM (SELECT id FROM chat_box ORDER BY id DESC LIMIT 0, 10) as sb)");
	}
	elseif($_POST["fetch"]==1)
	{
		$results = mysqli_query($sql_con,"SELECT user, message, date_time FROM (select * from chat_box ORDER BY id DESC LIMIT 10) chat_box ORDER BY chat_box.id ASC");
		while($row = mysqli_fetch_array($results))
		{
			$msg_time = date('h:i A M d',strtotime($row["date_time"])); 
			
			echo '<div class="chat_msg"><time>'.$msg_time.'</time><span class="username">'.$row["user"].'</span> <span class="message">'.$row["message"].'</span></div>';
		}
	}
	elseif(!preg_match("/^[a-zA-Z]*$/",$_POST["username"]{0}))
	{
		header('HTTP/1.1 500 Name tidak boleh diawali dengan white space');
    	exit();
	}
	else
	{
		header('HTTP/1.1 500 Name dan Message tidak boleh kosong');
    	exit();
	}
}