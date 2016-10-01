<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Mforest</title>
</head>
<body>
	<div class="wrap">
		<section>
			<div class="content">
				<a href="main.php"><div id="logo1"></div></a>


				<div class="btn">
					<a href="http://mforest.tv" class="ch-link">
						<div class="communi">
							<div id="stick1"></div>
							<p>COMMUNICATIONS</p>
						</div>
					</a>

					<a href="http://mforest.synology.me/admin/Channel.php" class="ch-link" target="iframe_a">
						<div class="channel">
							<div id="stick2"></div>
							<p>CREATORS</p>
							<p>CHANNEL</p>	
						</div>
					</a>
				</div>
			</div>
		</section>
	</div>
	<article>
		<iframe name="iframe_a" scrolling="no"  id="iFrameResizer0" class="iframe_a" frameborder="0" ></iframe>

	</article>
	
	

	
	<script type="text/javascript" src="iframe-resizer-master/js/iframeResizer.min.js"></script>

	<script type="text/javascript">

	// function autoResize(i)
	// {
	// 	var iframeHeight=
	// 	(i).contentWindow.document.body.scrollHeight;
	// 	(i).height=iframeHeight+20;
	// }
	
	iFrameResize({
		log:true,
		autoResize: true,
		inPageLinks: true,
		heightCalculationMethod:'documentElementOffset'
		
	})
	

	</script>
	
</body>
</html>

