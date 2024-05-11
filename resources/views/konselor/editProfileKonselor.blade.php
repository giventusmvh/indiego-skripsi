<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('node_modules/leaflet/dist/leaflet.css')
  {{-- <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{ asset("style.css") }}">
  <link rel="stylesheet" href="{{ asset("mobile.css") }}">
   
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
              <a href="{{ route('homeKonselor') }}" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">Beranda<span class="block max-w-0 group-hover:max-w-full transition-all ease-in-out duration-500 h-[3px] bg-white"></span></a>
          </div>
        </li>
        <li>
          <div class="flex">
              <a href="{{ route('homeKonselor') }}" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">Cancelation Pending<span class="block max-w-0 group-hover:max-w-full transition-all ease-in-out duration-500 h-[3px] bg-white"></span></a>
          </div>
        </li>
        <li>
          <div class="flex">
              <a href="{{ route('homeKonselor') }}" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">Reschedule Pending<span class="block max-w-0 group-hover:max-w-full transition-all ease-in-out duration-500 h-[3px] bg-white"></span></a>
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

  <section class="md:max-w-[1200px] mx-auto w-[90%] mt-[120px] mb-[100px] flex flex-col justify-center items-center">
   

    
        <p class="font-bold mb-[20px]">Edit Profile Konselor</p>
        <form action="/konselor/updateprofileKonselor/{{ $konselor->id }}" method="POST" enctype="multipart/form-data"  class="md:w-[80%] w-[90%] mx-auto ">
          @csrf
                  @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <div class="mb-5">
                <label for="namaKonselor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Konselor</label>
                <input type="text" id="namaKonselor" name="namaKonselor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="{{ $konselor->namaKonselor }}" required />
            </div>
            {{-- <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Konselor</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="{{ $konselor->email }}" required />
            </div> --}}
            {{-- <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password Konselor</label>
                <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="{{ $konselor->password }}"  required />
            </div> --}}
            <div class="mb-5">
                <label for="telpKonselor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon Konselor</label>
                <input type="number" id="telpKonselor" name="telpKonselor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="{{ $konselor->telpKonselor }}"   required />
            </div>
             <div class="mb-5">
                <label for="alamatKonselor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Konselor</label>
                <input type="text" id="alamatKonselor" name="alamatKonselor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="{{ $konselor->alamatKonselor }}" required />
            </div>
            <div class="mb-5">    
              <label class="block mb-2 text-sm font-medium text-gray-900 " for="scanFotoKonselor">Upload Foto</label>
              <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none " name="scanFotoKonselor" id="scanFotoKonselor" type="file" value="{{ $konselor->scanFotoKonselor }}">
            </div>
            <textarea id="deskripsiKonselor" name="deskripsiKonselor" rows="4" class="block p-2.5 w-full mb-[12px] text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>{{ $konselor->deskripsiKonselor }}</textarea>
            <div class="mb-5">
                <label for="latitudeKonselor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Latitude Konselor</label>
                <input type="text" id="latitudeKonselor" name="latitudeKonselor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="{{ $konselor->latitudeKonselor }}"  required />
            </div>
            <div class="mb-5">
                <label for="longitudeKonselor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Longitude Konselor</label>
                <input type="text" id="longitudeKonselor" name="longitudeKonselor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="{{ $konselor->longitudeKonselor }}"  required />
            </div>
            <div id="map" style="width: 100%; height: 400px;" class="mb-[30px] z-0"></div>
            <button type="submit" class="w-full min-w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
       
           
       
       
  </section>
<div class="flex justify-center items-center max-w-[500px] max-h-[300px]">
  
</div>
  {{-- Footer Section Start  --}}
  <section id="footer">
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
  </section>
  {{-- Footer Section End --}}
  <script src="{{ asset('js/leaflet.js') }}"></script>
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
  
 
   <script>
      var map = L.map('map').setView([{{ $konselor->latitudeKonselor }}, {{ $konselor->longitudeKonselor }}], 13);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
    
      var marker = L.marker([{{ $konselor->latitudeKonselor }}, {{ $konselor->longitudeKonselor }}], { draggable: true }).addTo(map);
    
      marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        document.getElementById('latitudeKonselor').value = position.lat.toFixed(6);
        document.getElementById('longitudeKonselor').value = position.lng.toFixed(6);
      });
    </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="./app.js" type="module"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  
</body>

 

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