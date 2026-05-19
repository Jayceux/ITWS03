<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('top-banner') ?>

<section>
	<div class="container p-4 mx-auto mt-4">
		<div class="p-3 mb-4 text-3xl font-bold text-center border border-gray-300">Error <?= $status ?? "404" ?></div>
		<p class="mb-4 text-2xl text-center">
			<?= $message ?? "The page you are looking for could not be found." ?>
		</p>
		<div class="text-center">
			<a href="/" class="px-4 py-2 text-white rounded bg-primary hover:bg-primary/90">
				Go Back Home
			</a>
		</div>
	</div>
</section>

<?= loadPartial('footer') ?>