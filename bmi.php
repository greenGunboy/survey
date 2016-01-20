<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>BMI</title>
	</head>

	<body>
			<?php
				$weight = $_POST['weight'];
				$height = $_POST['height'];
				$height = $height / 100;
				$BMI = $weight / ($height * $height);
				$BMI = round($BMI, 2);
				$weight = htmlspecialchars($weight);
				$height = htmlspecialchars($height);
				$BMI = htmlspecialchars($BMI);
				if($BMI != 0){
					echo "BMI指数は";
					echo $BMI;
					echo "です。";
				}else{
					echo '未入力';
					echo'<input type="button" onclick="history.back()" value="戻る">';
				}
			?>
	</body>
</html>		






			