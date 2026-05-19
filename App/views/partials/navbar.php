<?php

use Framework\Session;

?>

<header class="p-4 text-white bg-blue-900">
  <div class="container flex items-center justify-between mx-auto">
    <h1 class="text-3xl font-semibold">
      <a href="/">WorkIT</a>
    </h1>
    <nav class="flex flex-row items-center gap-4">
      <?php if (Session::has('user')) : ?>
        <p class="text-white">Welcome, <strong><?= htmlspecialchars(Session::get('user')['name']) ?></strong>!</p>
        <form method="POST" action="/auth/logout">
          <button type="submit" class="text-white hover:underline">Logout</button>
        </form>
        <a href="/listings/create" class="px-4 py-2 text-black transition duration-300 bg-yellow-500 rounded hover:bg-yellow-600 hover:shadow-md"><i class="fa fa-edit"></i> Post a Job</a>
      <?php else : ?>
        <a href="/auth/login" class="text-white hover:underline">Login</a>
        <a href="/auth/register" class="text-white hover:underline">Register</a>
      <?php endif; ?>
    </nav>
  </div>
</header>