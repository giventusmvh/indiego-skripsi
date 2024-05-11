<!DOCTYPE html>
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
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 md:max-w-[1400px]">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <p class="text-white font-bold text-[20px]">Admin Page</p>
         
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
                <a href="{{route('homeAdmin')}}" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">Beranda<span class="block max-w-0 group-hover:max-w-full transition-all ease-in-out duration-500 h-[3px] bg-white"></span></a>
            </div>
          </li>
          <li>
            <div class="flex">
                <a href="{{route('indexAllBK')}}" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">List Transaksi<span class="block max-w-0 group-hover:max-w-full transition-all ease-in-out duration-500 h-[3px] bg-white"></span></a>
            </div>
          </li>
          <li>
            <div class="flex">
                <a href="{{route('indexAllMember')}}" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">List Member<span class="block max-w-0 group-hover:max-w-full transition-all ease-in-out duration-500 h-[3px] bg-white"></span></a>
            </div>
          </li>
          <li class="md:mb-0 mb-[10px]"">
            <div class="flex w-full" >
                <form class="w-full" method="POST" action="{{route('logoutAdmin')}}">
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
    

 <div class="md:max-w-[1400px] mx-auto w-[90%] mt-[120px] mb-[100px] flex flex-col md:flex-row justify-center gap-[30px]"> 

    <div id="menuCourse2" class="sticky top-[100px] flex flex-col gap-[20px] bg-white border border-slate-300 p-[20px] h-max shadow-lg md:w-[20%] z-10">
        <div class="flex justify-between items-center" data-collapse-toggle="filter-cta" aria-controls="filter-cta" aria-expanded="false">
            <h1 class="font-semibold text-[20px] text-[#404040]">Filters</h1>
            <button type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden">
                <span class="sr-only">Open main menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: black"><path d="M4 6h16v2H4zm4 5h12v2H8zm5 5h7v2h-7z"></path></svg>
              </button>
          </div>
          <div id="filter-cta" class="hidden md:flex md:flex-col">

            
           <form class="flex flex-col gap-[10px] mt-[20px]" action="{{route('homeAdmin')}}" method="GET">
            
            <input name="namaKonselor" type="search" id="default-search" class=" w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Cari Konselor"  />
          
            
            <p class="text-[20px]">Activation Status</p>
            <div class="flex items-center mb-4">
              <input id="activeStatus" type="radio" value="1" name="activeStatus" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="activeStatus" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Active</label>
          </div>
          <div class="flex items-center mb-4 ">
              <input id="activeStatus2" type="radio" value="0" name="activeStatus" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="activeStatus2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inactive</label>
          </div>

         
       

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Search</button>
           </form>
          </div>
       
    </div>

<div class="w-full relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Konselor
                </th>
                <th scope="col" class="px-6 py-3">
                    KTP
                </th>
                <th scope="col" class="px-6 py-3">
                    Sertifikasi
                </th>
                <th scope="col" class="px-6 py-3">
                    Foto
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($konselor as $k)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $k->namaKonselor }}
                </th>
                <td class="px-6 py-4">
                   
                    <a href="{{ asset("picture/ktpKonselor/{$k->scanKTPKonselor}") }}" target="_blank">View KTP</a>
                    
                </td>
                <td class="px-6 py-4">
                    
                    <a href="{{ asset("picture/sertifKonselor/{$k->scanSertifKonselor}") }}" target="_blank">View Sertifikasi</a>
                </td>
                <td class="px-6 py-4">
                   
                    <a href="{{ asset("picture/fotoKonselor/{$k->scanFotoKonselor}") }}" target="_blank">View Foto</a>
                </td>
                <td class="px-6 py-4">
                   
                    @if ($k->statusAktivasi == 0)
                    <p>Tidak Aktif</p>
                    @else
                    <p>Aktif</p>
                    @endif
                </td>
                <td class="px-6 py-4 flex ">
                    @if ($k->statusAktivasi == 0)
                    <form id="activateForm{{ $k->id }}" action="{{ route('activateKonselor', $k->id) }}" method="POST" onsubmit="return confirmActivate({{ $k->id }})">
                        @csrf
                        <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Aktivasi</button>
                    </form>
                    <form id="resetForm{{ $k->id }}" action="{{ route('resetKonselorPassword', $k->id) }}" method="POST" onsubmit="return confirmReset({{ $k->id }})">
                        @csrf
                        <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Reset Password</button>
                    </form>
                    @else
                    <form id="deactivateForm{{ $k->id }}" action="{{ route('activateKonselor', $k->id) }}" method="POST" onsubmit="return confirmDeactivate({{ $k->id }})">
                        @csrf
                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Deaktivasi</button>
                    </form>

                    <form id="resetForm{{ $k->id }}" action="{{ route('resetKonselorPassword', $k->id) }}" method="POST" onsubmit="return confirmReset({{ $k->id }})">
                        @csrf
                        <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Reset Password</button>
                    </form>
                    @endif
                   
                </td>
            </tr>
            @endforeach
            
            
        </tbody>
    </table>
</div>

 </div>
 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
 <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
 <script src="./app.js" type="module"></script>
 <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
 <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    function confirmActivate(id) {
        return confirm('Apakah Anda yakin ingin aktivasi konselor ini?');
    }
    function confirmDeactivate(id) {
        return confirm('Apakah Anda yakin ingin deaktivasi konselor ini?');
    }
    function confirmReset(id) {
        return confirm('Apakah Anda yakin ingin reset Password Konselor ini?');
    }
  </script>
</body>
</html>