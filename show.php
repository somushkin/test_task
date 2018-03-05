<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show</title>
</head>
<body>
<?php
	require_once __DIR__ . '/functions.php'; //вспомогательные функции
	$workers = WorkersRead(__DIR__ . '/workers.json');
	if ($workers !== NULL) :
?>
	<table border="1.px">
		<tr>
			<th>ФИО</th>
			<th>Дата рождения</th>
			<th>Дата принятия на работу</th>
			<th>Подразделение</th>
			<th>Описание</th>
			<th>Тип</th>
		</tr>
		
		<?php foreach ($workers as $worker) : ?>
		<tr>
			<td><?php echo $worker->name; ?></td>
			<td><?php echo $worker->b_date; ?></td>
			<td><?php echo $worker->w_date; ?></td>
			<td><?php echo $worker->department; ?></td>
			<td><?php echo $worker->description; ?></td>
			<td>
			<?php 
				switch ($worker->position) {
					case 'employee':
						echo 'Работник';
						break;
					case 'head':
						echo 'Руководитель отдела';
						break;
					case 'other':
						echo 'Другоe';
						break;
					default:
						break;
				}
			?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; 
	if ($workers === NULL) :
		echo 'Сотрудников нет';
	endif;
	?>
	<br>
	<a href="/">На главную</a><br>
	<a href="/add.php">Добавить сотрудника</a>
</body>
</html>