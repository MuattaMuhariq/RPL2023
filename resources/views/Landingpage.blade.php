<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Utama</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  @vite('resources/css/app.css')

</head>
@include("Partials.Navbar1")
<body>
    <div class="relative overflow-hidden bg-[url('/Images/pexels-huseyn-kamaladdin-667838.jpg')] bg-center bg-cover">
  <div class="flex flex-col justify-center min-h-screen backdrop-blur-sm">
  <!--carousel start-->
<div id="default-carousel" class="relative w-4/5 ml-36 pt-20 drop-shadow-2xl" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative  h-56 overflow-hidden rounded-lg md:h-96">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ url('Images\bocah-7-tahun-ditemukan-di-rumah-penuh-sampah.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ url('Images\kamar-kos-viral-penuh-tumpukan-sampah.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ url('Images\rumah_20170928_205941.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-auto" alt="...">
      </div>
      
  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-3 left-1/2">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      
  </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          <span class="sr-only">Next</span>
      </span>
  </button>
</div>
  <!--carousel end-->

  <!--card start-->
  <div class="pt-20 pl-64">
    <a href="" class="relative w-3/4 h-56 block w-sm bg-white border border-gray-200 rounded-lg drop-shadow-2xl hover:bg-gray-100 dark:bg-white dark:border-gray-800 dark:hover:bg-gray-800">
      <h5 class=" text-center mt-6 ml-6 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">Apakah anda ingin kamar/rumah anda berserakan seperti diatas? </h5>
      <p class="text-center mt-6 ml-6 text-xl font-bold tracking-tight text-gray-900 dark:text-black">Anda malas memebersihkannya? Clean De kost Solusinya</p>
      <p class="text-center mt-6 ml-6 text-l font-bold tracking-tight text-gray-900 dark:text-black">Silahkan klik disini untuk daftar akun </p> 
    </a>
   
  </div>
  <!--card end-->
  <script>
    function Menu(e){
      let list = document.querySelector('ul');

      e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) :( e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
    }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
<footer>
@include("Partials.Footer")
</footer>
</html>