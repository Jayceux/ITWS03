<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('top-banner') ?>

<section class="flex items-center justify-center mt-20">
			<div class="w-full p-8 mx-6 bg-white rounded-lg shadow-md md:w-600">
				<h2 class="mb-4 text-4xl font-bold text-center">Register</h2>

				<?= loadPartial('errors', ['errors' => $errors ?? []]) ?>

				<form method="POST" action="/auth/register">
					<div class="mb-4">
						<input
							type="text"
							name="name"
							placeholder="Full Name"
							class="w-full px-4 py-2 border rounded focus:outline-none"
							value="<?= $old['name'] ?? '' ?>"
						/>
					</div>
					<div class="mb-4">
						<input
							type="email"
							name="email"
							placeholder="Email Address"
							class="w-full px-4 py-2 border rounded focus:outline-none"
							value="<?= $old['email'] ?? '' ?>"
						/>
					</div>
					<div class="mb-4">
						<input
							type="text"
							name="city"
							placeholder="City"
							class="w-full px-4 py-2 border rounded focus:outline-none"
							value="<?= $old['city'] ?? '' ?>"
						/>
					</div>
					<div class="mb-4">
						<input
							type="text"
							name="state"
							placeholder="State"
							class="w-full px-4 py-2 border rounded focus:outline-none"
							value="<?= $old['state'] ?? '' ?>"
						/>
					</div>
					<div class="mb-4">
						<input
							type="password"
							name="password"
							placeholder="Password"
							class="w-full px-4 py-2 border rounded focus:outline-none"
						/>
					</div>
					<div class="mb-4">
						<input
							type="password"
							name="password_confirm"
							placeholder="Confirm Password"
							class="w-full px-4 py-2 border rounded focus:outline-none"
						/>
					</div>
					<button
						type="submit" class="w-full px-4 py-2 text-white rounded bg-accent hover:bg-accent-hover focus:outline-none"
					>
						Register
					</button>

					<p class="mt-4 text-gray-500">
						Already have an account?
						<a class="text-accent" href="/auth/login">Login</a>
					</p>
				</form>
			</div>
		</section>

<?= loadPartial('bottom-banner') ?>
<?= loadPartial('footer'); ?>