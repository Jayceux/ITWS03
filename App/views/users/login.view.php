<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>

<div class="flex items-center justify-center mt-20">
	<div class="w-full p-8 mx-6 border rounded shadow-md bg-card md:w-500">
		<h2 class="mb-4 text-4xl font-bold text-center">Login</h2>
		<?= loadPartial('message') ?>
		<form method="POST" action="/auth/login">
			<div class="mb-4">
				<input
					type="email"
					name="email"
					placeholder="Email Address"
					class="w-full px-4 py-2 border rounded focus:outline-none" />
			</div>
			<div class="mb-4">
				<input
					type="password"
					name="password"
					placeholder="Password"
					class="w-full px-4 py-2 border rounded focus:outline-none" />
			</div>
			<button
				type="submit" class="w-full px-4 py-2 text-white rounded bg-accent hover:bg-accent focus:outline-none">
				Login
			</button>

			<p class="mt-4 text-gray-500">
				Don't have an account?
				<a class="text-accent" href="/auth/register">Register</a>
			</p>
		</form>
	</div>
</div>

<?= loadPartial('footer') ?>