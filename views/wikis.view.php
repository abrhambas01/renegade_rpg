<?php require('partials/head.php'); ?>
<?php require('partials/dashboard/nav.php') ?>
<section id="body-content" class="container ">
	<div id="game-sections">
		<div class="flex h-56">
			<a href="/kingdoms" class="w-1/2 mr-2">
				<img src="public/images/castles/castle-1.jpg" class="h-auto"  alt="">
			</a>	
			<a href="/armory" class="w-1/2 mr-2">
				<img src="public/images/armory.jpg" alt="">
			</a>
		</div>
	</div>

	<div class="accordion text-black" id="accordionExample">
		<div class="card bg-white">
			<div class="card-header" id="headingOne">
				<h2 class="mb-0">
					<button class="btn btn-link hover:no-underline " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<a class="text-2xl">FAQ</a>
					</button>
				</h2>
			</div>

			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="card-body">
					<div class="list-group">
						<?php foreach ($faqs as $faq): ?>
							<a href="#" class="list-group-item list-group-item-action">
								<div class="d-flex w-100 justify-content-between">
									<h5 class="mb-1"><?php echo $faq->name ?></h5>
								</div>
								<p class="mb-1"><?php print $faq->description ; ?></p>
								<small><?php echo $faq->description ;?></small>
							</a>
						<?php endforeach ?>
						
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingTwo">
				<h2 class="mb-0">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Game Mechanics
					</button>
				</h2>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				<div class="card-body">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingThree">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<h3 class="text-2xl">In game descriptions</h3>
					</button>
				</h2>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				<div class="card-body">
					<div class="list-group ">
						<a href="#" class="list-group-item list-group-item-action bg-gray-700">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">List group item heading</h5>
								<small>3 days ago</small>
							</div>
							<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
							<small>Donec id elit non mi porta.</small>
						</a>
						<a href="#" class="list-group-item list-group-item-action">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">Factions</h5>
								<small class="text-muted">3 days ago</small>
							</div>
							<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
							<small class="text-muted">Donec id elit non mi porta.</small>
						</a>
						<a href="#" class="list-group-item list-group-item-action">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">List group item heading</h5>
								<small class="text-muted">3 days ago</small>
							</div>
							<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
							<small class="text-muted">Donec id elit non mi porta.</small>
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<?php require('partials/footer.php') ?>
