<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
	<title>Tiket</title>
</head>
	<body class="bg-gray-300">
	<!-- Navbar -->
		<nav class="bg-gray-800">
	<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
		<div class="relative flex h-16 items-center justify-between">
		<div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
			<!-- Mobile menu button-->
			<button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
			<span class="sr-only">Open main menu</span>

			<svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
			</svg>
			<svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
			</svg>
			</button>
		</div>
		<div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
			<div class="flex flex-shrink-0 items-center">
			<img class="block h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
			<img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
			</div>
			<div class="hidden sm:ml-6 sm:block">
			<div class="flex space-x-4">
				<a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Input Penonton</a>
			</div>
			</div>
		</div>
		</div>
	</div>

	<!-- Mobile menu, show/hide based on menu state. -->
	<div class="sm:hidden" id="mobile-menu">
		<div class="space-y-1 px-2 pt-2 pb-3">
		<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
		<a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Input Penonton</a>
	</div>
	</nav>

	<!-- Form -->
    <div class="w-full max-w-xs m-10">
  <form action="/home/simpan" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 ">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
        Nama
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nama" id="nama" type="text" placeholder="nama">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        NIS
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="nis" id="nis" type="number" placeholder="nis">
      
    </div>
    
    <div class="mb-6">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Jenis
      </label>
    <select name="jenis"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
        <option value="siswa">Siswa</option>
        <option value="umum">Umum</option>
    </select>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Simpan
      </button>
    </div>
  </form>
</div>

	</body>
</html>