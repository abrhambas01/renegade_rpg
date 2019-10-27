<section id="body-content">
	<div id="container" class="">
		<div id="main-content">
			<div class="">
				<h3 class="text-center mb-6 text-4xl font-serif">Register Account</h3>
				<div class="w-full user-account-output font-sans">
					<section id="formUser" class="flex items-center justify-center">
						<form class="max-w-half w-full" id="registerForm" action="/process-register" method="POST">
							<div class="input-group mb-4 ">
								<input placeholder="Name" name="full_name" type="text" class="items-center text-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
							</div>		
							<div class="input-group text-center">
								<input placeholder="Email" name="email" type="email" class="items-center text-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
							</div>	

							<div class="input-group mt-4 text-center">
								<input type="password" required name="password" placeholder="Password" class="items-center text-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
							</div>

							<div class="input-group mt-4">
								<input type="password" required name="confirmation" placeholder="Confirm Password"  class="items-center text-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
							</div>	

							<div class="input-group mt-4">
								<button name="register" type="submit" class="hover:text-green text-white font-normal bg-buttoncolor text-xl p-3 w-full">Register
								</button>
							</div>

							<div class="input-group mt-2 relative">
								<p class="text-lg font-display">By signing up you agree to our <a href="./license-terms.php" class="text-white underline">license terms.</a></p>
							</div>
						</form>
					</section>
				</div>
			</div>
		</div>
	</div>
</section>
