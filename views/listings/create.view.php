<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('top-banner') ?>

<section class="flex items-center justify-center mt-20">
      <div class="w-full p-8 mx-6 bg-white rounded-lg shadow-md md:w-600">
        <h2 class="mb-4 text-4xl font-bold text-center">Create Job Listing</h2>
        <!-- <div class="p-3 my-3 bg-red-100 message">This is an error message.</div>
        <div class="p-3 my-3 bg-green-100 message">
          This is a success message.
        </div> -->
        <form method="POST">
          <h2 class="mb-6 text-2xl font-bold text-center text-gray-500">
            Job Info
          </h2>
          <div class="mb-4">
            <input
              type="text"
              name="title"
              placeholder="Job Title"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <div class="mb-4">
            <textarea
              name="description"
              placeholder="Job Description"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            ></textarea>
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="salary"
              placeholder="Annual Salary"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="requirements"
              placeholder="Requirements"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="benefits"
              placeholder="Benefits"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
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
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="address"
              placeholder="Address"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="city"
              placeholder="City"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="state"
              placeholder="State"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="phone"
              placeholder="Phone"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <div class="mb-4">
            <input
              type="email"
              name="email"
              placeholder="Email Address For Applications"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <button
            class="w-full px-4 py-2 my-3 text-white bg-green-500 rounded hover:bg-green-600 focus:outline-none"
          >
            Save
          </button>
          <a
            href="/"
            class="block w-full px-4 py-2 text-center text-white bg-red-500 rounded hover:bg-red-600 focus:outline-none"
          >
            Cancel
          </a>
        </form>
      </div>
    </section>

<?= loadPartial('bottom-banner') ?>
<?= loadPartial('footer'); ?>