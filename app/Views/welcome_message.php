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
	
<div class="overflow-x-auto relative shadow-md sm:rounded-lg m-4">
	
		<a href="/input" class="text-center"><div class="bg-gray-600 pb-10 text-white font-bold pt-10">+ TAMBAH DATA +</div></a>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-10">
        <thead class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    No
                </th>
                <th scope="col" class="py-3 px-6">
                    Nama Penonton
                </th>
                <th scope="col" class="py-3 px-6">
                    NIS
                </th>
                <th scope="col" class="py-3 px-6">
                    Jenis
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
			<?php 
			$no = 1;
			foreach($penonton as $p): 
			?>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $no++ ?>
                </th>
                <td class="py-4 px-6">
                    <?= $p['nama'] ?>
                </td>
                <td class="py-4 px-6">
                    <?= $p['nis'] ?>
                </td>
                <td class="py-4 px-6">
                    <?= $p['jenis'] ?>
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit </a>|<a href="/input/delete/<?= $p['id_penonton'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> Hapus</a>|<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> Cetak</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

	</body>
</html>