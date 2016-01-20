<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>
	</head>

	<body>
		<?php

		// ステップ１　db接続
			$dsn = 'mysql:dbname=phpkiso;host=localhost';

		// 接続するためのユーザー情報
			$user = 'root';
			$password = '';

		// DB接続オブジェクトを作成
			$dbh = new PDO($dsn,$user,$password);

		// 接続したDBオブジェクトで文字コードutf8を使うように指定
			$dbh->query('SET NAMES utf8');


			$nickname =$_POST['nickname'];
			$email =$_POST['email'];
			$goiken =$_POST['goiken'];
			$nickname = htmlspecialchars($nickname);
			$email = htmlspecialchars($email);
			$goiken = htmlspecialchars($goiken);

			echo $nickname;
			echo'様！<br />';
			echo 'ご意見ありがとうございました。<br />';
			echo'頂いたご意見「';
			echo $goiken;
			echo'」<br />';
			echo $email;
			echo'にメールを送りましたのでご確認ください。';


			// $mail_sub='アンケートを受け付けました。';
			// $mail_body=$nickname."様へ¥nアンケートご協力ありがとうございました。";
			// $mail_body=html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
			// $mail_head="From: xxx@xxx.co.jp";
			// mb_language('japanese');
			// mb_internal_encoding(UTF-8);
			// mb_send_mail($mail, $mail_sub, $mail_body,$mail_head);


			// ステップ２　データベースエンジンにSQL文で指令を出す。
			$sql = 'INSERT INTO `survey`(`nickname`, `email`, `goiken`) VALUES ("'.$nickname.'", "'.$email.'", "'.$goiken.'")';
			var_dump($sql);
			$stmt = $dbh->prepare($sql);
			// INSERT文を実行
			$stmt->execute();

			while(1){
				$rec = $stmt->fetch(PDO::FETCH_ASSOC);
				if($rec==false){
					break;
				}
				echo $rec['code'];
				echo $rec['nickname'];
				echo $rec['email'];
				echo $rec['goiken'];
				echo $rec'<br />';
			}

			// ステップ３　データベースから切断
			$dbh = null;



		?>
	</body>
</html>

