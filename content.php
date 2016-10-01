<!DOCTYPE html>

<body>
	<?php 
	require_once("dbconfig.php");
	$query = "SELECT board_free.*, GROUP_CONCAT(DISTINCT thum_hash SEPARATOR '/') AS thum_hash ,GROUP_CONCAT(DISTINCT url  SEPARATOR ' ') AS url FROM board_free LEFT JOIN thumnail ON board_free.b_no=thumnail.b_no GROUP BY board_free.b_no ASC";
	$result = $db->query($query);
	$num_result= $result->num_rows;




	?>

	<div class="content">
		<section class="cont_1280">

			<?php

			while($row = $result->fetch_assoc())
			{

				?>

				<div class="inline">
					<p id="title">
						<?php echo $row['b_title']?>
					</p>

					<p id="keyword">
						<?php echo $row['b_content']?>
					</p>

					<?php echo "<div id='box'><div class=\"triangle\">
					<img src='files/".$row['hash']."' class='img' /></div></div>" ?> 

					<div id="link"><a href="<?php echo $row['main_url']?>"  target="_blank">GO TO THIS CHANNEL</a></div> 


					<div class="video">
						<span id="preview">PREVIEW </span>
						<div id="stick"></div>
						<div class="owl-demo"  class="owl-carousel owl-theme">	
							<?php 

							$imgPathArr = split('/', $row['thum_hash']);
							$urlPathArr = split(' ', $row['url']);
							for($j=0; $j<count($imgPathArr) && count($urlPathArr); $j++){

								echo "<div class='item'>
								<p>Go To Video<p>
								<a href='".$urlPathArr[$j]."' target='_blank'><img src='button.png' class='button'/></a>
								<a href='".$urlPathArr[$j]."' target='_blank'><img src='files/".$imgPathArr[$j]."' class='thumb'/></a>

								</div>";
							}


							?>


						</div>
					</div>
				</div>
				<?php
			}
			?>

		</section>

	</div>
	
	<script>

	$(document).ready(function() {
		
		$(".owl-demo").owlCarousel({

      // autoPlay: 3000,//Set AutoPlay to 3 seconds

      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2],
      itemsMobile : [640,2]


  });
		
	});

	</script>
	
	<body>

		</html>