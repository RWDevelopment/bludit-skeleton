<nav class="navbar navbar-expand-md fixed-top navbar-light bg-white shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="<?php echo $site->url() ?>">
		        <?php echo $site->title() ?>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">

				<!-- Static pages -->
				<?php foreach ($staticContent as $staticPage): ?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
				</li>
				<?php endforeach ?>

			</ul>
		</div>
	</div>
</nav>
