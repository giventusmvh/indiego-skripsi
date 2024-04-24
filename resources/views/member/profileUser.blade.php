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
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
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
    <section class="md:max-w-[1200px]  flex flex-col md:flex-row  gap-[20px]">
      <div id="menuCourse2" class="sticky top-[100px] flex flex-col gap-[20px] bg-white border border-slate-300 p-[20px] h-max shadow-lg md:w-[30%]">
        <div class="flex justify-between items-center" data-collapse-toggle="filter-cta" aria-controls="filter-cta" aria-expanded="false">
            <h1 class="font-semibold text-[20px] text-[#404040]">Filters</h1>
            <button type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden">
              <span class="sr-only">Open main menu</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: black"><path d="M4 6h16v2H4zm4 5h12v2H8zm5 5h7v2h-7z"></path></svg>
            </button>
          </div>
          <div id="filter-cta" class="hidden md:flex md:flex-col">
            
           <form class="flex flex-col gap-[10px] mt-[20px]" action="{{route('indexAllJK')}}" method="GET">
            
            <input name="namaKonselor" type="search" id="default-search" class=" w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Cari Disini"  />
            <p class="text-[20px]">Tanggal</p>
            <input type="date" id="tanggal" name="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " placeholder="Masukkan Tanggal Konseling" />
            
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Search</button>
           </form>

           <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Cek Reschedule</button>
           <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Cek Cancel</button>
          </div>
       
    </div>


    <div class="flex flex-col  w-full gap-[15px]  ">
      @foreach ($historyBookings as $hb)
      <div class="flex flex-col  gap-[10px]  border border-slate-400 p-[20px] shadow-lg">
          <div class="flex flex-col  md:flex-row gap-[20px] w-full">
              {{-- <div class="w-auto">
                  <img src="{{ asset("picture/fotoKonselor/{$jk->scanFotoKonselor}") }}" alt="">
              </div> --}}
              
              
              <div>
                  <p>{{ $hb->namaKonselor }}</p>
                  <p>{{ $hb->tgl_konseling }}, {{ $hb->jam_konseling }} WIB</p>
                  <p>{{ $hb->topik_konseling }} | {{ $hb->tipe_konseling }} | Rp.200.000</p>
                  <p>Status Pembayaran : @if ($hb->isPaid === 1)
                      Lunas
                  @else
                      Menunggu Konfirmasi Pembayaran oleh Admin
                  @endif</p>

                  <p>Status Reschedule : @if ($hb->isConfirmed === 1)
                    Diterima
                @elseif ($hb->isRejected === 1)
                    Ditolak
                    @else
                    -
                @endif</p>
                  <p class="mt-[20px]">Deskripsi Singkat :</p>
                  <p class="flex text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem consequuntur veniam ipsum? Dolor possimus sit asperiores, eum natus minus recusandae facere. Itaque eum vel deserunt asperiores officia ea nam doloremque. Quasi tenetur quidem ex quo eum quaerat, obcaecati in debitis earum asperiores praesentium reprehenderit voluptatibus ipsa, fugiat perspiciatis, vel vero.</p>
                  
              </div>
              
          </div>              
          <a href="/home/addReschedule/{{ $hb->id }}" class="text-white text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Ajukan Reschedule</a>
      </div>
      @endforeach
     
      
     
    </div>
    </section>
        
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