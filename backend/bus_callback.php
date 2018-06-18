<?php
	require_once 'db.php';
	$db_place = $_POST['bus_place'];
	$id_tour = $_POST['tour_id'];
		mysqli_query($connection, "UPDATE `tours_bus` set `avaliable` = '2' WHERE `id_tour` = $id_tour AND `number` = $db_place");
	$text =
	"Назва поїздки: ".$_POST["event_name"]."
	Місце в автобусі: ".$_POST["bus_place"]."
	Прізвище: ".$_POST['client_surname']."
	Ім'я: ".$_POST["client_name"]."
	Номер телефону: ".$_POST["client_tel"]."
	Дата народження: ".$_POST["client_birth"]."
	Серія паспорту: ".$_POST["client_passport"]."
	email: ".$_POST["client_mail"];
	mail('discrimine.working@gmail.com, zel.chemodan@gmail.com', "Замовлення", $text);
	?> 