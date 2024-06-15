<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
  main{
    width: 1000px;
    margin: 0rem auto;
    border-radius: 24px;
  }
</style>
<body class="bg-violet-300">
  <header>
    <?php 
    include("../assets/header.php")
    ?>
  </header>
    <main class="my-20 bg-white w-500">
      <div>
        <h1 class="text-violet-500 text-3xl m-20 top-10 relative">Login Here</h1>
      </div>
      <div class="flex  flex-row justify-between ">
<form class=" bg-white p-20  rounded-3xl" >
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email address" required />
  </div>
  <div class="mb-5">
    <div class="flex flex-row justify-between">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label><label for="" class="text-blue-700 text-sm font-medium">Forgot password?</label>
    </div>
    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email" required />
  </div>
  <div class="flex items-start mb-5">
    <div class="flex items-center h-5">
      <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
    </div>
    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  <div class="flex flex-row gap-1 my-10">
  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Don't have na account? </label><a class="text-red-400 text-sm font-medium" href="">Sign up for free</a>
  </div>
</form>
<section>
<div class="bg-violet-400 rounded-3xl w-60 h-200">
  <img src="../images/developer-pic-1.webp" alt="Developer" class="absolute w-96 -mx-32">
  </div>
</section>
</div>
    </main>
</body>
</html>