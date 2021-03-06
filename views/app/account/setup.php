<?php require('views/partials/head.php'); ?>
<?php require('views/partials/main/nav.php') ?>
<section id="body-content">
	<div id="container" class="">
		<div id="main-content">
			<div class="">
				<h3 class="text-center mb-6 text-4xl font-serif">Setup your Account now</h3>
				<div class="w-full user-account-output font-sans">
					<section id="registerUser" class="flex items-center justify-center">
						<form action="/process-login" class="max-w-half w-full" id="registerForm" method="POST">
							<div class="input-group mb-4">
								<input placeholder="Username / Email " name="pin" type="text" class="items-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
							</div>		

							<div class="input-group mt-4">
								<input type="password" required name="password" placeholder="Password" class="items-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
							</div>

							<div class="input-group mt-4">
								<input value="Enter" name="submit" type="submit" class="hover:text-green text-white font-normal bg-buttoncolor text-xl p-4 w-full">
							</input>
						</div>

						<div class="input-group mt-2 relative">
							<div class="flex">
								<input class="h-4 w-4 mt-2 mr-1" type="checkbox">
								<p class="text-xl font-sans">Remember me
								</p>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
</div>
</section>
<?php require('.././partials/footer.php'); ?>