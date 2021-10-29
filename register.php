<?php
	require "head.php";

?>

<main class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <section class="max-w-md w-full space-y-8 main__content">
    <div>
      <img class="mx-auto h-12 w-auto" src="./assets/img/logo.png" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        New here?
      </h2>
			<p class="text-center">Registration only takes a few steps</p>
    </div>
    <form class="mt-8 space-y-6" action="./modules/register.php" method="POST">
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="username" class="sr-only">Name</label>
          <input id="username" name="username" type="text" autocomplete="name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
        </div>
        <div>
          <label for="email" class="sr-only">Email address</label>
          <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
        </div>
				<div>
					<select name="country" id="country">
						<option value="">country</option>
						<option value="US">United States</option>
						<option value="UK">United Kingdom</option>
						<option value="IN">India</option>
						<option value="GR">Germany</option>
						<option value="AR">Argentina</option>
					</select>
				</div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
        </div>
      </div>
      <!-- <p><?= ((isset($_GET['logout']) && $_GET['logout']) ? 'logout correct': 'not logged')?></p> -->
      <div>
        <button 
				type="submit"
				name="register"
				class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
					Register
        </button>
      </div>
    </form>
  </section>
</main>