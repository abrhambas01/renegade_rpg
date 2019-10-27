<?php require('partials/head.php'); ?>
<?php require('partials/dashboard/nav.php') ?>
<section id="body-content" class="container">
	<form class="bg-gray-100 text-black">
		<div class="p-4">
			<div class="form-group">
				<h3 class="text-black text-xl">Setup your account now: John Doe</h3>
				<hr>
				<label for="exampleInputEmail1">Display Name</label>
				<input type="text" name="display_name" class="form-control p-4 text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e.g : EragonXX">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Username</label>
				<input type="text" name="username" class="form-control p-4 text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e.g : username can be used to other than your email">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Password</label>
				<input type="password" name="username" class="form-control p-4 text-center" id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="e.g : username can be used to other than your email">
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect1">Choose a Kingdom:</label>
				<a href="/wikis" class="mt-4 text-info">Visit Game wikis to learn</a>
				<select class="form-control" id="exampleFormControlSelect1">
					<?php foreach ($kingdoms as $kingdom): ?>
						<option class="form-control" value="<?= $kingdom->id; ?>"><?= $kingdom->name; ?></option>
					<?php endforeach ?>
				</select>
			</div>

			<div class="form-group">
				<label for="exampleFormControlSelect1">Sign up as a</label>
				<a href="/wikis" class="mt-4 text-info"></a>
				<select class="form-control" id="exampleFormControlSelect1">
					<?php foreach ($character_types as $character_type): ?>
						<option class="form-control" value="<?= $character_type->id; ?>"><?= $character_type->title; ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">I agree to the agreement and terms that were written.</label>
			</div>
			<div class="form-group">
				<button class="btn-block btn-success p-3 text-xl">Submit</button>
			</div>

		</form>
	</section>
<?php require('partials/footer.php') ?>
