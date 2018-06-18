<!DOCTYPE html>
<html lang="en">
<head>
	<?php
  		require_once "frontend/head.php";
  		require_once 'backend/db.php';
  	?>
	<title>Тури - Зелений чемодан</title>
</head>
<body>

	<?php require_once "frontend/header.php";
		$tour_id = $_GET['tour'];
		$get_tours = mysqli_query($connection, "SELECT * FROM `tours` WHERE `id` = $tour_id");
		$get_gallery = mysqli_query($connection, "SELECT * FROM `tour_gallery` WHERE `tour_id` = $tour_id");
		$get_pays =  mysqli_query($connection, "SELECT * FROM `tours_pay-for` WHERE `tour_id` = $tour_id");
		$get_plan =  mysqli_query($connection, "SELECT * FROM `tours_plan` WHERE `tour_id` = $tour_id ORDER BY `day`, `time` ASC");
		$get_id = 0;
		while($get_tours_array = mysqli_fetch_array($get_tours)){
			$tour = $get_tours_array;
		}
		while($get_gallery_array = mysqli_fetch_array($get_gallery)){
			$tour_gallery[$get_id] = $get_gallery_array;
			$get_id++;
		}
		while($get_pays_array = mysqli_fetch_array($get_pays)){
			if ($get_pays_array['extra']==0){
				$tour_pays[$get_id] = $get_pays_array;
			}else{	
				$tour_pays_extra[$get_id] = $get_pays_array;
			}
			$get_id++;
		}
		while($get_plan_array = mysqli_fetch_array($get_plan)){
			$tour_plan[$get_id] = $get_plan_array;
			$get_id++;
		}
		$day_count = -1;
		$day_count_check = "";
			foreach ($tour_plan as $key ) {
				if ($key['day'] != $day_count_check) {
					$day_count++;
				}
				$day_count_check = $key['day'];
			}
		$days = array(0 => "День перший", 1 => "День другий", 2 => "День  третій", 3 => "День четвертий", 4 => "День п'ятий", 5 => "День шостий", 6 => "День сьомий");
		?>
	<section class="top_block" style="background-image:url(<?=$tour['main_pic']?>)">
		<div class="global_column big_header">
			<div class="title__text title__text_1"><p id="event_title"><?=$tour['name']?></p></div>
                <a href="#bus_form" class="booking">Бронювати</a>
		</div>
	</section>
	<div class="content">
		<section class="long_desc">
			<div class="long_desc__text">
				<p> <?=$tour['long_desc']?> </p>
			</div>
		</section>
	</div>	
		<section class="gallery">
			<div class="gallery-container">
				<?php
					foreach ($tour_gallery as $key) { ?>
						 <a class="single_image" data-fancybox="gallery" href="<?=$key['tour_pic']?>"><div class="gallery_image" style="background-image: url(<?=$key['tour_pic']?>)"></div></a>
				<?php } ?>
			</div>	
		</section>
		<section class="main_info">
			<div class="main-info_container">
				
				<div class="info_block__date">
					<img src="/pics/icos/calendar.svg" alt="">
					<p class="info_block__date-title">Дата виїзду</p>
					<p class="info_block__date-text"><?=$tour['date']?></p>
				</div>
				<div class="info_block__place">
					<img src="/pics/icos/bus.svg" alt="">
					<p class="info_block__date-title">Вільних місць</p>
					<p class="info_block__date-text"><?=$tour['place']?></p>
				</div>
				<div class="info_block__price">
					<img src="/pics/icos/money.svg" alt="">
					<p class="info_block__date-title">Ціна</p>
					<p class="info_block__date-text"><?=$tour['price']?></p>
				</div>
			</div>
		</section>
	<div class="content">	
		<section class="pay_for">
			<div class="pay_for-container">
				<div class="pay_for_title">У вартість входить</div>
				<div class="pay-for_blocks">
					<?php foreach ($tour_pays as $key) { ?> 
						<div class="pay-for_block">
							<div class="pay-for_block__img">
								<img src="<?=$key['pic']?>" alt="">
							</div>
							<div class="pay-for_block__name">
								<span><?=$key['name']?></span>
							</div>
							<div class="pay-for_block__desc">
								<span><?=$key['description']?></span>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<section class="pay_for-extra">
			<div class="pay_dor-extra-container">
				<div class="pay_for_title">Додаткові витрати</div>
				<div class="pay-for_blocks pay-extra">
					<?php foreach ($tour_pays_extra as $key) { ?> 
						<div class="pay-for_block pay-extra">
							<div class="pay-for_block__img">
								<img src="<?=$key['pic']?>" alt="">
							</div>
							<div class="pay-for_block__name">
								<span><?=$key['name']?></span>
							</div>
							<div class="pay-for_block__desc">
								<span><?=$key['description']?></span>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>	
		</section>
	</div>	
		<section class="plan">
			<div class="pay_dor-extra-container">
				<div style="background-image: url(<?=$tour['plan_pic']?>);" class="plan_title"><div class="plan_title__mask"></div>
					<p class="plan_title__bigger">Програма туру</p>
					<p class="plan_title__smaller">Організатори залишать за собою право часткових змін програми чи планування розпорядку, з метою покращення якості подорожі!</p>
				</div>
				<div class="content">
					<div class="plan_blocks">
						<?php for ($i=0; $i<=$day_count; $i++){
								echo "<div class='plan_blocks__title'>".$days[$i]."</div>";
								foreach ($tour_plan as $key) {
									if ($key['day'] == $i+1){
										?>
										<div class="plan_block" style="background-image: url(<?=$key['image']?>);">
											<div class="plan_block-mask">
												<div class="plan_block-inner">
													<div class="plan_block__title">
														<?=$key['name']?>
													</div>
													<div class="plan_block__desc">
														<?=$key['description']?>
													</div>
													<div class="plan_block__time slide_up">
														<?=$key['time']?>
													</div>
												</div>	
											</div> 	
										</div>	
									<?php }
								}
						} ?>
					</div>
				</div>	
		</section>	
		  <?php
            require_once 'frontend/bus_form.php';
        ?>
	</div>	
	 <?php require_once 'frontend/footer.php'; ?>
</body>
</html>