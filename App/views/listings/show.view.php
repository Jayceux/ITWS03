<?php

use Framework\Authorization;

?>

<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('top-banner') ?>

<section class="container p-4 mx-auto mt-4">
    <?= loadPartial('message') ?>

    <div class="p-3 bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between">
            <a class="block p-4 text-blue-700" href="/listings">
                <i class="fa fa-arrow-alt-circle-left"></i>
                Back To Listings
            </a>
            <?php if (isset($listing) && Authorization::isOwner($listing->user_id)) : ?>
                <div class="flex ml-4 space-x-4">
                    <a href="/listings/<?= $listing->id ?? "#" ?>/edit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Edit</a>
                    <!-- Delete Form -->
                    <form method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">Delete</button>
                    </form>
                    <!-- End Delete Form -->
                </div>
            <?php endif; ?>
        </div>
        <div class="p-4">
            <h2 class="text-xl font-semibold <?= !isset($listing) ? "text-red-600 italic" : "" ?>">
                <?= isset($listing) ? $listing->title : 'Job Title Not Found' ?>
            </h2>
            <p class="mt-2 text-lg text-gray-700">
                <?= isset($listing) ? $listing->description : 'No description available for this listing.' ?>
            </p>
            <ul class="p-4 my-4 bg-gray-100 rounded">
                <li class="mb-2"><strong>Salary:</strong> <?= isset($listing) ? formatSalary($listing->salary) : 'N/A' ?></li>
                <li class="mb-2">
                    <strong>Location:</strong> <?= isset($listing) ? $listing->city . ', ' . $listing->state : 'N/A' ?>
                </li>
                <?php if (!empty($listing->tags)) : ?>
                    <li class="mb-2">
                        <strong>Tags:</strong> <?= $listing->tags ?>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>

<section class="container p-4 mx-auto">
    <h2 class="mb-4 text-xl font-semibold">Job Details</h2>
    <div class="p-4 text-black bg-white rounded-lg shadow-md">
        <h3 class="mb-2 text-lg font-semibold text-blue-700">
            Job Requirements
        </h3>
        <p>
            <?= isset($listing) ? $listing->requirements : 'No requirements specified for this listing.' ?>
        </p>
        <h3 class="mt-4 mb-2 text-lg font-semibold text-blue-700">Benefits</h3>
        <p>
            <?= isset($listing) ? $listing->benefits : 'No benefits specified for this listing.' ?>
        </p>
    </div>
    <p class="my-5">
        Put "Job Application" as the subject of your email and attach your
        resume.
    </p>
    <!-- The Subject line of the email will be pre-filled with the job title for better context -->
    <a
        href="<?= isset($listing) ? 'mailto:' . $listing->email . '?subject=' . rawurlencode('Job Application for ' . $listing->title) : '#' ?>"
        class="block w-full text-center px-5 py-2.5 shadow rounded border text-base font-medium cursor-pointer text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
        <?= isset($listing) ? "Apply Now" : "Email Not Available" ?>
    </a>
</section>

<?= loadPartial('bottom-banner') ?>
<?= loadPartial('footer') ?>