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
    <link rel="stylesheet" href="{{ mix('css/leaflet.css') }}">
<script src="{{ mix('js/leaflet.js') }}"></script>
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
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
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
              <a href="#hero" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">Home<span class="block max-w-0 group-hover:max-w-full transition-all ease-in-out duration-500 h-[3px] bg-white"></span></a>
          </div>
        </li>
        <li>
          <div class="flex">
              <a href="#artikel" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">Artikel<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] bg-white"></span></a>
          </div>
        </li>
        <li>
          <div class="flex">
              <a href="{{route('indexAllJK')}}" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">Counselor<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] bg-white"></span></a>
          </div>
        </li>
       
        <li class="md:mb-0 mb-[10px]">
          <div class="flex">
              <a href="{{route('profileUser')}}" class="text-black text-center  bg-white rounded-[30px] px-[20px] py-[12px] font-[600] w-full">Profile<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] bg-white"></span></a>
          </div>
        </li>
        <li class="md:mb-0 mb-[10px]"">
          <div class="flex w-full" >
              <form class="w-full" method="POST" action="{{route('logoutUser')}}">
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

  <section class="md:max-w-[1200px] mx-auto w-[90%] mt-[120px] mb-[100px] flex flex-col justify-center items-center">
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
    {{-- <div class="w-full flex md:flex-row flex-col gap-[20px]">
        <div class="flex flex-col md:w-[30%] items-center justify-center gap-[20px]">
          <a href="">
            <img src="{{ asset("picture/fotoUser/{$user->scanFoto}") }}" class="max-w-[200px] h-auto" alt="" >
          </a>
            
            <p class="text-[25px] font-bold">{{ $user->nama }}</p>
            <a href="/home/editprofileUser/{{ $user->id }}" class="w-full flex justify-center items-center bg-slate-900 text-white rounded-[16px] p-[12px]">Edit Profile</a>
            <div class="flex flex-row w-full gap-[10px]">
              <a href="/home/editpasswordUser/{{ $user->id }}" class="w-full flex justify-center items-center bg-slate-900 text-white rounded-[16px] p-[12px]">Change Password</a>
            </div>
        </div>
        <div class="flex flex-col md:w-[70%] gap-[20px]">
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  " value="{{ $user->telp }}" readonly>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  " value="{{ $user->tgllahir }}" readonly >
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  " value="{{ $user->jkUser }}" readonly>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  " value="{{ $user->alamat }}" readonly>
           
           <a href="https://maps.google.com/?q={{ $user->latitudeUser }},{{ $user->longitudeUser }}" target="_blank">Check Location on Google Maps</a>
            
           
        </div>
    </div> --}}
    <section class="mt-[40px] w-[100%] flex flex-col gap-5 p-[12px] rounded-[20px] bg-white" style="box-shadow: 4px 4px 24px 0px rgba(24, 124, 255, 0.12)">
      <div class="flex lg:flex-row flex-col gap-3">
        <div class="w-full flex lg:flex-row flex-col gap-[40px] justify-center items-center md:items-start md:justify-start">
          <div class="md:h-[244px] md:w-[244px] w-[320px] h-[300px] rounded-[20px]" style="background: url('{{ asset("picture/fotoUser/{$user->scanFoto}") }}'); background-size: cover; background-repeat: no-repeat; background-position: center"></div>
          <div class="flex flex-col md:flex-row">
            <div class="flex flex-col gap-[20px]">
              <p class="md:text-[24px] font-[500] text-[24px]">{{ $user->nama }}</p>
              <div class="flex flex-row gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: scaleX(-1);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4.7-8 5.334L4 8.7V6.297l8 5.333 8-5.333V8.7z"></path></svg>
                {{ $user->email }}
              </div>
              <div class="flex flex-row gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z"></path></svg>
                {{ $user->telp }}
              </div>
              <div class="flex flex-row gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"></path><path d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"></path></svg>
                {{ $user->tgllahir }}
              </div>
              <div class="flex flex-row gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 15c-1.84 0-2-.86-2-1H8c0 .92.66 2.55 3 2.92V18h2v-1.08c2-.34 3-1.63 3-2.92 0-1.12-.52-3-4-3-2 0-2-.63-2-1s.7-1 2-1 1.39.64 1.4 1h2A3 3 0 0 0 13 7.12V6h-2v1.09C9 7.42 8 8.71 8 10c0 1.12.52 3 4 3 2 0 2 .68 2 1s-.62 1-2 1z"></path><path d="M5 2H2v2h2v17a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4h2V2H5zm13 18H6V4h12z"></path></svg>
                {{ $user->creditPoint }}
              </div>
              <div class="flex flex-row gap-3 hover:bg-slate-200 rounded-md p-3 border border-slate-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: scaleX(-1);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);"><path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path></svg>
                <a href="https://maps.google.com/?q={{ $user->latitudeUser }},{{ $user->longitudeUser }}" target="_blank">Check Location on Google Maps</a>
              </div>
              
            </div>
           
          </div>
        </div>
     
      </div>
      <div class="flex flex-col md:flex-row gap-[20px]">
        <a href="/home/editprofileUser/{{ $user->id }}" class="w-full flex justify-center items-center bg-slate-900 text-white rounded-[16px] p-[12px]">Edit Profile</a>
        <div class="flex flex-row w-full gap-[10px]">
          <a href="/home/editpasswordUser/{{ $user->id }}" class="w-full flex justify-center items-center bg-slate-900 text-white rounded-[16px] p-[12px]">Change Password</a>
        </div>
      </div>
     
    </section>
    <hr class="w-full h-px my-8 bg-gray-600 border-[1px]">
      <p class="text-[24px] font-bold mb-[30px]">History Bookings</p>
   
    <div class="md:w-[1200px] w-full  flex flex-col md:flex-row  gap-[20px]">
      <div id="menuCourse2" class="sticky top-[100px] flex flex-col gap-[20px] bg-white border border-slate-300 p-[20px] h-max shadow-lg md:w-[30%]">
        <div class="flex justify-between items-center" data-collapse-toggle="filter-cta" aria-controls="filter-cta" aria-expanded="false">
            <h1 class="font-semibold text-[20px] text-[#404040]">Filters</h1>
            <button type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden">
              <span class="sr-only">Open main menu</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: black"><path d="M4 6h16v2H4zm4 5h12v2H8zm5 5h7v2h-7z"></path></svg>
            </button>
          </div>
          <div id="filter-cta" class="hidden md:flex md:flex-col">
            
           <form class="flex flex-col gap-[10px] mt-[20px]" action="{{route('profileUser')}}" method="GET">
            
            <input name="namaKonselor" type="search" id="default-search" class=" w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Cari Konselor Disini"  />
            <p class="text-[20px]">Tanggal</p>
            <input type="date" id="tanggal" name="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " placeholder="Masukkan Tanggal Konseling" />
            
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Search</button>
           </form>
          </div>
       
    </div>


    <div class="flex flex-col  w-full gap-[15px]  ">
   @if (count($historyBookings) > 0)
   @foreach ($historyBookings as $hb)
   <div class="flex flex-col  gap-[10px]  border border-slate-400 p-[20px] shadow-lg">
       <div class="flex flex-col   md:flex-row gap-[20px] w-full">
           {{-- <div class="w-auto">
               <img src="{{ asset("picture/fotoKonselor/{$jk->scanFotoKonselor}") }}" alt="">
           </div> --}}

           
           
           
           <div class="w-full flex flex-col justify-center items-center md:justify-start md:items-start">
           <div class="flex flex-col md:flex-row w-full gap-[20px] md:items-start">
            <div class="md:h-[220px] md:w-[344px] w-[300px] h-[300px] rounded-[20px]" style="background: url('{{ asset("picture/fotoKonselor/{$hb->scanFotoKonselor}") }}'); background-size: cover; background-repeat: no-repeat; background-position: center"></div>
            <div class="flex flex-col  w-full mb-[12px] justify-center gap-[12px]">
              <div class="flex flex-col w-full md:flex-row md:justify-between justify-center">
              <p class="text-[24px] font-bold text-center md:text-start">{{ $hb->namaKonselor }}</p>
              <div class="flex justify-center">
                <p>
                  @if ($hb->isPaid === 1)
                  <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Pembayaran Lunas</span>
                 @elseif ($hb->isCancelConfirmed == 1 && $hb->isPaid == 0)
                 <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Batal</span>
                 @else
                 <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Dalam Proses Konfirmasi</span>  
                 @endif
                </p>
                
              </div>
            </div>
              <div class="flex flex-col md:flex-row gap-[12px] justify-center md:justify-between md:items-end items-center">
                <div class="flex flex-col gap-[12px] w-max justify-center items-center md:justify-start md:items-start">
                  <span class=" text-slate-800 text-[14px] font-medium inline-flex items-center">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                    </svg>
                    {{ $hb->tgl_konseling }}, {{ $hb->jam_konseling }} WIB
                    </span>
                    <div class="flex flex-col md:flex-row gap-[12px]">
                      <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $hb->topik_konseling }} </span>
                      <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $hb->tipe_konseling }}</span>
                      <span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{ $hb->harga_konseling }}</span>
                    </div>
                </div>
  
                <div>
                  <p>@if ($hb->isConfirmed === 1)
                    <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Reschedule Diterima | {{ $hb->tgl_ganti }},{{ $hb->jam_ganti }}</span>
                   @elseif ($hb->isRejected === 1)
                   <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Reschedule Ditolak | {{ $hb->tgl_ganti }},{{ $hb->jam_ganti }}</span>
                    @elseif ($hb->isConfirmed === 0 && $hb->isRejected === 0)
                    Reschedule Ongoing | {{ $hb->tgl_ganti }},{{ $hb->jam_ganti }}
                    @else
                    
                @endif
               </p>
                <p class="md:mt-[-10px]">@if ($hb->isCancelConfirmed === 1)
                  <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Pembatalan Diterima</span>
              @elseif ($hb->isCancelRejected === 1)
              <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Pembatalan Ditolak</span>
                  @elseif ($hb->isCancelConfirmed === 0 && $hb->isCancelRejected === 0)
                  Pembatalan Ongoing
                  @else
                  
              @endif</p>
                </div>
              </div>
            </div>
            
          </div>
           
               
            <p class="mt-[20px]">Deskripsi Singkat :</p>
            <p class="flex text-justify">{{ $hb->deskripsiKonselor }}</p>
        

               
              
           </div>
           
       </div>    
       <div class="flex flex-col md:flex-row w-full"> 
      

        @if ($hb->isCancelConfirmed === 1 || $hb->isDone==1)
        <button class=" w-full text-white text-center bg-slate-700  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" disabled>-</button>
        <button class=" w-full text-white text-center bg-slate-700  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" disabled>-</button>
        <a href="https://api.whatsapp.com/send?phone={{ $hb->telpKonselor }}" target="_blank" class=" w-full text-white text-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Hubungi Konselor</a>
        <a href="/home/DetailKonselor/{{ $hb->idKonselor }}" target="_blank" class=" w-full text-white text-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Cek Konselor</a>
        @else
        <a href="/home/addReschedule/{{ $hb->idBooking }}" class=" w-full text-white text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Ajukan Reschedule</a>
        <form class="w-full me-2" id="addCancel{{ $hb->idBooking }}" action="{{ route('addCancellation', $hb->idBooking) }}" method="POST" onsubmit="return addCancel({{ $hb->idBooking }})">
          @csrf
          <button type="submit" class="w-full text-white text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Ajukan Cancel</button>
          
      </form>
      <a href="https://api.whatsapp.com/send?phone={{ $hb->telpKonselor }}" target="_blank" class=" w-full text-white text-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Hubungi Konselor</a>
      <a href="/home/DetailKonselor/{{ $hb->idKonselor }}" target="_blank" class=" w-full text-white text-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Cek Konselor</a>
        @endif       
         
       </div> 
       @if ($hb->isCancelConfirmed === 1)
       <button type="submit" class=" w-full text-white text-center bg-slate-700  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" disabled>Batal</button>
       @else
        @if (strtotime($hb->tgl_konseling) < strtotime('today') && $hb->isDone==0)
        <form class="w-full me-2" id="addDone{{ $hb->idBooking }}" action="{{ route('konselingDone', $hb->idBooking) }}" method="POST" onsubmit="return addDone({{ $hb->idBooking }})">
          @csrf
          <button type="submit" class=" w-full text-white text-center bg-blue-700  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Selesaikan Konseling</button>
          
      </form>
      @elseif (strtotime($hb->tgl_konseling) < strtotime('today') && $hb->isDone==1)
      <button type="submit" class=" w-full text-white text-center bg-slate-700  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" disabled>Selesai</button>
        @endif
       @endif
   </div>
   @endforeach
  
   @else
   <div class="flex flex-col w-full  gap-[10px]  border border-slate-400 p-[20px] shadow-lg">
    <div class="flex flex-col  md:flex-row gap-[20px] w-full">
        <p>Not Found</p>
        
    </div>    
   
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
        <img src="{{ asset('assets/logowhite.png') }}" alt="" class="w-[80%] h-auto mx-auto">
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
  
  function addCancel(id) {
      return confirm('Apakah Anda yakin ingin mengajukan pembatalan?');
  }
  function addDone(id) {
      return confirm('Apakah Anda yakin ingin menyelesaikan konseling?');
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