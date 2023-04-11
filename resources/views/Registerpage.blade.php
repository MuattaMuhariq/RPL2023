<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
@include("Partials.Navbar1")
<div class="relative overflow-hidden bg-[url('../../public/Images/pexels-huseyn-kamaladdin-667838.jpg')] bg-center bg-cover">
  <div class="flex flex-col justify-center min-h-screen backdrop-blur-sm">

    <div
        class="w-full p-6 m-auto bg-white border-t border-black-600 rounded shadow-lg shadow-black-800/50 lg:max-w-md">
        <h1 class="text-3xl font-bold text-center text-black-700">REGISTER</h1>

        <form class="mt-4">
            <div>
                <label for="Username" class="block text-sm text-gray-800">Username</label>
                <input type=""
                    class="block w-full px-4 py-2 mt-2 text-black bg-white border rounded-md focus:border-black focus:ring-black focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            <div class="mt-4">
                <div>
                    <label for="password" class="block text-sm text-gray-800">Password</label>
                    <input type="password"
                        class="block w-full px-4 py-2 mt-2 text-black bg-white border rounded-md focus:border-black focus:ring-black focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
            <div class="mt-4">
                <div>
                    <label for="Nohp" class="block text-sm text-gray-800">No HP</label>
                    <input type="Nohp"
                        class="block w-full px-4 py-2 mt-2 text-black bg-white border rounded-md focus:border-black focus:ring-black focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            <div class="mt-4">
                <div>
                    <label for="Email" class="block text-sm text-gray-800">Email</label>
                    <input type="Email"
                        class="block w-full px-4 py-2 mt-2 text-black bg-white border rounded-md focus:border-black focus:ring-black focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            <div class="mt-4">
                <div>
                    <label for="Alamat" class="block text-sm text-gray-800">Alamat</label>
                    <input type="Alamat"
                        class="block w-full px-4 py-2 mt-2 text-black bg-white border rounded-md focus:border-black focus:ring-black focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            <div class="mt-6">
                    <button
                        class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-800 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">
                        REGISTER
                    </button>
            </div>
        </form>
        <p class="mt-8 text-xs font-light text-center text-gray-700"> Do you have an account? <a href="{{url('Login')}}"
                class="font-medium text-purple-600 hover:underline">Sign In</a></p>
    </div>
  </div>
</div>
<footer>
    @include("partials.Footer")
</footer>
</body>
