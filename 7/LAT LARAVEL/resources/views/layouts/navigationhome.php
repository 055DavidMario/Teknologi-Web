<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
<!-- Primary Navigation Menu -->
<nav class="absolute top-0 z-50 flex flex-wrap items-center justify-between w-full px-2 py-3 ">
         <div class="container flex flex-wrap items-stretch justify-between px-4 mx-auto">
            <div class="relative flex justify-between w-full lg:w-auto lg:static lg:block lg:justify-start">
               <img class="lg:w-4/12 md:w-3/12 sm:w-7/12 min-[400px]:w-2/6 rounded-full" src="img/ATK.png" alt="ATK-Shop">
               <button
                  class="block px-3 py-1 text-xl leading-none bg-transparent border border-transparent border-solid rounded outline-none cursor-pointer lg:hidden focus:outline-none"
                  type="button" onclick="toggleNavbar('example-collapse-navbar')">
                  <i class="text-white fas fa-bars"></i>
               </button>
            </div>

            <div class="items-center flex-grow hidden bg-black lg:flex lg:bg-transparent lg:shadow-none"
               id="example-collapse-navbar">
               <ul class="flex flex-col list-none lg:flex-row lg:ml-auto">
                  <li class="flex items-center">
                     <a class="flex items-center px-3 py-4 text-xs font-bold text-gray-800 uppercase lg:text-black lg:hover:text-gray-300 lg:py-2"
                        href="#Home">Home</a>
                  </li>
                  <li class="flex items-center">
                     <a class="flex items-center px-3 py-4 text-xs font-bold text-gray-800 uppercase lg:text-black lg:hover:text-gray-300 lg:py-2"
                        href="#About">Belanja</a>
                  </li>
                  <li class="flex items-center">
                     <a class="flex items-center px-3 py-4 text-xs font-bold text-gray-800 uppercase lg:text-black lg:hover:text-gray-300 lg:py-2 rounded-2"
                        href="/keranjang">Keranjang</a>
                  </li>
                  <li class="flex items-center">
                     <a href="#Login"><button
                        class="px-4 py-2 mb-3 ml-3 text-xs font-bold text-gray-800 uppercase bg-white rounded shadow outline-none active:bg-gray-100 hover:shadow-md focus:outline-none lg:mr-1 lg:mb-0"
                        type="button" style="transition: all 0.15s ease 0s;" >
                        <i class="fa-solid fa-user"></i> Login
                     </button></a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
</nav>