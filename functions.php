<?php

function WorkersRead($path)
{
	$workers_string = file_get_contents($path); //получение данных из файла в виде строки
	return json_decode($workers_string); 
	/*
		возвращает массив объектов стандартного класса, публичные
		свойства которого и будут данными о работнике
	*/
}

function WorkerAdd($path) //добавляет данные в файл, либо возвращает false, если данные из формы не были получены
{
	$workers = WorkersRead($path);

	if (empty($_POST)) {
		return false;
	}
	
	$workers[] = (object) $_POST;

	$workers_json = json_encode($workers);
	file_put_contents($path, $workers_json);
	return true;
}

?>