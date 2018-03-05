/*скрипт для добавления уникального поля ввода в зависимости от типа сотрудника
*/

$('document').ready(function () {
	$('input:radio').change(function () {
		if ($('input:radio[name=position]:checked').val() == 'employee') {
			$('#type').html('Подразделение: <input type="text" name="department" required />');
		}
		if ($('input:radio[name=position]:checked').val() == 'head') {
			$('#type').html('Подразделение, которым заведует: <input type="text" name="department" required />');
		}
		if ($('input:radio[name=position]:checked').val() == 'other') {
			$('#type').html('Описание: <input type="text" name="description" required />');
		}
	});
})
