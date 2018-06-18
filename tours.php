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

	<?php require_once "frontend/header.php"; ?>
	<section class="top_block top_block__tours">
		<div class="global_column big_header">
			  <div class="title__text_1">
                ТУРИСТИЧНИЙ КЛУБ
            </div>
            <div class="title__text_2">
                ЗЕЛЕНИЙ ЧЕМОДАН
            </div>
		</div>
	</section>
	<div class="content">
		<div class="title__text title__text_1" style="margin-top: 50px;color: #37986d;font-weight: bold;" align="center">Список актуальних турів</div>
		<div style="margin-bottom: 50px;" class="tours">
			<?php
				$tours = array();
				$tour_count = 1;
				$get_tours = mysqli_query($connection, "SELECT * FROM `tours`");
				while($get_tours_array = mysqli_fetch_array($get_tours)){
					$tours[$tour_count] = $get_tours_array;
					$tour_count++;
				}
				foreach ($tours as $value) {
					if($value['visible']!=0){
						?> <a href="/tour.php?tour=<?=$value['id']?>">
								<div style="background-image:url(<?=$value['main_pic']?>)" class="tour">
									<div class="tour_desc">
										<div class="tour_desc__title">
											<p><?=$value['name']?></p>
										</div>
										<div class="tour_desc__info">
											<p><?=$value['date']?></p>
											<p><?=$value['price']?> <span class="font_regular"></span></p>
											<p><?=$value['place']?> <span class="font_regular"> місць </span></p>
										</div>
									</div>
								</div>
							</a>
						<?php
					}
				}
			?>
		</div>	
	</div>	
	 <?php require_once 'frontend/footer.php'; ?>
</body>
</html>