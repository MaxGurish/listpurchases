<?php
$count = (count($_POST) - 2) / 2;
$clock = 1;
$mailmessagebool = true;
for ($i=1; $i <= $count; $i++) {
  	$countPostTo = 'to'.$clock;
    $countPostPoints = 'type'.$clock;
    $countPostInputs = 'input'.$clock;
    $postName = $_POST['name'];
    $postTo = $_POST['to'];
    $postPoints = $_POST[$countPostPoints];
    $postInputs = $_POST[$countPostInputs];
	if ($postInputs == '') {
		echo '
		<div style="margin: 10px; background: red; display: flex; justify-content: center; border-radius: 20px;">
			<span style="color: white; text-transform: uppercase; font-weight: bold; margin: 20px">Внимание!	Ошибка: "Вы не ввели количество"!</span>
		</div>
		';
		$mailmessagebool = false;
	}
	if ($postName == '') {
		echo '
		<div style="margin: 10px; background: red; display: flex; justify-content: center; border-radius: 20px;">
			<span style="color: white; text-transform: uppercase; font-weight: bold; margin: 20px">Внимание!	Ошибка: "Вы не ввели название списка"!</span>
		</div>
		';
		$mailmessagebool = false;
	}
	if ($postPoints == '') {
		echo '
		<div style="margin: 10px; background: red; display: flex; justify-content: center; border-radius: 20px;">
			<span style="color: white; text-transform: uppercase; font-weight: bold; margin: 20px">Внимание!	Ошибка: "Вы не ввели пункт"!</span>
		</div>
		';
		$mailmessagebool = false;
	}
	$htmlmessagepoints .= '
	<div>
		<div>
			<input style="margin: 0px 0px 0px 10px" id="input'.$clock.'" type="checkbox" value="yes">
			<label for="input'.$clock.'" style="display: inline-flex; color: white; text-transform:uppercase; font-weight: bold; background: orange; margin: 10px 0px 10px 10px; padding: 5px 10px 5px 10px; border-radius: 10px 0px 0px 10px; border: 2px solid orange;">
				'.$postPoints.'
			</label>
			<label for="input'.$clock.'" style="display: inline-flex; color: orange; text-transform:uppercase; font-weight: bold; background: white; margin: 10px 10px 10px 0px; padding: 5px 10px 5px 10px; border-radius: 0px 10px 10px 0px; border: 2px solid orange;">
				Количество = '.$postInputs.'
			</label>
		</div>
	</div>
	';
	$clock++;
	}

    $htmlmessage = 
    '
		<html lang="ru">
			<head>
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			</head>
			<body>
				<div style="display:flex; text-transform: uppercase; font-weight: bold; color: white; background: orange; justify-content: center; padding:10px; border-radius: 10px 10px 0px 0px">
					<span style="display: inline-flex; margin-left: 15px">Имя списка = "'.$postName.'"</span>
				</div>
				
				<div style="background: whitesmoke; padding: 5px; border-radius: 0px 0px 15px 15px">
					'.($count == 0 ? 'Почему-то нет ниодного пункта' : '
						'.$htmlmessagepoints.'
					').'
				</div>
			</body>
		</html>
    ';

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	if ($mailmessagebool != false) {
		mail($postTo, $postName, $htmlmessage, $headers, 'From: siteofpurchases@gmail.com');	
		header('Location: /html.php');
		exit;
	}
?>