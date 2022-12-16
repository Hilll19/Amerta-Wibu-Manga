<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Dashboard - Amerta Wibu</title>
  <link rel="stylesheet" href="https://cnjs.cloudflare/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/card.css') }}" rel="stylesheet">

  {{-- Swiper image --}}
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
  />
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  {{-- DAISY UI CDN --}}
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.43.2/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
  style="background:url({{ asset('/img/bg-dashboard-2.jpg') }}); background-repeat: no repeat; background-size: 100%;;">

  {{-- HEADER --}}
  <div class="navbar bg-[#880808] text-[#fff]">
    <div class="flex-1">
      <a href="/" class="btn btn-ghost normal-case text-xl">Amerta Wibu</a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1">
        <li class="bg-[#212121]"><a>Dashboard</a></li>
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
          <ul class="p-2 z-50 bg-base-100 text-[#000000] max-h-[500px] overflow-y-scroll">
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
            <li class="text-[#000000]"><a href="/bookmark">Bookmark</a></li>
            <li class="text-[#000000]"><a href="signout">Sign Out</a></li>
          </ul>
        </div>
      </ul>
    </div>
  </div>


  {{-- BODY --}}
  <main>
    <div class="flex">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex flex-row-reverse items-center justify-end">
                    <div class="h-full flex flex-col justify-center px-4">
                        <h1 class="text-[40px] font-bold text-[#fff]">One Piece</h1>
                        <p class="text-[#fff]">The story tells about the adventures of Monkey D. Luffy, a boy who has elastic body abilities like rubber after accidentally eating a Devil Fruit. Luffy and his crew of pirates, called the Straw Hat Pirates, explore the Grand Line in search of the world's greatest treasure known as "One Piece" in order to become the next Pirate King.</p>

                        <div class="mt-4">
                          <a href="/detailread">
                            <button class="btn bg-[#880808]">Read</button>
                          </a>
                        </div>
                    </div>
                    <div class="h-full py-8 px-4">
                        <img src="{{ asset('img/onepiece-cover2.jpg') }}" class="min-w-[700px] h-full object-cover rounded-xl">
                    </div>
                </div>

                <div class="swiper-slide flex flex-row-reverse items-center justify-end">
                    <div class="h-full flex flex-col justify-center px-4">
                        <h1 class="text-[40px] font-bold text-[#fff]">Blue Lock</h1>
                        <p class="text-[#fff]">Blue Lock tells the story of the journey of the Japan Football Association (JFA) which is looking for the best ball striker. This search program is led by a coach named Ego Jinpachi who forms and strategizes radical training in a prison institution called Blue Lock</p>

                        <div class="mt-4">
                          <a href="/detailread">
                            <button class="btn bg-[#880808]">Read</button>
                          </a>
                        </div>
                    </div>
                    <div class="h-full py-8 px-4">
                        <img src="{{ asset('img/bluelock-cover.png') }}" class="min-w-[700px] h-full object-cover rounded-xl">
                    </div>
                </div>
                <div class="swiper-slide flex flex-row-reverse items-center justify-end">
                    <div class="h-full flex flex-col justify-center px-4">
                        <h1 class="text-[40px] font-bold text-[#fff]">One Punch Man</h1>
                        <p class="text-[#fff]">One Punch Man revolves around Saitama, a superhero who can defeat opponents with a single punch but struggles to find worthy opponents after growing tired of the lack of challenge due to his immense strength.</p>

                        <div class="mt-4">
                          <a href="/detailread">
                            <button class="btn bg-[#880808]">Read</button>
                          </a>
                        </div>
                    </div>
                    <div class="h-full py-8 px-4">
                        <img src="{{ asset('img/saitama-cover.jpg') }}" class="min-w-[700px] h-full object-cover rounded-xl">
                    </div>
                </div>
                <div class="swiper-slide flex flex-row-reverse items-center justify-end">
                    <div class="h-full flex flex-col justify-center px-4">
                        <h1 class="text-[40px] font-bold text-[#fff]">Attack On Titan</h1>
                        <p class="text-[#fff]">Cerita mengisahkan tentang umat manusia yang harus bersembunyi di sebuah wilayah dengan dikelilingi tiga lapis tembok besar agar tidak dimakan oleh raksasa.Attack on Titan mengikuti kisah Eren Yeager yang tinggal bersama saudara angkatnya, Mikasa Ackerman dan sahabatnya Armin Arlert. Mereka tinggal di Distrik Shiganshina yang bersebelahan dengan Wall Maria atau dinding terluar dari tiga tembok melingkar.</p>

                        <div class="mt-4">
                          <a href="/detailread">
                            <button class="btn bg-[#880808]">Read</button>
                          </a>
                        </div>
                    </div>
                    <div class="h-full py-8 px-4">
                        <img src="{{ asset('img/aot-cover.jpg') }}" class="min-w-[700px] h-full object-cover rounded-xl">
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- LATEST MANGA --}}
    <div class="mx-4 my-8">
        <h1 class="text-[32px] font-bold text-[#fff] w-full text-center">Latest Update</h1>

        {{-- CARD --}}
        <div class="main">
            <ul class="cards">
            @foreach($result['latest'] as $item)
            
              <li class="cards_item">
              
                <div class="card">
                  <div class="card_image"><img class="object-cover" src={{ $item['images']['webp']['large_image_url'] }} alt="Latest Image"></div>
                  <div class="card_content flex flex-col justify-between">
                    <h2 class="card_title">{{ $item["title"] }}</h2>
                    <a href="/detailread?id={{ $item["mal_id"] }}">
                      <button class="btn card_btn mt-8">Read More</button>
                    </a>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
    </div>

    {{-- TOP RATED MANGA --}}
    <div class="mx-4 my-8">
        <h1 class="text-[32px] font-bold text-[#fff] w-full text-center">Top Rated</h1>

        <div class="main">
            <ul class="cards">
            @foreach($result['toprated'] as $item)
          
              <li class="cards_item">
              
                <div class="card">
                  <div class="card_image"><img src={{ $item['images']['webp']['large_image_url'] }} alt="Latest Image"></div>
                  <div class="card_content flex flex-col justify-between">
                    <h2 class="card_title">{{ $item["title"] }}</h2>
                    <a href="/detailread?id={{ $item["mal_id"] }}">
                      <button class="btn card_btn mt-8">Read More</button>
                    </a>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
    </div>


    {{-- POPULAR MANGA --}}
    <div class="mx-4 my-8">
        <h1 class="text-[32px] font-bold text-[#fff] w-full text-center">Popular</h1>

        {{-- CARD --}}
        <div class="main">
            <ul class="cards">
            @foreach($result['popular'] as $item)
          
              <li class="cards_item">
              
                <div class="card">
                  <div class="card_image"><img src={{ $item['images']['webp']['large_image_url'] }} alt="Latest Image"></div>
                  <div class="card_content flex flex-col justify-between">
                    <h2 class="card_title">{{ $item["title"] }}</h2>
                    <a href="/detailread?id={{ $item["mal_id"] }}">
                      <button class="btn card_btn mt-8">Read More</button>
                    </a>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
    </div>
  </main>

  <script>
    const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 3000, // 3 seconds
        }
    });
  </script>
</body>
</html>