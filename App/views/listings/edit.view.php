<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('top-banner') ?>

<section class="flex items-center justify-center mt-20">
	<div class="w-full p-8 mx-6 rounded-lg shadow-md bg-card md:w-600">
		<h2 class="mb-4 text-4xl font-bold text-center">Update Job Listing</h2>

		<form method="POST" action="/listings/<?= $listing->id ?? '' ?>">
			<input type="hidden" name="_method" value="PUT">
			<h2 class="mb-6 text-2xl font-bold text-center text-gray-500">
				Job Info
			</h2>

			<?= loadPartial('errors', ['errors' => $errors ?? []]) ?>

			<div class="mb-4">
				<input
					type="text"
					name="title"
					placeholder="Job Title"
					class="w-full px-4 py-2 border rounded focus:outline-none"
					value="<?= $listing->title ?? '' ?>" />
			</div>
			<div class="mb-4">
				<textarea
					name="description"
					placeholder="Job Description"
					class="w-full px-4 py-2 border rounded focus:outline-none"><?= $listing->description ?? '' ?></textarea>
			</div>
			<div class="mb-4">
				<input
					type="text"
					name="salary"
					placeholder="Annual Salary"
					class="w-full px-4 py-2 border rounded focus:outline-none"
					value="<?= $listing->salary ?? '' ?>" />
			</div>
			<div class="mb-4">
				<input
					type="text"
					name="requirements"
					placeholder="Requirements"
					class="w-full px-4 py-2 border rounded focus:outline-none"
					value="<?= $listing->requirements ?? '' ?>" />
			</div>
			<div class="mb-4">
				<input
					type="text"
					name="benefits"
					placeholder="Benefits"
					class="w-full px-4 py-2 border rounded focus:outline-none"
					value="<?= $listing->benefits ?? '' ?>" />
			</div>
			<div class="mb-4">
				<input
					type="text"
					name="tags"
					placeholder="Tags (comma separated)"
					class="w-full px-4 py-2 border rounded focus:outline-none"
					value="<?= $listing->tags ?? '' ?>" />
			</div>
			<h2 class="mb-6 text-2xl font-bold text-center text-gray-500">
				Company Info & Location
			</h2>
			<div class="mb-4">
				<input
					type="text"
					name="company"
					placeholder="Company Name"
					class="w-full px-4 py-2 border rounded focus:outline-none"
					value="<?= $listing->company ?? '' ?>" />
			</div>
			<div class="mb-4">
				<input
					type="text"
					name="address"
					placeholder="Address"
					class="w-full px-4 py-2 border rounded focus:outline-none"
					value="<?= $listing->address ?? '' ?>" />
			</div>
			<div class="mb-4">
				<input
					type="text"
					name="city"
					placeholder="City"
					class="w-full px-4 py-2 border rounded focus:outline-none"
					value="<?= $listing->city ?? '' ?>" />
			</div>
			<div class="mb-4">
				<input
					type="text"
					name="state"
					placeholder="State"
					class="w-full px-4 py-2 border rounded focus:outline-none"
					value="<?= $listing->state ?? '' ?>" />
			</div>
			<div class="mb-4">
				<input
					type="text"
					name="phone"
					placeholder="Phone"
					class="w-full px-4 py-2 border rounded focus:outline-none"
					value="<?= $listing->phone ?? '' ?>" />
			</div>
			<div class="mb-4">
				<input
					type="email"
					name="email"
					placeholder="Email Address For Applications"
					class="w-full px-4 py-2 border rounded focus:outline-none"
					value="<?= $listing->email ?? '' ?>" />
			</div>
			<button
				class="w-full px-4 py-2 my-3 text-white bg-green-500 rounded hover:bg-green-600 focus:outline-none">
				Save
			</button>
			<a
				href="/listings/<?= $listing->id ?? '' ?>"
				class="block w-full px-4 py-2 text-center text-white bg-red-500 rounded hover:bg-red-600 focus:outline-none">
				Cancel
			</a>
		</form>
	</div>
</section>

<?= loadPartial('bottom-banner') ?>
<?= loadPartial('footer') ?>