<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<nav class="bg-sky-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <img src="{{asset('images\24650 [Converted].png')}}" class="h-14 mr-3" alt="Clean De Kost" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Clean De Kost</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0 ">
        <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-black dark:hover:text-white md:dark:hover:bg-transparent">ORDER</a>
        </li>
        <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-black dark:hover:text-white md:dark:hover:bg-transparent">HISTORY</a>
        </li>
        <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-black dark:hover:text-white md:dark:hover:bg-transparent">ABOUT US</a>
        </li>
        <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-black dark:hover:text-white md:dark:hover:bg-transparent">KATALOG</a>
        </li>
        <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-black rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-black dark:hover:text-white md:dark:hover:bg-transparent">HALAMAN UTAMA</a>
        </li>
      </ul>
    </div>
  
</nav>
<div class="relative overflow-hidden bg-[url('../../public/Images/pexels-huseyn-kamaladdin-667838.jpg')] bg-center bg-cover">
  <div class="flex flex-col justify-center min-h-screen backdrop-blur-sm">

<body>
    
    <div class="container mx-auto ml-40">
        <div class="shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-2xl font-bold mb-4 ml-40">Rincian Pembayaran</h1>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full lg:w-1/2 px-2 mb-4">
                <div class="container mx-auto ml-40">
                    <div class="bg-gray-200 rounded px-8 pt-6 pb-8 mb-4">
                        <p class="mb-2"><span class="font-bold">Nama:</span>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="Masukkan nama Anda">
                        <p class="mb-2"><span class="font-bold">Jadwal Pembersihan:</span>
                        <input id="date" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <p class="mb-2"><span class="font-bold">Total:</span>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="total" type="text" placeholder="Masukkan total layanan kebersihan Anda">
                        <p class="mb-2"><span class="font-bold">Alamat:</span>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="total" type="text" placeholder="Masukkan Alamat Anda">
                        <p class="mb-2"><span class="font-bold">Total Diskon Sampah:</span>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="total" type="text" placeholder="Masukkan total diskon untuk layanan kebersihan Anda">
                        <p class="mb-2"><span class="font-bold">Total Harga:</span>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="total" type="text" placeholder="Masukkan total harga layanan kebersihan">
                        <div class="mb-4">
                
            <div class="flex justify-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Next
            </button>
