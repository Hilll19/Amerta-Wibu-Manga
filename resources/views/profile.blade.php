<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Amerta Wibu</title>
    <link rel="stylesheet" href="https://cnjs.cloudflare/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">

    {{-- DAISY UI CDN --}}
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.43.2/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body
  style="background:url({{ asset('/img/bg-dashboard-2.jpg') }}); background-repeat: no repeat; height: 100%;">

  {{-- HEADER --}}
  <div class="navbar bg-[#880808] text-[#fff]">
    <div class="flex-1">
      <a href="/" class="btn btn-ghost normal-case text-xl" href="/">Amerta Wibu</a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/popular">Popular</a></li>

        <li tabindex="0">
          <a>
            Genre

            {{-- ICON --}}
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
              <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
            </svg>
          </a>

          {{-- GENRE --}}
          <ul class="p-2 z-50 bg-base-100 text-[#000000]">
            <li><a>Adventure</a></li>
            <li><a>Comedy</a></li>
            <li><a>Demons</a></li>
            <li><a>Ecchi</a></li>
            <li><a>Fantasy</a></li>
            <li><a>Harem</a></li>
            <li><a>Horror</a></li>
            <li><a>Isekai</a></li>
            <li><a>Josei</a></li>
            <li><a>Magic</a></li>
            <li><a>Martial Arts</a></li>
            <li><a>Mecha</a></li>
            <li><a>Mystery</a></li>
            <li><a>Romance</a></li>
            <li><a>School</a></li>
            <li><a>Sci-fi</a></li>
            <li><a>Shounen</a></li>
          </ul>
        </li>

        <li><a href="/latest">Latest</a></li>
        <div class="dropdown dropdown-end mx-4">
          <label tabindex="0" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
              <img src="https://placeimg.com/80/80/people" />
            </div>
          </label>
          <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
            <li class="bg-[#212121] text-[#fff]"><a href="/profile">Profile</a></li>
            <li class="text-[#000000]"><a href="/bookmark">Bookmark</a></li>
            <li class="text-[#000000]"><a href="signout">Sign Out</a></li>
          </ul>
        </div>
      </ul>
    </div>
  </div>


  {{-- Body --}}
  <main>
  <div class="mt-8">
        <div>
            <div class="bg-white shadow rounded-lg w-5/6 mx-auto">
                <div class="flex justify-center mt-12">
                        <img src="https://placeimg.com/80/80/people" alt="" class="rounded-full mx-auto w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
                </div>
                
                <div class="mt-8">
                    <h1 class="font-bold text-center text-3xl text-gray-900">Resqi</h1>
                    <p class="text-center text-sm text-gray-400 font-medium">Wibbu Pemula</p>
                    <p>
                        <span>
                            
                        </span>
                    </p>
                    <div class="my-5 px-6">
                        <a href="/bookmark" class="text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-gray-900 hover:bg-black hover:text-white">Bookmark</a>
                    </div>
                    <div class="w-full">
                        <h3 class="font-medium text-gray-900 text-left px-6">Recent activites</h3>
                        <div class="mt-5 w-full flex flex-col items-center overflow-hidden text-sm">
                            <a href="#" class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                    Updated his status
                                    <span class="text-gray-500 text-xs">24 min ago</span>
                            </a>

                            <a href="#" class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                    Added new profile picture
                                    <span class="text-gray-500 text-xs">42 min ago</span>
                            </a>

                            <a href="#" class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                Posted new article in <span class="font-bold">#Web Dev</span>
                                <span class="text-gray-500 text-xs">49 min ago</span>
                            </a>

                            <a href="#" class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                Edited website settings
                                <span class="text-gray-500 text-xs">1 day ago</span>
                            </a>

                            <a href="#" class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150 overflow-hidden">
                                <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                Added new rank
                                <span class="text-gray-500 text-xs">5 days ago</span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
</body>
</html>