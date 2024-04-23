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

  <section class="md:max-w-[1200px] mx-auto w-[90%] mt-[120px] mb-[100px] flex flex-col md:flex-row  gap-[20px]">
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
        <div id="menuCourse2" class="sticky top-[100px] flex flex-col gap-[20px] bg-white border border-slate-300 p-[20px] h-max shadow-lg md:w-[30%]">
            <div class="flex justify-between items-center" data-collapse-toggle="filter-cta" aria-controls="filter-cta" aria-expanded="false">
                <h1 class="font-semibold text-[20px] text-[#404040]">Filters</h1>
                <button type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden">
                  <span class="sr-only">Open main menu</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: black"><path d="M4 6h16v2H4zm4 5h12v2H8zm5 5h7v2h-7z"></path></svg>
                </button>
              </div>
              <div id="filter-cta" class="hidden md:flex md:flex-col">
                <a href="{{route('indexAllMap')}}" class="bg-white  w-full h-[60px] flex items-center justify-center p-[30px] shadow-md border-slate-300 border-[1px]">
                    <p>Open Map</p>
                </a>
                
               <form class="flex flex-col gap-[10px] mt-[20px]" action="{{route('indexAllJK')}}" method="GET">
                
                <input name="namaKonselor" type="search" id="default-search" class=" w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Cari Disini"  />
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
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Search</button>
               </form>
              </div>
           
        </div>

        <div class="flex flex-col  w-full gap-[15px]  ">
            @foreach ($jadwal_konseling as $jk)
            <div class="flex flex-col  gap-[10px]  border border-slate-400 p-[20px] shadow-lg">
                <div class="flex flex-col  md:flex-row gap-[20px] w-full">
                    <div class="max-w-[200px] h-auto">
                        <img src="{{ asset("picture/fotoKonselor/{$jk->scanFotoKonselor}") }}" alt="">
                    </div>
                    
                    
                    <div>
                        <p>{{ $jk->namaKonselor }}</p>
                        <p>{{ $jk->tgl_konseling }}, {{ $jk->jam_konseling }} WIB</p>
                        <p>{{ $jk->topik_konseling }} | {{ $jk->tipe_konseling }} | Rp.200.000</p>
                        <p class="mt-[20px]">Deskripsi Singkat :</p>
                        <p class="flex text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem consequuntur veniam ipsum? Dolor possimus sit asperiores, eum natus minus recusandae facere. Itaque eum vel deserunt asperiores officia ea nam doloremque. Quasi tenetur quidem ex quo eum quaerat, obcaecati in debitis earum asperiores praesentium reprehenderit voluptatibus ipsa, fugiat perspiciatis, vel vero.</p>
                    </div>
                </div>              
                <div class="flex flex-col w-full items-center justify-center">  
                    <a href="/home/bookingKonseling/{{ $jk->id }}" class="w-full text-center text-white py-[12px] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg ">Booking</a>
                </div> 
            </div>
            @endforeach
           
            
           
        </div>
            
  
         
    {{-- @foreach ($jadwal_konseling as $jk)
    <img src="{{ asset("picture/fotoKonselor/{$jk->scanFotoKonselor}") }}" alt="" >
    <p>{{ $jk->namaKonselor }}</p>
    <p>{{ $jk->tgl_konseling }}</p>
    <p>{{ $jk->jam_konseling }}</p>
    <p>{{ $jk->tipe_konseling }}</p>
    
   
        
    @endforeach --}}
    
   
        
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