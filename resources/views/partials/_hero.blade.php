<section class="relative h-[700px]  bg-gradient-to-r from-sky-500 to-indigo-500 flex flex-col justify-center align-center text-center space-y-10 mb-10">
  <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center "
    style="background-image: url('images/webAgency.png')"></div>

  <div class="z-10">
    <h1 class="text-7xl font-bold uppercase text-white">
      Web<span class="text-black">Agency</span>
    </h1>
    <p class="text-2xl text-gray-200 font-bold my-4">
      GET & POST SERVICES
    </p>
    <div>
      @auth
      @else
      <a href="/register"
        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign up For posting Services</a>
      @endauth
    </div>
  </div>
</section>
