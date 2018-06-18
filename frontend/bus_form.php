<?php
	require_once $_SERVER["DOCUMENT_ROOT"] .'/backend/db.php';
	$db_name = $_SERVER['REQUEST_URI'];
	$db_name = explode("/", $db_name);
	$db_name = explode(".", $db_name[1]); 			//убираем все лишнее с урл
	$get_bus = mysqli_query($connection, "SELECT * FROM `tours_bus` WHERE `id_tour` = $tour_id"); 
	mysqli_query('SET NAME utf8 COLLATE utf8_general_ci');
	$place_count = 0;
	$bus_array = array();
	while ($bus = mysqli_fetch_array($get_bus)){		 //бд в массив
		$bus_array[$place_count] = $bus;
		$place_count++;
	}
?>


	<div class="bus" id="bus_form">
		<h1 class="hcenter">Бронювання місця</h1>
		<h3 class="hcenter">виберіть місце та заповніть поля</h3>
			<?php
			if ($place_count < 40){ 			//горизонтальный бус
				echo '<table class="small_table">';
				foreach ($bus_array as $key){
					$rows = $place_count/4;
					if ($key['number'] == '0'){
						$td_text = "<td></td>";
					} else if ($key["avaliable"] == 1){
						$td_text = "<td class='taken'>" . $key['number'] . "</td>";
					} else if ($key["avaliable"] == 0){
						$td_text = "<td class='free'>" . $key['number'] . "</td>";
					} else if ($key["avaliable"] == 3){
						$td_text = "<td class='td_service'>" . $key['number'] . "</td>";
					}
					else if ($key["avaliable"] == 2){
						$td_text = "<td class='td_service'>" . $key['number'] . "</td>";
					}
					
						echo $td_text;
					if ( ($key['id']) % $rows == 0){
						echo "</tr>";
					}
				}
				echo '</table>';	
			}else{ 							//вертикальный бус
				echo '<table class="big_table"> <style> .taken:before, .free:before, .td_service:before{ -webkit-transform: rotate(270deg); transform: rotate(270deg); } </style>';
				foreach ($bus_array as $key){
					$rows = $place_count/14;
					if ($key['number'] == 0){
						$td_text = "<td>" . $key['name'] . "</td>";
					} else if ($key["avaliable"] == 1){
						$td_text = "<td class='taken'>" . $key['number'] . "</td>";
					} else if ($key["avaliable"] == 0){
						$td_text = "<td class='free'>" . $key['number'] . "</td>";
					} else if ($key["avaliable"] == 999){
						$td_text = "<td class='td_service'>" . $key['name'] . "</td>";
					}
					else if ($key["avaliable"] == 2){
						$td_text = "<td class='td_service'>" . $key['number'] . "</td>";
					}
						echo $td_text;
					if ( ($key['id']) % $rows == 0){
						echo "</tr>";
					}
				}
				echo '</table>';	
			}	
			 ?>
		<div class="place_description">
			<span><span style="color:#2CDA2C">Зелений колір</span> - вільні місця, <span style="color:#DA2E2E"> червоний </span> - зайняті місця</span>, <span style="color:#6D6D6D">сірий</span> - попереднє бронювання</span>
		</div>

	</div>
	<div class="more_info">
		<div class="more_info_container">
			<div class="more_info__close">x</div>
			<span class="event_title"></span>

			<div class="more_info_inputs">
				<div class="inputs_surname">
					<span>Прізвище <sup style="color:red">*</sup></span>
					<input type="text" name="client_surname">
				</div>
				<div class="inputs_name">
					<span>Ім'я <sup style="color:red">*</sup></span>
					<input type="text" name="client_name">
				</div>
				<div class="inputs_phone">
					<span>Телефон <sup style="color:red">*</sup></span>
					<input type="text" name="client_tel">
				</div>
				<div class="inputs_mail">
					<span>Електронна пошта</span>
					<input type="email" name="client_mail">
				</div>
				<div class="inputs_birth">
					<span>Дата народження</span>
					<input type="date" placeholder="дд.мм.рррр" name="client_birth">
				</div>
				<div class="inputs_passport">
					<span>Серія паспорта</span>
					<input type="text" name="client_passport">
				</div>
				<div class="inputs_agreement">
					<input style="box-shadow:none;" type="checkbox" name="client_checkbox">
					<span>Я ознайомлений(на) з  <a target="_blank" href="https://drive.google.com/file/d/14rfip5nmkavG1S4ivCDubGIqkByhd--R/view">програмою та правилами Тур-Клубу Зелений Чемодан</a><sup style="color:red">*</sup></span>
				</div>	
			</div>	


			<span class="star-field"><sup style="color:red">*</sup> - обов’язкове поле для вводу</span>
		</div>
		<div class="submit_container">
			<input type="hidden" name="db_name" value="<?=$db_name[0]?>">
			<input value="Бронювати" type="submit" name="bus_submit">
			<br><div class="bus_valid"></div>
		</div>
	</div>
	<div class="mask"></div>