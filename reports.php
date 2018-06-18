<!DOCTYPE html>
<html lang="en">
<head>
	<?php
  		require_once "frontend/head.php";
  		require_once 'backend/db.php';
  	?>
	<title>Звіти - Зелений чемодан</title>
</head>
<body>
	<style type="text/css">
		.content{
		}
		.tours{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		.tour{
			width: 100%;
			height: 500px;
			background-color: #fac;
			margin: 10px;
			position: relative;
		}
		.tour_bg{
			position: absolute;
			height: 100%;
			width: 100%;
			top: 0;
			left: 0;
			z-index: 0;
		}
		.tour_desc{
			position: absolute;
			height: 300px;
			width: 400px;
			background-color: #fac;
			z-index: 1;
			right: 0;
			top: 100px;
		}
	</style>
	<?php require_once "frontend/header.php"; ?>
	<section class="top_block">
		<div class="global_column big_header">
			<div class="title__text title__text_1">Наші звіти</div>
			  <div class="title__text title__text_1">
                Туристичний клуб
            </div>
            <div class="title__text title__text_2">
                Зелений чемодан
            </div>
		</div>
	</section>
	<div class="content">
		<div class="title__text title__text_1" align="center">Наші звіти</div>
		<div class="tours">
			<?php
				$tours = array();
				$tour_count = 1;
				$get_tours = mysqli_query($connection, "SELECT * FROM `tours`");
				while($get_tours_array = mysqli_fetch_array($get_tours)){
					$tours[$tour_count] = $get_tours_array;
					$tour_count++;
				}
				foreach ($tours as $value) {
					?>
						<div class="tour">
							<img class="tour_bg" src="<?=$value['main_pic']?>">
							<div class="tour_desc">
								<p><?=$value['name']?></p>
								<p><?=$value['date']?></p>
							</div>
						</div>
					<?php
				}
			?>
		</div>	
	</div>	
	 <?php require_once 'frontend/footer.php'; ?>
</body>
</html>