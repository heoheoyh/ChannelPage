<!DOCTYPE html>

<body>

	<div class="wrap">
		<section>

			<div class="aside">
				<a href="http://mforest.tv"><div id="logo1"></div></a>


				<div class="btn">
					<a href="http://mforest.tv" class="ch-link">
						<div class="communi">
							<div id="stick1"></div>
							<p>COMMUNICATIONS</p>
						</div>
					</a>

					<a href="http://mforest.synology.me/admin/Channel.php" class="ch-link" >
						<div class="channel">
							<div id="stick2"></div>
							<p>CREATORS<br>CHANNEL</p>	
						</div>
					</a>
				</div>
			</div>

			<nav>
				<div class="padding">
					<span id="list">CHANNEL LIST</span>
					<?php 
					require_once("dbconfig.php");
					$query = "SELECT board_free.* from board_free";
					$result = $db->query($query);
					$num_result= $result->num_rows;

					?>

					<?php

					while($row = $result->fetch_assoc())
					{

						?>

						<span class="menu">
							<a href="<?php echo $row['main_url']?>"  target="_blank"><?php echo $row['b_title']?></a>
						</span>
						<?php
					}
					?>
				</div>
			</nav>

		</section>
	</div>

</body>
</html>