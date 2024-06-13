<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
      <link rel="stylesheet" href="{{ asset("style.css") }}">
    <link rel="stylesheet" href="{{ asset("mobile.css") }}">
    <title>Home Konselor</title>
</head>
<body>
 

<!-- NavBar Start -->

<div class="fixed bottom-8 right-8 z-50">
  <a href="https://api.whatsapp.com/send?phone=08112958568" target="_blank" class="flex flex-row gap-[3px] justify-center items-center bg-emerald-600 rounded-[50px] p-[10px] text-white">
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
      <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
      </svg>
      <p>Admin</p>
  </a>
</div>
<nav id="navbar" class=" border-gray-200 fixed w-full z-50 top-0 left-0 h-max bg-[#242424]">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 md:max-w-[1200px]">
    <a href="/konselor" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('assets/logowhite.png') }}" class="h-8 md:h-[60px]" alt="Flowbite Logo" />
       
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border bg-black/70 md:bg-transparent  rounded-lg  md:flex-row md:space-x-4 rtl:space-x-reverse md:mt-0 md:border-0  ">
        <li>
          <div class="flex">
              <a href="{{ route('homeKonselor') }}" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">Beranda<span class="block max-w-0 group-hover:max-w-full transition-all ease-in-out duration-500 h-[3px] bg-white"></span></a>
          </div>
        </li>
        <li>
          <div class="flex">
              <a href="{{ route('indexKonselorCancel') }}" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">Cancelation Pending<span class="block max-w-0 group-hover:max-w-full transition-all ease-in-out duration-500 h-[3px] bg-white"></span></a>
          </div>
        </li>
        <li>
          <div class="flex">
              <a href="{{ route('indexKonselorRes') }}" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">Reschedule Pending<span class="block max-w-0 group-hover:max-w-full transition-all ease-in-out duration-500 h-[3px] bg-white"></span></a>
          </div>
        </li>
        <li class="md:mb-0 mb-[10px]">
          <div class="flex">
              <a href="{{route('profileKonselor')}}" class="text-black text-center  bg-white rounded-[30px] px-[20px] py-[12px] font-[600] w-full">Profile<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] bg-white"></span></a>
          </div>
        </li>
        <li class="md:mb-0 mb-[10px]"">
          <div class="flex w-full" >
              <form class="w-full" method="POST" action="{{route('logoutKonselor')}}">
                  @csrf
                  <button type="submit" class="text-black text-center  bg-white rounded-[30px] px-[20px] py-[12px] font-[600] w-full">Logout<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] bg-white"></span></button>
              </form>
             
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- NavBar End -->

  <section class="md:max-w-[1200px] mx-auto w-[90%] mt-[120px] mb-[100px]">
    @if (session('error'))
    <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">{{ session('error') }}</span>
      </div>
    </div>
    @endif
    @if (session('success'))
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium"> {{ session('success') }}</span>
      </div>
    </div>
    @endif
    <div class="flex md:flex-row flex-col md:gap-[50px]">
      <div id="menuCourse2" class="sticky top-[100px] mb-[20px] flex flex-col gap-[20px] bg-white border border-slate-300 p-[20px] h-max shadow-lg md:w-[30%]">
        <a href="{{route('indexAddJK')}}" class="bg-white  w-full h-[60px] flex items-center justify-center p-[30px] shadow-md border-slate-300 border-[1px]">
          <p>Add Schedule</p>
      </a>
        <div class="flex justify-between items-center" data-collapse-toggle="filter-cta" aria-controls="filter-cta" aria-expanded="false">
            <h1 class="font-semibold text-[20px] text-[#404040]">Filters</h1>
            <button type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden">
              <span class="sr-only">Open main menu</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: black"><path d="M4 6h16v2H4zm4 5h12v2H8zm5 5h7v2h-7z"></path></svg>
            </button>
          </div>
          <div id="filter-cta" class="hidden md:flex md:flex-col">
           <form class="flex flex-col gap-[10px] mt-[20px]" action="{{route('homeKonselor')}}" method="GET">
            
           
            <p class="text-[20px]">Tanggal</p>
            <input type="date" id="tanggal" name="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " placeholder="Masukkan Tanggal Konseling" />
            <p class="text-[20px]">Topic</p>
            <div class="flex items-center mb-4 gap-[10px]">
                <input id="default-checkbox" name="topik1" type="checkbox" value="Konseling Mental Health" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mental Health</label>
            </div>
            <div class="flex items-center mb-4 gap-[10px]">
                <input id="default-checkbox2" name="topik2" type="checkbox" value="Konseling Tumbuh Kembang Anak" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Parenting</label>
            </div>
            <div class="flex items-center mb-4 gap-[10px]">
                <input id="default-checkbox3" name="topik3" type="checkbox" value="Konseling HRD" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">HRD</label>
            </div>
            <div class="flex items-center mb-4 gap-[10px]">
                <input id="default-checkbox4" name="topik4" type="checkbox" value="Konseling Property" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Property</label>
            </div>

            <p class="text-[20px]">Tipe</p>
            <div class="flex items-center mb-4 gap-[10px]">
                <input id="default-checkbox5" name="tipe1" type="checkbox" value="Online" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Online</label>
            </div>
            <div class="flex items-center mb-4 gap-[10px]">
                <input id="default-checkbox6" name="tipe2" type="checkbox" value="Offline" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Offline</label>
            </div>

            <p class="text-[20px]">Booking Status</p>
            <div class="flex items-center mb-4">
              <input id="bookingStatus" type="radio" value="1" name="bookingStatus" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="bookingStatus" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sedang Dibooking</label>
          </div>
          <div class="flex items-center mb-4 ">
              <input id="bookingStatus2" type="radio" value="0" name="bookingStatus" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="bookingStatus2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak Sedang Dibookng</label>
          </div>
            <p class="text-[20px]">Payment Status</p>
            <div class="flex items-center mb-4">
              <input id="paymentStatus" type="radio" value="1" name="paymentStatus" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="paymentStatus" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lunas</label>
          </div>
          <div class="flex items-center mb-4 ">
              <input id="paymentStatus2" type="radio" value="0" name="paymentStatus" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="paymentStatus2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Belum Lunas</label>
          </div>
      
          <p class="text-[20px]">Completed Status</p>
          <div class="flex items-center mb-4 ">
            <input id="completeStatus" type="radio" value="1" name="completeStatus" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="completeStatus" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Selesai</label>
          </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Search</button>
           </form>
          </div>
       
      </div>
        <div class="flex flex-col w-full gap-[30px]">
          @foreach ($jadwalKonselings as $jk)
          <div class=" bg-white w-full  flex  p-[30px] shadow-md border-slate-400 border-[1px] flex-col">
            <p>Tanggal : {{ $jk->tgl_konseling }}</p>
            <p>Jam : {{ $jk->jam_konseling }}</p>
            <p>Topik Konseling : {{ $jk->topik_konseling }}</p>
            <p>Tipe Konseling : {{ $jk->tipe_konseling }}</p>
            <p>Harga Konseling : {{ $jk->harga_konseling }}</p>
            @if ($jk->isBooked && !$jk->isDone)
            <p>Status : Sedang Dibooking oleh {{ $jk->nama }} | <a href="https://api.whatsapp.com/send?phone={{ $jk->telp }}" target="_blank" class="underline underline-offset-4 text-emerald-700">Hubungi</a></p>
            @elseif ($jk->isBooked && $jk->isDone)
            <p>Status : Telah diselesaikan oleh {{ $jk->nama }}</p>
            @elseif (!$jk->isBooked && !$jk->isDone)
            <p>Status : Belum Dibooking</p>
            
            @endif
            @if ($jk->isPaid)
            <p>Status Pembayaran : Lunas</p>
            @else
            <p>Status Pembayaran : Belum lunas</p>
            @endif

            @if ($jk->isConfirmed)
            <p>Reschedule : {{ $jk->tgl_ganti}} , {{ $jk->jam_ganti }}</p>
            @else
            <p>Reschedule : NaN</p>
            @endif
            

            <div class="mt-[30px] flex items-end justify-end">
                <a href="/konselor/editJadwalKonseling/{{ $jk->id }}"  class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</a>
                <form id="deleteForm{{ $jk->id }}" action="{{ route('actionDeleteJK', $jk->id) }}" method="POST" onsubmit="return confirmDelete({{ $jk->id }})">
                  @csrf
                  <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
              </form>
            </div>
        </div>
          @endforeach

          @if ($jadwalKonselings->hasPages())
            <div class="flex items-center justify-end">
                {{-- Previous Page Link --}}
                @if ($jadwalKonselings->onFirstPage())
                    <span class="rounded-l rounded-sm border border-brand-light px-3 py-2 cursor-not-allowed no-underline">&laquo;</span>
                @else
                    <a
                        class="rounded-l rounded-sm border-t border-b border-l border-brand-light px-3 py-2 text-brand-dark hover:bg-brand-light no-underline"
                        href="{{ $jadwalKonselings->previousPageUrl() }}"
                        rel="prev"
                    >
                        &laquo;
                    </a>
                @endif
        
                {{-- Pagination Elements --}}
                @foreach ($jadwalKonselings as $jk)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($jk))
                        <span class="border-t border-b border-l border-brand-light px-3 py-2 cursor-not-allowed no-underline">{{ $jk }}</span>
                    @endif
        
                    {{-- Array Of Links --}}
                    @if (is_array($jk))
                        @foreach ($jk as $page => $url)
                            @if ($page == $jadwalKonselings->currentPage())
                                <span class="border-t border-b border-l border-brand-light px-3 py-2 bg-brand-light no-underline">{{ $page }}</span>
                            @else
                                <a class="border-t border-b border-l border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline" href="{{ $url }}">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
        
                {{-- Next Page Link --}}
                @if ($jadwalKonselings->hasMorePages())
                    <a class="rounded-r rounded-sm border border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline" href="{{ $jadwalKonselings->nextPageUrl() }}" rel="next">&raquo;</a>
                @else
                    <span class="rounded-r rounded-sm border border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline cursor-not-allowed">&raquo;</span>
                @endif
            </div>
        @endif

        </div>
    </div>
  </section>

  

  {{-- Footer Section Start  --}}
  <Section id="footer">
    <div class=" bg-[#242424]">
      <div class="w-[90%] md:w-full md:max-w-[1200px] flex flex-col md:flex-row md:justify-between mx-auto p-[30px] justify-center items-center md:items-start">

      
      <div class="flex flex-col text-white text-center md:text-justify">
        <p class="text-white font-[600] text-[20px]">Indiego.id</p>
        <p class="text-gray-400 font-[600] text-[20px] mb-[20px] md:mt-[20px]">Alamat Perusahaan</p>
        <img src="assets/logowhite.png" alt="" class="w-[80%] h-auto mx-auto">
      </div>
      <div class="flex flex-col text-white text-center mb-[30px] md:mb-0 md:text-justify"">
        <p class="text-white font-[600] text-[20px]">Whatsapp Business</p>
        <p class="text-gray-400 font-[600] text-[20px] md:mt-[20px] mb-[20px]">Hubungi kami via WhatsApp dan booking jadwal konsultasimu sekarang!</p>
        <a href="" class="text-white border md:mt-[40px] border-[#11ff00] bg-[#11ff00] rounded-full px-[20px] py-[12px] font-[600] w-full md:w-[50%]  text-center items-center">Hubungi Kami</a>
      </div>
      <div class="flex flex-col text-white gap-[15px]">
        <p class="text-white font-[600] text-[20px]">Media Sosial :</p>
        <a href=""><div class="flex flex-row items-center gap-[10px]"><img src="assets/ig.png" alt="" class="w-auto h-6"> Instagram</div></a>
        <a href=""><div class="flex flex-row items-center gap-[10px]"><img src="assets/fb.png" alt="" class="w-auto h-6"> Facebook</div></a>
        <a href=""><div class="flex flex-row items-center gap-[10px]"><img src="assets/email.png" alt="" class="w-auto h-6"> Email</div></a>
      </div>
    </div>
    </div>
  </Section>
  {{-- Footer Section End --}}

  
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="./app.js" type="module"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 
 <script>
  function confirmDelete(id) {
      return confirm('Apakah Anda yakin ingin menghapus data ini?');
  }
</script>
 {{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        var navbar = document.querySelector("nav");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 0) {
                navbar.classList.add("bg-[#242424]", "transition-all", "duration-400", "ease-in-out");
                navbar.classList.remove("bg-transparent");
            } else {
                navbar.classList.remove("bg-[#242424]");
                navbar.classList.add("bg-transparent", "transition-all", "duration-400", "ease-in-out");
            }
        });
    });
</script> --}}
</html>