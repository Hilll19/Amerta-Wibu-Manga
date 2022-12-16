<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmark - Amerta Wibu</title>
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
      <a href="/" class="btn btn-ghost normal-case text-xl">Amerta Wibu</a>
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
            <li class="text-[#000000]"><a href="/profile">Profile</a></li>
            <li class="bg-[#212121] text-[#fff]"><a href="/bookmark">Bookmark</a></li>
            <li class="text-[#000000]"><a href="signout">Sign Out</a></li>
          </ul>
        </div>
      </ul>
    </div>
  </div>
</body>
</html>