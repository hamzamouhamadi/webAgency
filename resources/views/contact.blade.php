<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        theme: {
          extend: {
            colors: {
              laravel: '#ef3b2d',
            },
          },
        },
      }
  </script>
  <title>webAgency | Company service</title>
</head>

<body >
  <nav class="flex justify-between items-center mb-4 h-20  bg-gradient-to-r from-sky-500 to-indigo-500">
    <a href="/"><img class="w-16 w-40 h-40" src="{{asset('images/webAgency.png')}}" alt="" class="logo" /></a>
  {{-- <a href="/" class="w-24" class="logo" >WEBAGENCY.MAROC </a> --}}

  <ul class="flex space-x-6 mr-6 text-lg">
    @auth
    <li>
      <span class="font-bold uppercase">
        Welcome {{auth()->user()->name}}
      </span>
    </li>
    <li>
      <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Services</a>
    </li>
    <li>
      <form class="inline" method="POST" action="/logout">
        @csrf
        <button type="submit">
          <i class="fa-solid fa-door-closed"></i> Logout
        </button>
      </form>
    </li>
    @else
    <li>
        <a href="/" class="hover:text-gray-800"> Home </a>
      </li>
    <li>
      <a href="/listings/create" class="right-10 bg-black text-white py-2 px-5">Post Job</a>
    </li>
    <li>
      <a href="/About_us/about" class="hover:text-gray-800"> About Us </a>
    </li>

    <li>
        <a href="/contact" class="hover:text-gray-800">Contact Us</a>
      </li>
      <li>
      <a href="/register" class="hover:text-emerald-900"><i class="fa-solid fa-user-plus"></i> Register</a>
    </li>
    <li>
      <a href="/login" class="hover:text-emerald-900"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
    </li>
    @endauth
  </ul>
</nav>
  </nav>
  <br>
  <div class="max-w-4xl mx-auto mt-8">
    <h1 class="text-3xl font-bold mb-4">Nous contacter</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
        @endif
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Votre nom complet">
            @error('name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="email" placeholder="Votre adresse email">
            @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2 " for="message">
                Message
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="message" placeholder="Votre message"></textarea>
        </div>
        <div class="flex justify-end">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Envoyer
            </button>
        </div>
    </form>
</div>

 <br>
  <footer
    class=" bottom-0 left-0 w-full flex items-center justify-start font-bold bg-black text-white h-24 mt-24 opacity-90 md:justify-center">
    {{-- <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p> --}}

    <span class="text-sm text-gray-500 sm:text-left dark:text-gray-400">© 2023 <a href="https://webagency.ma/" class="hover:underline">WebAgency</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
    <li>
        <a href="/About_us/about" class="mr-4 hover:underline md:mr-6 pl-9 ">About</a>
    </li>
    <li>
        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
    </li>
    <li>
        <a href="/contact" class="hover:underline">Contact</a>
    </li>
    </ul>
</div>
  </footer>

  <x-flash-message />
</body>

</html>