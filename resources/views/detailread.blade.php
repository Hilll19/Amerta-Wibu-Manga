<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail - Amerta Wibu</title>
    <link rel="stylesheet" href="https://cnjs.cloudflare/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">

    {{-- DAISY UI CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.43.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background:url({{ asset('/img/bg-dashboard-2.jpg') }}); background-repeat: no repeat; height: 100%;">

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
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24">
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
                    <ul tabindex="0"
                        class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                        <li class="text-[#000000]"><a href="/profile">Profile</a></li>
                        <li class="bg-[#212121] text-[#fff]"><a href="/bookmark">Bookmark</a></li>
                        <li class="text-[#000000]"><a href="signout">Sign Out</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>

    {{-- BODY --}}
    <main>
        <div>
            <!-- component -->
            <!-- This is an example component -->
            <div>
                <!---->
                <!---->
                <!---->
                <div class="min-w-sm flex flex-col text-gray-50">

                    <img src="{{ $result['images']['webp']['large_image_url'] }}" class="w-full h-[250px] bg-gray-500 object-cover blur"></div>

                    <div class="flex items-center p-4 px-18 -mt-[140px] mx-12">
                        <div class="flex items-center w-full">
                            <!-- IMAGE -->
                            <div
                                class="items-end justify-end text-purple-400 min-w-max bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white z-50">
                                <img class="h-[300px] w-[200px] shadow-xl z-50"
                                    src="{{ $result['images']['webp']['large_image_url'] }}" alt="">
                            </div>

                            <!-- TITLE, DESC, ETC -->
                            <div class="flex flex-col mx-8 mt-[120px] justify-center">
                                <!-- TITLE -->
                                <h1 class="text-[48px]">{{ $result['title'] }}</h1>

                                <!-- TIMESTAMP -->
                                <p class="text-sm text-gray-200 mx-4">
                                    Published {{ $result['published']['string'] }}
                                </p>

                                <!-- BUTTON -->
                                <div class="gap-4 py-2 flex mt-8">
                                    <button
                                        class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max text-gray-100 bg-red-500 hover:bg-gray-600 px-4 py-1 flex items-center hover:shadow-lg"><span
                                            class="mr-2">
                                            <svg height="20" width="20" viewBox="0 0 576 512" class="fill-current">
                                                <path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C87.5 32 35.1 48.6 9 59.9c-5.6 2.4-9 8-9 14V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V73.9c0-6.1-3.4-11.6-9-14C540.9 48.6 488.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z"/>
                                            </svg></span>Read<span class="ml-2"></span>
                                    </button>
                                    <button
                                    class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max text-gray-100 bg-green-500 hover:bg-green-600 px-4 py-1 flex items-center hover:shadow-lg"><span
                                        class="mr-2">
                                        <svg height="20" width="20" viewBox="0 0 384 512" class="fill-current">
                                            <path d="M336 0h-288C21.49 0 0 21.49 0 48v431.9c0 24.7 26.79 40.08 48.12 27.64L192 423.6l143.9 83.93C357.2 519.1 384 504.6 384 479.9V48C384 21.49 362.5 0 336 0zM336 452L192 368l-144 84V54C48 50.63 50.63 48 53.1 48h276C333.4 48 336 50.63 336 54V452z"/>
                                        </svg></span>Bookmark<span class="ml-2"></span>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>



                <div class="mx-14 my-8 text-white">
                    <h2 class="text-lg font-bold">Description</h2>
                    <p class="mt-2 text-justify">
                        {{ $result['synopsis']}}
                    </p>
                </div>

                <!-- SCROLL CHAPTER -->
                <div class="w-full rounded-xl overflow-auto p-8">
                    <div
                        class="overflow-y-scroll h-72 bg-[#434449] shadow-lg ring-1 ring-black/5 rounded-xl flex flex-col divide-y">

                        <div class="flex items-center gap-4 p-4">
                            <div class="flex flex-col">
                                <strong class="text-white font-medium">Chapter 1</strong>
                                <span class="text-slate-100 text-[12px] font-medium">10 Oct 2022</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4">
                            <div class="flex flex-col">
                                <strong class="text-white font-medium">Chapter 2</strong>
                                <span class="text-slate-100 text-[12px] font-medium">10 Oct 2022</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4">
                            <div class="flex flex-col">
                                <strong class="text-white font-medium">Chapter 3</strong>
                                <span class="text-slate-100 text-[12px] font-medium">10 Oct 2022</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4">
                            <div class="flex flex-col">
                                <strong class="text-white font-medium">Chapter 4</strong>
                                <span class="text-slate-100 text-[12px] font-medium">10 Oct 2022</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4">
                            <div class="flex flex-col">
                                <strong class="text-slate-900 text-sm font-medium">Ray
                                    Flint</strong>
                                <span class="text-slate-500 text-sm font-medium">Technical
                                    Advisor</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4">
                            <div class="flex flex-col">
                                <strong class="text-slate-900 text-sm font-medium">Ray
                                    Flint</strong>
                                <span class="text-slate-500 text-sm font-medium">Technical
                                    Advisor</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4">
                            <div class="flex flex-col">
                                <strong class="text-slate-900 text-sm font-medium">Ray
                                    Flint</strong>
                                <span class="text-slate-500 text-sm font-medium">Technical
                                    Advisor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>