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
    <title>Indiego</title>
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
      <a  href="/home" class="flex items-center space-x-3 rtl:space-x-reverse">
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
                <a href="/home" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">Home<span class="block max-w-0 group-hover:max-w-full transition-all ease-in-out duration-500 h-[3px] bg-white"></span></a>
            </div>
          </li>
          <li>
            <div class="flex">
                <a href="/home#artikel" class="block py-2 pl-3 pr-4 group transition duration-300 text-white font-[600]">Artikel<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] bg-white"></span></a>
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

  {{-- Hero Section Start --}}

        <div id="hero" class="swiper mySwiper md:h-[800px] h-[600px]">
          @if (session('error'))
    <div class="absolute z-20 mt-[100px] flex items-center justify-center  md:w-[100%] w-[90%]  mx-auto p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
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
    <div class="absolute z-20 mt-[100px] flex items-center justify-center  md:w-[100%] w-[90%] mx-auto p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium"> {{ session('success') }}</span>
      </div>
    </div>
    @endif
            <div class="swiper-wrapper">
            <div class="swiper-slide ">
                <div class="flex justify-center items-center  h-full" 
                style="
                    background: linear-gradient(43deg, rgba(24,24,24,0.7) 0%, rgba(24,24,24,0.7) 100%),
                    url('{{ asset('assets/banner5.jpg') }}') no-repeat;
                    background-size: cover;
                ">
                    <div class="flex flex-col md:w-[50%] items-center justify-center gap-[20px] md:pt-[110px] md:pb-[100px]">
                        <img src="{{ asset('assets/logowhite.png') }}" alt="" class="md:w-[400px] h-auto w-[60%]">
                        <p class="text-white font-[600] md:text-[32px]">Apa itu Indiego ?</p>
                        <p class="text-white items-center justify-center text-center md:text-[20px]" > 
                            Ruang untuk dapat lebih mengerti tentang gambaran diri, yang sering tidak kita sadari dikarenakan banyaknya distraksi serta ambisi diri yang membuat kita kurang memahami kebutuhan diri.
                        </p>
                        <a href="" class="text-black  bg-white rounded-[12px] px-[20px] py-[12px] font-[600]">Trial Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex justify-center items-center  h-full" 
                style="
                    background: linear-gradient(43deg, rgba(24,24,24,0.7) 0%, rgba(24,24,24,0.7) 100%),
                    url('{{ asset('assets/banner1.jpg') }}') no-repeat;
                    background-size: cover;
                ">
                    <div class="flex flex-col md:w-[50%] items-center justify-center gap-[20px] md:pt-[110px] md:pb-[100px]">
                        <img src="{{ asset('assets/logowhite.png') }}" alt="" class="md:w-[400px] h-auto w-[60%]">
                        <p class="text-white font-[600] md:text-[32px]">Konseling</p>
                        <p class="text-white items-center justify-center text-center md:text-[20px]" > 
                            Alur hidup yang dilalui oleh setiap individu akan menciptakan keunikan potensi. Memahami alam bawah sadar yang terbentuk oleh alur hidup akan dapat merubah negative behaviour dalam diri untuk menjadi potensi unik yang juga merupakan value diri.
                        </p>
                        <a href="" class="text-black  bg-white rounded-[12px] px-[20px] py-[12px] font-[600]">Trial Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex justify-center items-center  h-full" 
                style="
                    background: linear-gradient(43deg, rgba(24,24,24,0.7) 0%, rgba(24,24,24,0.7) 100%),
                    url('{{ asset('assets/banner2.jpg') }}') no-repeat;
                    background-size: cover;
                ">
                    <div class="flex flex-col md:w-[50%] items-center justify-center gap-[20px] md:pt-[110px] md:pb-[100px]">
                        <img src="{{ asset('assets/logowhite.png') }}" alt="" class="md:w-[400px] h-auto w-[60%]">
                        <p class="text-white font-[600] md:text-[32px]">Tumbuh Kembang Anak</p>
                        <p class="text-white items-center justify-center text-center md:text-[20px]" > 
                            Buah hati bagaikan bayangan dari pantulan cermin disekitarnya Sudahkah kita memahami Mengenali jenis cermin yang mereka gunakan akan dapat mengerti bagaimana wujud bayangan yang dihasilkan.
                        </p>
                        <a href="" class="text-black  bg-white rounded-[12px] px-[20px] py-[12px] font-[600]">Trial Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex justify-center items-center  h-full" 
                style="
                    background: linear-gradient(43deg, rgba(24,24,24,0.7) 0%, rgba(24,24,24,0.7) 100%),
                    url('{{ asset('assets/banner3.jpg') }}') no-repeat;
                    background-size: cover;
                ">
                    <div class="flex flex-col md:w-[50%] items-center justify-center gap-[20px] md:pt-[110px] md:pb-[100px]">
                        <img src="{{ asset('assets/logowhite.png') }}" alt="" class="md:w-[400px] h-auto w-[60%]">
                        <p class="text-white font-[600] md:text-[32px]">HRD</p>
                        <p class="text-white items-center justify-center text-center md:text-[20px]" > 
                            Ilmu mengenai psikologi saat ini sangat mudah untuk diakses, sehingga banyak calon Apakah perusahaanmu salah satu yang pernah terkecoh? Tertarik mencoba dengan metode sixsence? Analisis berdasarkan sixsence merupakan keahlian kami dalam rekrutmen maupun pengembangan human resource.
                        </p>
                        <a href="" class="text-black  bg-white rounded-[12px] px-[20px] py-[12px] font-[600]">Trial Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex justify-center items-center  h-full" 
                style="
                    background: linear-gradient(43deg, rgba(24,24,24,0.7) 0%, rgba(24,24,24,0.7) 100%),
                    url('{{ asset('assets/banner4.jpg') }}') no-repeat;
                    background-size: cover;
                ">
                    <div class="flex flex-col md:w-[50%] items-center justify-center gap-[20px] md:pt-[110px] md:pb-[100px]">
                        <img src="{{ asset('assets/logowhite.png') }}" alt="" class="md:w-[400px] h-auto w-[60%]">
                        <p class="text-white font-[600] md:text-[32px]">Property Consultant</p>
                        <p class="text-white items-center justify-center text-center md:text-[20px]" > 
                            Beberapa Agama dan budaya mengajarkan hal mengenai properti berhati - hati dalam memiliki properti sebagai aset diri karena bisa jadi properti yang kita akan miliki berenergi negatif Ubah keberuntungan bisa melalui properti, tertarik?
                        </p>
                        <a href="" class="text-black  bg-white rounded-[12px] px-[20px] py-[12px] font-[600]">Trial Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
            
            </div>
            <div class="swiper-pagination"></div>
        </div>
  {{-- Hero Section End --}}

  {{-- Artikel Section Start --}}
  <section id="artikel" class="md:max-w-[1200px] mx-auto w-[90%] scroll-mt-[90px]">
    <div class="container">
      <div class="row my-[30px]">
        <h3 class="md:text-[32px] font-[600]">Artikel Kami</h3>
        <hr>
      </div>
      <div style="--swiper-navigation-color: #ffffff; --swiper-pagination-color: #fff" class="swiper thumbSwiper2">
        <div class="swiper-wrapper">
          @foreach ($artikels as $artikel)
          <div class="swiper-slide" style="background-image: linear-gradient(43deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%),url('/images/{{ $artikel->image }}');">
            
            <div class="caption-swiper  bottom-0">
              <h3 class="font-[600] md:text-[32px] text-[18px]">{{ $artikel->judul }}</h3>
              <p class="md:h-[80px] h-[60px] overflow-hidden text-justify">{{ $artikel->narasi }}</p>
            </div>
          </div>
          @endforeach
          
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <div thumbsSlider="" class="swiper galeriSwiper" style="margin-top: -9px">
        <div class="swiper-wrapper">
          @foreach ($artikels as $artikel)
          <div class="swiper-slide">
            <img src="/images/{{ $artikel->image }}">
          </div>
          @endforeach
          {{-- <div class="swiper-slide">
            <img src="assets/dampaktoxic.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="assets/tentanganxiety.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="assets/strategitoxic.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="assets/toxicparentsmonster.jpg" />
          </div> --}}
        </div>
      </div>
    </div>
  </section>
  {{-- Artikel Section End --}}

 
  {{-- Testimoni Section Start --}}
  <div id="testimoni" class="bg-[#212529] my-[60px] scroll-mt-[90px]">
    <div class="md:w-full md:max-w-[1200px] w-[90%] mx-auto">
      

        <div id="indicators-carousel" class="relative w-full" data-carousel="static">
          <!-- Carousel wrapper -->
          <div class="relative h-[700px] overflow-hidden rounded-lg md:h-[450px] ">
              <!-- Item 1 -->
              <div class="hidden duration-700 ease-in-out md:pt-[60px] md:px-[30px] pt-[40px] px-[20px]" data-carousel-item="active">
                 <div class="flex flex-col md:flex-row gap-[20px] mx-auto items-center justify-center md:items-start">
                  <img src="assets/Vika.jpg" alt="" class="w-[200px] h-auto md:w-[300px]">
                    <div class="flex flex-col w-full gap-[30px]">
                        <div class="flex flex-col gap-[5px]">
                          <p class="text-white md:text-[23px] text-[18px] font-[600]">Vika Martin, <span class="text-[16px]">30th</span></p>
                          <hr>
                          <p class="text-white md:text-[18px] text-[14px] italic">Entrepreneur</p>
                        </div>
                        <div class="flex flex-col gap-[5px]">
                          <p class="text-white md:text-[20px] text-[16px] font-[500] italic md:mb-[15px]">Apa kata Vika tentang kami?</p>
                          
                          <p class="text-white md:text-[18px] text-[16px] italic text-justify">”Bingung banget punya anak 2 deketan usia dg segala dramanya tapi sulit nemu solusi tiap masalahnya. takut salah treatment ke anak, karena setiap anak itu berbeda. enak sama diego ga perlu cerita. tinggal pasang muka dia dah beberin semua hal yg kita bahkan ga sadar. thanks mas. u become a solution.”</p>
                        </div>
                    </div>
                 </div>
              </div>
              <!-- Item 2 -->
              <div class="hidden duration-700 ease-in-out md:pt-[60px] md:px-[30px] pt-[40px] px-[20px]" data-carousel-item>
                <div class="flex flex-col md:flex-row gap-[20px] mx-auto items-center justify-center md:items-start">
                  <img src="assets/Dean.jpg" alt="" class="w-[200px] h-auto md:w-[300px]">
                    <div class="flex flex-col w-full gap-[30px]">
                        <div class="flex flex-col gap-[5px]">
                          <p class="text-white md:text-[23px] text-[18px] font-[600]">Dean, <span class="text-[16px]">36th</span></p>
                          <hr>
                          <p class="text-white md:text-[18px] text-[14px] italic">Architect</p>
                        </div>
                        <div class="flex flex-col gap-[5px]">
                          <p class="text-white md:text-[20px] text-[16px] font-[500] italic md:mb-[15px]">Apa kata Dean tentang kami?</p>
                          
                          <p class="text-white md:text-[18px] text-[13px] italic text-justify"> ”I consult with indiego about many things, ranging from projects, family, friendships, even finances. The counseling is very helpful in making decisions, even though the sharing method is unique to me. We tell a little story and they immediately respond with real time character sketches, what kind of face are we "presenting" which is our condition at that time that will be examined. For those who are curious, please try it, you will be surprised with a "how come he knows" respond and they will hel to find a solution. Good luck for "indiego" through "cerita diego".”</p>
                        </div>
                    </div>
                 </div>
              </div>
              <!-- Item 3 -->
              <div class="hidden duration-700 ease-in-out md:pt-[60px] md:px-[30px] pt-[40px] px-[20px]" data-carousel-item>
                <div class="flex flex-col md:flex-row gap-[20px] mx-auto items-center justify-center md:items-start">
                  <img src="assets/Dienar.jpg" alt="" class="w-[200px] h-auto md:w-[300px]">
                    <div class="flex flex-col w-full gap-[30px]">
                        <div class="flex flex-col gap-[5px]">
                          <p class="text-white md:text-[23px] text-[18px] font-[600]">Dienar, <span class="text-[16px]">30th</span></p>
                          <hr>
                          <p class="text-white md:text-[18px] text-[14px] italic">Entrepreneur</p>
                        </div>
                        <div class="flex flex-col gap-[5px]">
                          <p class="text-white md:text-[20px] text-[16px] font-[500] italic md:mb-[15px]">Apa kata Dienar tentang kami?</p>
                          
                          <p class="text-white md:text-[18px] text-[13px] italic text-justify">  ”Konseling sama Indiego itu enak banget, konseling tapi rasanya kaya curhat ke temen. Pendengar yg sangat baik, solving problem nya tidak menggurui, saran yang diberikan praktikal semua, bukan cuma sekedar teori yg bikin kita bingung harus mulai dari mana. Rasanya nyaman, karena tidak ada judgement, pendekatannya sesuai dengan karakter kita. Dan gak terburu-buru. Selalu menguatkan, bahwa ini semua adalah proses.”</p>
                        </div>
                    </div>
                 </div>
              </div>
              <!-- Item 4 -->
              <div class="hidden duration-700 ease-in-out md:pt-[60px] md:px-[30px] pt-[40px] px-[20px]" data-carousel-item>
                <div class="flex flex-col md:flex-row gap-[20px] mx-auto items-center justify-center md:items-start">
                  <img src="assets/Dhiana.jpg" alt="" class="w-[200px] h-auto md:w-[300px]">
                    <div class="flex flex-col w-full gap-[30px]">
                        <div class="flex flex-col gap-[5px]">
                          <p class="text-white md:text-[23px] text-[18px] font-[600]">Dhiana, <span class="text-[16px]">40th</span></p>
                          <hr>
                          <p class="text-white md:text-[18px] text-[14px] italic">HR & GA manager</p>
                        </div>
                        <div class="flex flex-col gap-[5px]">
                          <p class="text-white md:text-[20px] text-[16px] font-[500] italic md:mb-[15px]">Apa kata Dhiana tentang kami?</p>
                          
                          <p class="text-white md:text-[18px] text-[16px] italic text-justify"> ”I’m amazed, they can define our personal strengths and weaknesses from facial sketches. So it's easier to develop and focus on the abilities that we have, the gifts from God. Great talent..😃👍👌”  </p>
                        </div>
                    </div>
                 </div>
              </div>
              <!-- Item 5 -->
              <div class="hidden duration-700 ease-in-out  md:pt-[60px] md:px-[30px] pt-[40px] px-[20px]" data-carousel-item>
                <div class="flex flex-col md:flex-row gap-[20px] mx-auto items-center justify-center md:items-start">
                  <img src="assets/Ophie.jpg" alt="" class="w-[200px] h-auto md:w-[300px]">
                    <div class="flex flex-col w-full gap-[30px]">
                        <div class="flex flex-col gap-[5px]">
                          <p class="text-white md:text-[23px] text-[18px] font-[600]">Oghie, <span class="text-[16px]">33th</span></p>
                          <hr>
                          <p class="text-white md:text-[18px] text-[14px] italic">Construction Business Owner</p>
                        </div>
                        <div class="flex flex-col gap-[5px]">
                          <p class="text-white md:text-[20px] text-[16px] font-[500] italic md:mb-[15px]">Apa kata Oghie tentang kami?</p>
                          
                          <p class="text-white md:text-[18px] text-[13px] italic text-justify">"Sebagai owner ada aja hal teknis yang sebenernya gampang tapi sulit ditentukan. Jadi kami punya peluang untuk mengisi jabatan strategis malah bimbang untuk milih siapa yang pas pada posisi tersebut. Alhamdulillah ketemu juga solusinya biar gak puyeng karena pasti ada efeknya jika menempatkan orang yang mungkin pas tapi hasilnya zonk. Makasih loh udah di filter karyawan ku. Jadi gak bimbang naro orang lg ini."  </p>
                        </div>
                    </div>
                 </div>
              </div>
               <!-- Item 6 -->
               <div class="hidden duration-700 ease-in-out  md:pt-[60px] md:px-[30px] pt-[40px] px-[20px]" data-carousel-item>
                <div class="flex flex-col md:flex-row gap-[20px] mx-auto items-center justify-center md:items-start">
                  <img src="assets/Wira.jpg" alt="" class="w-[200px] h-auto md:w-[300px]">
                    <div class="flex flex-col w-full gap-[30px]">
                        <div class="flex flex-col gap-[5px]">
                          <p class="text-white md:text-[23px] text-[18px] font-[600]">Wira, <span class="text-[16px]">25th</span></p>
                          <hr>
                          <p class="text-white md:text-[18px] text-[14px] italic">Public university staff</p>
                        </div>
                        <div class="flex flex-col gap-[5px]">
                          <p class="text-white md:text-[20px] text-[16px] font-[500] italic md:mb-[15px]">Apa kata Wira tentang kami?</p>
                          
                          <p class="text-white md:text-[18px] text-[15px] italic text-justify">"As a person who’s currently entering my 20’s, I have to know myself more and discover my best potential. With Diego, I can evolve to a better version of myself. With their sketch, I’m constantly reminded of who I was at that point and what traits of me that can be developed more to reach my best potential. This helps me to achieve more in life as I grow to be the best version of me. Thank you, Diego."</p>
                        </div>
                    </div>
                 </div>
              </div>
          </div>
          <!-- Slider indicators -->
          <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
              <button type="button" class="w-[32px] h-[0.8px] " aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
              <button type="button" class="w-[32px] h-[0.8px] " aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
              <button type="button" class="w-[32px] h-[0.8px] " aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
              <button type="button" class="w-[32px] h-[0.8px] " aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
              <button type="button" class="w-[32px] h-[0.8px] " aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
              <button type="button" class="w-[32px] h-[0.8px] " aria-current="false" aria-label="Slide 6" data-carousel-slide-to="5"></button>
          </div>
          <!-- Slider controls -->
          <button type="button" class="absolute top-[-180px]  md:top-0 start-0 md:start-[-30px] z-30 flex items-center justify-center h-full px-4  cursor-pointer group focus:outline-none" data-carousel-prev>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full ">
                  <svg class="w-4 h-[30px] text-white  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M5 1 1 5l4 4"/>
                  </svg>
                  <span class="sr-only">Previous</span>
              </span>
          </button>
          <button type="button" class="absolute top-[-180px]  md:top-0 end-0 md:end-[-30px] z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full ">
                  <svg class="w-4 h-[30px] text-white  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="sr-only">Next</span>
              </span>
          </button>
        </div>

    </div>
  </div>
  {{-- Testimoni Section End --}}


   {{-- Galeri Section Start  --}}
   <section id="galeri" class="scroll-mt-[90px]">
        <div class="container flex flex-col gap-[15px] w-[90%] mx-auto md:w-full">
            <h3 class="text-black font-[700] text-[30px]">Galeri Indiego</h3>
            <p class="text-black font-[400] text-[20px] md:text-center text-justify" >Setiap individu memiliki alur cerita yang unik, dan menarik untuk disimak.
    Galery ini merupakan kumpulan hasil konseling beberapa Sahabat Diego dengan menggunakan metode sixsence yang kemudian diilustrasikan sebagai gambaran diri mereka. Dengan menampilkan beberapa ilustrasi tersebut, berharap kita bisa mengambil pembelajaran dari perjalanannya.</p>
            <hr>
        </div>
          <div class="img-galeri">
            <a href="#img1">
              <img src="assets/galeri1.jpg" alt="">
            </a>
            <a href="#img2">
              <img src="assets/galeri2.jpg" alt="">
            </a>
            <a href="#img3">
              <img src="assets/galeri3.jpg" alt="">
            </a>
            <a href="#img4">
              <img src="assets/galeri4.jpg" alt="">
            </a>
            <a href="#img5">
              <img src="assets/galeri5.jpg" alt="">
            </a>
            <a href="#img6">
              <img src="assets/galeri6.jpg" alt="">
            </a>
            <a href="#img7">
              <img src="assets/galeri7.jpg" alt="">
            </a>
            <a href="#img8">
              <img src="assets/galeri8.jpg" alt="">
            </a>
            <a href="#img9">
              <img src="assets/galeri9.jpg" alt="">
            </a>
            <a href="#img10">
              <img src="assets/galeri10.jpg" alt="">
            </a>
            <a href="#img11">
              <img src="assets/galeri11.jpg" alt="">
            </a>
            <a href="#img12">
              <img src="assets/galeri12.jpg" alt="">
            </a>
            <a href="#img13">
              <img src="assets/galeri13.jpg" alt="">
            </a>
            <a href="#img14">
              <img src="assets/galeri14.jpg" alt="">
            </a>
          </div>
        
          <a href="#galeri" class="lightbox" id="img1" style="text-decoration: none;">
            <div class="lightbox-content">
                <span style="background-image: url('assets/galeri1.jpg')"></span>
                <div class="galery-content">
                  <ul>
                    <li>
                      Berbeda bukan semata berkeinginan menjadi tontonan
                    </li>
                    <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
                    <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
                  </ul>
                </div>
                {{-- <p>Galeri Indiego.</p> --}}
            </div>
        </a>
        <a href="#galeri" class="lightbox" id="img2" style="text-decoration: none;">
          <div class="lightbox-content">
              <span style="background-image: url('assets/galeri2.jpg')"></span>
              <div class="galery-content">
                <ul>
                  <li>
                    Berbeda bukan semata berkeinginan menjadi tontonan
                  </li>
                  <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
                  <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
                </ul>
              </div>
                {{-- <p>Galeri Indiego.</p> --}}
          </div>
      </a>
      <a href="#galeri" class="lightbox" id="img3" style="text-decoration: none;">
        <div class="lightbox-content">
            <span style="background-image: url('assets/galeri3.jpg')"></span>
          <div class="galery-content">
          <ul>
            <li>
              Berbeda bukan semata berkeinginan menjadi tontonan
            </li>
            <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
            <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
          </ul>
        </div>
                {{-- <p>Galeri Indiego.</p> --}}
        </div>
    </a>
    <a href="#galeri" class="lightbox" id="img4" style="text-decoration: none;">
      <div class="lightbox-content">
          <span style="background-image: url('assets/galeri4.jpg')"></span>
        <div class="galery-content">
          <ul>
            <li>
              Berbeda bukan semata berkeinginan menjadi tontonan
            </li>
            <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
            <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
          </ul>
        </div>
                {{-- <p>Galeri Indiego.</p> --}}
      </div>
    </a>
    <a href="#galeri" class="lightbox" id="img5" style="text-decoration: none;">
    <div class="lightbox-content">
        <span style="background-image: url('assets/galeri5.jpg')"></span>
      <div class="galery-content">
          <ul>
            <li>
              Berbeda bukan semata berkeinginan menjadi tontonan
            </li>
            <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
            <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
          </ul>
        </div>
                {{-- <p>Galeri Indiego.</p> --}}
    </div>
    </a>
    <a href="#galeri" class="lightbox" id="img6" style="text-decoration: none;">
    <div class="lightbox-content">
        <span style="background-image: url('assets/galeri6.jpg')"></span>
      <div class="galery-content">
          <ul>
            <li>
              Berbeda bukan semata berkeinginan menjadi tontonan
            </li>
            <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
            <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
          </ul>
        </div>
                {{-- <p>Galeri Indiego.</p> --}}
    </div>
    </a>
    <a href="#galeri" class="lightbox" id="img7" style="text-decoration: none;">
    <div class="lightbox-content">
        <span style="background-image: url('assets/galeri7.jpg')"></span>
        <div class="galery-content">
          <ul>
            <li>
              Berbeda bukan semata berkeinginan menjadi tontonan
            </li>
            <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
            <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
          </ul>
        </div>
              
                {{-- <p>Galeri Indiego.</p> --}}
    </div>
    </a>
    <a href="#galeri" class="lightbox" id="img8" style="text-decoration: none;">
    <div class="lightbox-content">
        <span style="background-image: url('assets/galeri8.jpg')"></span>
        <div class="galery-content">
          <ul>
            <li>
              Berbeda bukan semata berkeinginan menjadi tontonan
            </li>
            <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
            <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
          </ul>
        </div>
                {{-- <p>Galeri Indiego.</p> --}}
    </div>
    </a>
    <a href="#galeri" class="lightbox" id="img9" style="text-decoration: none;">
    <div class="lightbox-content">
        <span style="background-image: url('assets/galeri9.jpg')"></span>
        <div class="galery-content">
          <ul>
            <li>
              Berbeda bukan semata berkeinginan menjadi tontonan
            </li>
            <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
            <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
          </ul>
        </div>
                {{-- <p>Galeri Indiego.</p> --}}
    </div>
    </a>
    <a href="#galeri" class="lightbox" id="img10" style="text-decoration: none;">
    <div class="lightbox-content">
        <span style="background-image: url('assets/galeri10.jpg')"></span>
        <div class="galery-content">
          <ul>
            <li>
              Berbeda bukan semata berkeinginan menjadi tontonan
            </li>
            <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
            <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
          </ul>
        </div>
                {{-- <p>Galeri Indiego.</p> --}}
    </div>
    </a>
    <a href="#galeri" class="lightbox" id="img11" style="text-decoration: none;">
    <div class="lightbox-content">
        <span style="background-image: url('assets/galeri11.jpg')"></span>
        <div class="galery-content">
          <ul>
            <li>
              Berbeda bukan semata berkeinginan menjadi tontonan
            </li>
            <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
            <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
          </ul>
        </div>
                {{-- <p>Galeri Indiego.</p> --}}
    </div>
    </a>
    <a href="#galeri" class="lightbox" id="img12" style="text-decoration: none;">
    <div class="lightbox-content">
        <span style="background-image: url('assets/galeri12.jpg')"></span>
        <div class="galery-content">
          <ul>
            <li>
              Berbeda bukan semata berkeinginan menjadi tontonan
            </li>
            <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
            <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
          </ul>
        </div>
                {{-- <p>Galeri Indiego.</p> --}}
    </div>
    </a>
    <a href="#galeri" class="lightbox" id="img13" style="text-decoration: none;">
    <div class="lightbox-content">
        <span style="background-image: url('assets/galeri13.jpg')"></span>
        <div class="galery-content">
          <ul>
            <li>
              Berbeda bukan semata berkeinginan menjadi tontonan
            </li>
            <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
            <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
          </ul>
        </div>
                {{-- <p>Galeri Indiego.</p> --}}
    </div>
    </a>
    <a href="#galeri" class="lightbox" id="img14" style="text-decoration: none;">
    <div class="lightbox-content">
        <span style="background-image: url('assets/galeri14.jpg')"></span>
        <div class="galery-content">
          <ul>
            <li>
              Berbeda bukan semata berkeinginan menjadi tontonan
            </li>
            <li>Namun mencoba untuk menjadi inspirasi sekitar</li>
            <li>Siapa tau ini awal kebaikan untuk kalian yang berpikiran terbuka</li>
          </ul>
        </div>
                {{-- <p>Galeri Indiego.</p> --}}
    </div>
    </a>
  </section>
  {{-- Galeri Section End --}}

  {{-- Paket Section Start --}}
  <section id="paket" class="scroll-mt-[90px]">
    <div class="md:w-full w-[90%] md:max-w-[1200px] mx-auto flex flex-col my-[60px]">
      <div class="flex flex-col w-full  my-[15px]">
        <p class="md:text-[32px] text-[24px] font-[600]">Paket Kami</p>
        <hr>
      </div>

      {{-- Paket 1 --}}
      <div class="flex flex-col md:flex-row mb-[30px]">
        <div class=" w-full h-[220px] md:h-[550px]   md:w-[30%] md:rounded-tl-[15px] md:rounded-bl-[15px] rounded-tl-[15px] rounded-tr-[15px] md:rounded-tr-[0px] grid place-content-center " style="background-image: linear-gradient(43deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%),url('/assets/konseling.jpeg'); background-size:cover; background-repeat:no-repeat">
            <p class="relative text-white  text-[30px] font-[700]">Konseling</p>
        </div>
        <div class="bg-[#212529] md:w-[70%] flex flex-col text-white md:rounded-tr-[15px] md:rounded-br-[15px] md:rounded-bl-[0px] rounded-tr-[0px] rounded-bl-[15px] rounded-br-[15px] p-[20px] gap-[20px]" >
         <p class="text-[16px] md:text-[20px] font-[600] leading-[180%] text-justify">“ Dalam pengembangan diri kita perlu permasalahan dan kebutuhan dasar. Cara untuk memperolehnya, Indiego akan melakukan ”</p>
         <div class="flex flex-col md:flex-row md:gap-[70px] gap-[30px] text-[20px] font-[400] p-[20px]">
          <ul class="list-disc flex flex-col gap-[15px] text-[16px]">
            <li>Sketsa ilustrasi karakter keadaan diri</li>
            <li>Lukisan karakter keadaan diri</li>
            <li>Konsultasi daring/ luring
                <ul class="list-decimal ml-[30px] flex flex-col gap-[15px] mt-[15px]">
                    <li>konseling pasangan</li>
                    <li>konseling keluarga</li>
                    <li>konsultasi karir</li>
                    <li>pengembangan diri</li>
                    <li>kesehatan mental</li>
                </ul>
            </li>
          </ul>
          <ul class="list-disc flex flex-col gap-[15px]  text-[16px]">
            <li>Pelatihan terapi mandiri</li>
            <li>Afirmasi positif</li>
            <li>Terapi energi positif</li>
            <li>Monitoring daring</li>
            <li>Purifikasi energi negatif</li>
          </ul>
         </div>
         <div class="flex flex-col md:flex-row gap-[20px] md:justify-end">
          <a href="" class="text-white border-[3px] border-white rounded-full px-[20px] py-[12px] font-[600] w-full md:w-[20%] text-center items-center">Konsultasi</a>
          <a href="" class="text-black border-[3px] border-white bg-white rounded-full px-[20px] py-[12px] font-[600] w-full md:w-[20%] text-center items-center">Order</a>
         </div>
        </div>
      </div>
      {{-- Paket 2 --}}
      <div class="flex flex-col md:flex-row mb-[30px]">
        <div class=" w-full h-[220px] md:h-[550px]   md:w-[30%] md:rounded-tl-[15px] md:rounded-bl-[15px] rounded-tl-[15px] rounded-tr-[15px] md:rounded-tr-[0px] grid place-content-center " style="background-image: linear-gradient(43deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%),url('/assets/hrdpaket.jpg'); background-size:cover; background-repeat:no-repeat">
            <p class="relative text-white  text-[30px] font-[700]">HRD</p>
        </div>
        <div class="bg-[#212529] md:w-[70%] flex flex-col text-white md:rounded-tr-[15px] md:rounded-br-[15px] md:rounded-bl-[0px] rounded-tr-[0px] rounded-bl-[15px] rounded-br-[15px] p-[20px] gap-[20px]" >
         <p class="text-[16px] md:text-[20px] font-[600] leading-[180%] text-justify">“ Karyawan pintar belum bisa mengembangkan perusahaan, namun menempatkan Karyawan yang tepat memberi dampak yang besar ”</p>
         <div class="flex flex-col md:flex-row md:gap-[70px] gap-[30px] text-[20px] font-[400] p-[20px]">
          <ul class="list-disc flex flex-col gap-[15px] text-[16px]">
            <li>Sketsa ilustrasi karakter keadaan diri</li>
            <li>Lukisan karakter keadaan diri</li>
            <li>Konsultasi daring/ luring
                <ul class="list-decimal ml-[30px] flex flex-col gap-[15px] mt-[15px]">
                    <li>konseling pasangan</li>
                    <li>konseling keluarga</li>
                    <li>konsultasi karir</li>
                    <li>pengembangan diri</li>
                    <li>kesehatan mental</li>
                </ul>
            </li>
          </ul>
          <ul class="list-disc flex flex-col gap-[15px]  text-[16px]">
            <li>Pelatihan terapi mandiri</li>
            <li>Afirmasi positif</li>
            <li>Terapi energi positif</li>
            <li>Monitoring daring</li>
            <li>Purifikasi energi negatif</li>
          </ul>
         </div>
         <div class="flex flex-col md:flex-row gap-[20px] md:justify-end">
          <a href="" class="text-white border-[3px] border-white rounded-full px-[20px] py-[12px] font-[600] w-full md:w-[20%] text-center items-center">Konsultasi</a>
          <a href="" class="text-black border-[3px] border-white bg-white rounded-full px-[20px] py-[12px] font-[600] w-full md:w-[20%] text-center items-center">Order</a>
         </div>
        </div>
      </div>
      {{-- Paket 3 --}}
      <div class="flex flex-col md:flex-row mb-[30px]">
        <div class=" w-full h-[220px] md:h-[550px]   md:w-[30%] md:rounded-tl-[15px] md:rounded-bl-[15px] rounded-tl-[15px] rounded-tr-[15px] md:rounded-tr-[0px] grid place-content-center " style="background-image: linear-gradient(43deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%),url('/assets/tumbuhkembang.jpg'); background-size:cover; background-repeat:no-repeat">
            <p class="relative text-white  text-[30px] font-[700]">Tumbuh Kembang Anak</p>
        </div>
        <div class="bg-[#212529] md:w-[70%] flex flex-col text-white md:rounded-tr-[15px] md:rounded-br-[15px] md:rounded-bl-[0px] rounded-tr-[0px] rounded-bl-[15px] rounded-br-[15px] p-[20px] gap-[20px]" >
         <p class="text-[16px] md:text-[20px] font-[600] leading-[180%] text-justify">“ Tumbuh kembang anak sangat dipengaruhi perasaannya, sayangnya anak belum mampu menceritakannya ”</p>
         <div class="flex flex-col md:flex-row md:gap-[70px] gap-[30px] text-[20px] font-[400] p-[20px]">
          <ul class="list-disc flex flex-col gap-[15px] text-[16px]">
            <li>Sketsa ilustrasi karakter keadaan diri</li>
            <li>Lukisan karakter keadaan diri</li>
            <li>Konsultasi daring/ luring
                <ul class="list-decimal ml-[30px] flex flex-col gap-[15px] mt-[15px]">
                    <li>konseling pasangan</li>
                    <li>konseling keluarga</li>
                    <li>konsultasi karir</li>
                    <li>pengembangan diri</li>
                    <li>kesehatan mental</li>
                </ul>
            </li>
          </ul>
          <ul class="list-disc flex flex-col gap-[15px]  text-[16px]">
            <li>Pelatihan terapi mandiri</li>
            <li>Afirmasi positif</li>
            <li>Terapi energi positif</li>
            <li>Monitoring daring</li>
            <li>Purifikasi energi negatif</li>
          </ul>
         </div>
         <div class="flex flex-col md:flex-row gap-[20px] md:justify-end">
          <a href="" class="text-white border-[3px] border-white rounded-full px-[20px] py-[12px] font-[600] w-full md:w-[20%] text-center items-center">Konsultasi</a>
          <a href="" class="text-black border-[3px] border-white bg-white rounded-full px-[20px] py-[12px] font-[600] w-full md:w-[20%] text-center items-center">Order</a>
         </div>
        </div>
      </div>
      {{-- Paket 4 --}}
      <div class="flex flex-col md:flex-row mb-[30px]">
        <div class=" w-full h-[220px] md:h-[550px]   md:w-[30%] md:rounded-tl-[15px] md:rounded-bl-[15px] rounded-tl-[15px] rounded-tr-[15px] md:rounded-tr-[0px] grid place-content-center " style="background-image: linear-gradient(43deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%),url('/assets/properti.jpg'); background-size:cover; background-repeat:no-repeat">
            <p class="relative text-white  text-[30px] font-[700]">Konsultasi Properti</p>
        </div>
        <div class="bg-[#212529] md:w-[70%] flex flex-col text-white md:rounded-tr-[15px] md:rounded-br-[15px] md:rounded-bl-[0px] rounded-tr-[0px] rounded-bl-[15px] rounded-br-[15px] p-[20px] gap-[20px]" >
         <p class="text-[16px] md:text-[20px] font-[600] leading-[180%] text-justify">“ Pencarian dan pengoptimalan energi positif properti merupakan goals Dari konsultasi properti, dengan melakukan tahapan ”</p>
         <div class="flex flex-col md:flex-row md:gap-[70px] gap-[30px] text-[20px] font-[400] p-[20px]">
          <ul class="list-disc flex flex-col gap-[15px] text-[16px]">
            <li>Sketsa ilustrasi karakter keadaan diri</li>
            <li>Lukisan karakter keadaan diri</li>
            <li>Konsultasi daring/ luring
                <ul class="list-decimal ml-[30px] flex flex-col gap-[15px] mt-[15px]">
                    <li>konseling pasangan</li>
                    <li>konseling keluarga</li>
                    <li>konsultasi karir</li>
                    <li>pengembangan diri</li>
                    <li>kesehatan mental</li>
                </ul>
            </li>
          </ul>
          <ul class="list-disc flex flex-col gap-[15px]  text-[16px]">
            <li>Pelatihan terapi mandiri</li>
            <li>Afirmasi positif</li>
            <li>Terapi energi positif</li>
            <li>Monitoring daring</li>
            <li>Purifikasi energi negatif</li>
          </ul>
         </div>
         <div class="flex flex-col md:flex-row gap-[20px] md:justify-end">
          <a href="" class="text-white border-[3px] border-white rounded-full px-[20px] py-[12px] font-[600] w-full md:w-[20%] text-center items-center">Konsultasi</a>
          <a href="" class="text-black border-[3px] border-white bg-white rounded-full px-[20px] py-[12px] font-[600] w-full md:w-[20%] text-center items-center">Order</a>
         </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Paket Section End --}}

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
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 0,
    centeredSlides: true,
    speed: 2000,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    });
    
  </script>

  <script>
  var swiper = new Swiper(".galeriSwiper", {
  loop: true,
  spaceBetween: 1,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".thumbSwiper2", {
  loop: true,
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});
  </script>

 <script>
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
</script>
</html>