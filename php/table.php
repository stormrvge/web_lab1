<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			background-color: #e6e6e6;
			font-family: monospace;
			color: black;
		}
		table {
			margin: auto;
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;
		}
		td {
			border: 1px solid black;
		}
		td:nth-child(-n+3) {
			width: 25px;
		}

	</style>
</head>
<body>
    <table class="">
        <tr>
            <td>X</td>
            <td>Y</td>
            <td>R</td>
            <td>Ответ</td>
            <td>Время</td>
            <td>Время работы скрипта (мс)</td>
        </tr>

        <!-- TABLE.PHP -->
        <?php
        $history = $_SESSION['history'];

    	foreach ($history as $raw) {
    	echo '<tr> <td>' . $raw[0] . '</td><td>' . $raw[1] . '</td><td>' . $raw[2] . '</td><td>' . $raw[3] . '</td><td>' . $raw[4] . ' ' . $raw[5] . '</td><td>' . 
    		$raw[6] . '</td></tr>';
    	}
        ?>
        </table>
    </div>
</body>
</html>