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
      <a href="/listings/create" class="right-10 bg-black text-white py-2 px-5">Post Service</a>
    </li>
    <li>
      <a href="/About_us/about" class="hover:text-gray-800"> About Us </a>
    </li>
    <li>
      <a href="/contact" class="hover:text-gray-800"> Contact Us </a>
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

  <main>
    <p class="text-center font-Arial Black text-2xl py-8"> Agence Web et référencement à Casablanca Maroc </p>
    <div class="text-center">
        <p>
            Web Agency Maroc est une Agence Web et Référencement à Casablanca orientée web et offrant
            une large palette de services professionnels. Avec plus de 14 années d’expérience,
            l’agence de référencement Web Agency Maroc accompagne ses clients et leur propose de
            nouvelles idées alliant respect de l’environnement et dernières technologies. Notre Agence
            Web et Référencement à Casablanca a su bâtir une solide relation de confiance avec des entreprises
            de différents horizons.
        </p>
    </div>
    <p class="text-center font-Arial Black text-2xl py-8"> DOMAINES DE COMPÉTENCE DE NOTRE AGENCE WEB ET RÉFÉRENCEMENT À CASABLANCA WEB </p>
    <div class="text-center">
        <p>
            Web Agency Maroc est une Agence Web et Référencement à Casablanca orientée web et offrant
            une large palette de services professionnels. Avec plus de 14 années d’expérience,
            l’agence de référencement Web Agency Maroc accompagne ses clients et leur propose de
            nouvelles idées alliant respect de l’environnement et dernières technologies. Notre Agence
            Web et Référencement à Casablanca a su bâtir une solide relation de confiance avec des entreprises
            de différents horizons.
        </p>
    </div>
    <p class="text-center font-Arial Black text-2xl py-8"> UNE AGENCE WEB ET RÉFÉRENCEMENT À CASABLANCA AVEC 14 ANNÉES D’EXPÉRIENCE </p>
    <div class="text-center">
        <p>
            Web Agency Maroc est une Agence Web et Référencement à Casablanca orientée web et offrant
            une large palette de services professionnels. Avec plus de 14 années d’expérience,
            l’agence de référencement Web Agency Maroc accompagne ses clients et leur propose de
            nouvelles idées alliant respect de l’environnement et dernières technologies. Notre Agence
            Web et Référencement à Casablanca a su bâtir une solide relation de confiance avec des entreprises
            de différents horizons.
        </p>
    </div>
    <p class="text-center font-Arial Black text-2xl py-8"> AGENCE DE CONSEIL EN COMMUNICATION</p>
    <div class="text-center">
        <p>
            Web Agency Maroc est une Agence Web et Référencement à Casablanca orientée web et offrant
            une large palette de services professionnels. Avec plus de 14 années d’expérience,
            l’agence de référencement Web Agency Maroc accompagne ses clients et leur propose de
            nouvelles idées alliant respect de l’environnement et dernières technologies. Notre Agence
            Web et Référencement à Casablanca a su bâtir une solide relation de confiance avec des entreprises
            de différents horizons.
        </p>
    </div>
  </main>

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
