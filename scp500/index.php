<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/siteHeader.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/assets.php';
admin_start_session();
?>
<html>

<head>
	<title>
		SCP 500 Drug Arrives At Tam's Pizzeria Facility!
	</title>
	<meta charset="UTF-8">
	<link rel="canonical" href="https://tams.pizza/articles/scp500/">
	<meta charset="UTF-8">
	<meta name='title' property="og:title" content="New drug sweeps through Facility!" />
	<meta name='type' property="og:type" content="website" />
	<meta name='image' property="og:image" content="https://tams.pizza/images/scp500.png" />
	<meta name='url' property="og:url" content="https://tams.pizza/articles/scp500/" />
	<meta name='description' property="og:description" content="Reports of the new drug SCP-500 sweeps through the facility" />
	<meta property="article:published_time" content="2018-05-04" />
	<link rel="stylesheet" href="<?= htmlspecialchars(site_asset_url('/style.css'), ENT_QUOTES, 'UTF-8') ?>">
	<style>
		img {
			box-shadow: 0px 0px 25px 25px rgba(55, 54, 51, 1);
		}
	</style>
	<script src="/js/static-perf-checker.js" defer></script>
</head>

<body>
	<div class="back"></div>
	<div class="logo"></div>
	<div class="static"></div>
	<div class="wrap">
		<?php render_site_header("tam's pizzeria", [
			['label' => 'home', 'href' => '/'],
			['label' => 'Articles', 'href' => '/articles/'],
			['label' => 'SCP-500'],
		]); ?>
		<div class="content">
			<div class="contentbox">
				<div class="content">
					<div class="contentTitle">
						SCP-500 is coming soon
					</div>
					<div class="contentDesctiption">
						<IMG SRC=./scp500.png width="200px" height="270px" alt="Pancaea" style="width:200px; height:270px;float: right; margin:5px;margin-right: 50px;" alt="Petersons body." />
						<p><br>
							The developers of SCP:SL has finally given in to the voice of the community and are adding
							SCP-500 into the game.<br>This will definitely help combat cancerous behavior and deafness
							due to Soviet anthems being played aggressively over the facility intercom.
							<br><br>
							Is that one russian kid on the radio bringing you excruciating mental pain? Look no further,
							pop an SCP-500 and your problems will be no more.
						</p>
						<br>
						<div class="contentSubTitle">
							What we expect to see in the future
						</div>
						<p>
							Let's face it; as the risk of getting cancer from players decrease, SCP-500 won't be of much
							use anymore. Seeing SCP-1025 added seems like a no-brainer.
							<br>
							Perhaps we would also see the introduction of a whole new gameplay mechanic where SCP-500
							will be introduced as a playable character? At this point, it's hard to say anything for
							certain. But we do know something big is DEFINITELY in the works over at Hubert's garage.
						</p>
						<div class="author">
							<br><br><i>
								Tam, 04.05.2018
							</i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
