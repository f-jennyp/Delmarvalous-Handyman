<div id="content">
	<div id="gallery">
		<div class="row">
			<h1>Gallery</h1>
			<div id="gall1" class="gallery-container">
				<ul class="gallery clearfix">
					<!-- <li>
						<a data-fancybox-group="default" class="thumbnail fancy" title=""
							href="public/images/gallery/1.jpg">
							<img loading="lazy" class="img-responsive" src="public/images/gallery/1.jpg" alt="gallery">
						</a>
					</li> -->


					<?php foreach ($gallery as $gall) {
						if ($gall["rel"] == "default") { ?>
							<li>
								<a data-fancybox-group="<?php echo $gall["rel"] ?>" class="thumbnail fancy"
									title="<?php echo $gall["alt"] ?>"
									href="public/images/gallery/<?php echo $gall["src"] ?>.jpg">
									<img loading="lazy" class="img-responsive"
										src="public/images/gallery/<?php echo $gall["src"]; ?>.jpg"
										alt="<?php echo $gall["alt"]; ?>">
								</a>
							</li>
						<?php }
					} ?>
				</ul>
				<div class="page_navigation"></div>
			</div>
		</div>
	</div>
</div>