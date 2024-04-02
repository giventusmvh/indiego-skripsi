<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
      <link rel="stylesheet" href="{{ asset("style.css") }}">
    <link rel="stylesheet" href="{{ asset("mobile.css") }}">
    
  </head>
  <body class="py-[30px]" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url('/assets/konseling.jpeg'); background-size: cover">
    <div >
        <div class="flex md:max-w-[1200px] md:w-full w-[95%] mx-auto items-center justify-center">
          <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full md:min-w-[1200px] bg-white rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0 ">
              <div class="flex items-center justify-center mt-[20px] mb-[-30px]">
                <a href="#" class=""> <img src="assets/logoblack.png" class="h-[100px]" alt="" /> </a>
              </div>
  
              <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">Create your new counselor account</h1>
                <form action="{{ route('actionRegisterKonselor') }}" method="POST" enctype="multipart/form-data" class="  mx-auto flex flex-col justify-center items-center" ">
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
                  <div class="md:flex md:flex-row md:gap-[40px] w-full mb-[20px] flex flex-col gap-[20px]">
                    <div class="flex flex-col w-full gap-[20px]">
                    <div>
                      <label for="namaKonselor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                      <input
                        type="text"
                        name="namaKonselor"
                        id="namaKonselor"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Nama"
                        required=""
                      />
                    </div>
                    <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input
                        type="email"
                        name="email"
                        id="emailKonselor"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@company.com"
                        required=""
                      />
                    </div>
                    <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input
                        type="password"
                        name="password"
                        id="passwordKonselor"
                        placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="flex flex-col w-full gap-[20px]">
                    <div>
                      <label for="jkKonselor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                      <select id="jkKonselor" name="jkKonselor" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Masukan Jenis Kelamin</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                       
                      </select>
                    </div>
                
                
                    <div>
                      <label for="tgllahirKonselor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                      <input
                        type="date"
                        name="tgllahirKonselor"
                        id="tgllahirKonselor"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Nama"
                        required=""
                      />
                    </div>
                    <div>
                      <label for="telpKonselor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                      <input
                        type="number"
                        name="telpKonselor"
                        id="telpKonselor"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Nomor Telepon"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="flex flex-col w-full gap-[20px]">
                    <div>    
                      <label class="block mb-2 text-sm font-medium text-gray-900 " for="scanKTPKonselor">Upload KTP</label>
                      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none " name="scanKTPKonselor" id="scanKTPKonselor" type="file">
                    </div>
                    <div>    
                      <label class="block mb-2 text-sm font-medium text-gray-900 " for="scanSertifKonselor">Upload Sertifikasi</label>
                      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none " name="scanSertifKonselor" id="scanSertifKonselor" type="file">
                    </div>
                    <div>    
                      <label class="block mb-2 text-sm font-medium text-gray-900 " for="scanFotoKonselor">Upload Foto</label>
                      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none " name="scanFotoKonselor" id="scanFotoKonselor" type="file">
                    </div>
                  </div>
                </div>
                  <button
                    type="submit"
                    class="w-full text-white bg-black hover:bg-slate-300 hover:text-black transition duration-150 ease-in-out focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center "
                  >
                    Create an account
                  </button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400 mt-[30px] mb-[15px]">Already have a Counselor account? <a href="{{route('loginKonselor')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a></p>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">Register as <a href="{{route('register')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500"> Member? </a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="./app.js" type="module"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
   <!-- Swiper JS -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</html>
