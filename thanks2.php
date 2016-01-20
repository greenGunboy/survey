<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>
	</head>

	<body>
		<?php

		$nickname =$_POST['nickname'];
		$email =$_POST['email'];
		$goiken =$_POST['goiken'];
		$nickname = htmlspecialchars($nickname);
		$email = htmlspecialchars($email);
		$goiken = htmlspecialchars($goiken);

		echo $nickname;
		echo '様<br />';
		echo 'ご意見ありがとうございました。<br />';
		echo'頂いたご意見「';
		echo $goiken;
		echo'」<br />';
		echo $email;
		echo 'にメールを送りましたのでご確認ください。';

		?>
	</body>
</html>

