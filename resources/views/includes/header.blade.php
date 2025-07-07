<head>
    <script src="https://kit.fontawesome.com/b2d7d488f2.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

</head>
<div>


<nav class="bg-white/30 backdrop-blur-xl text-black px-6 py-4 sticky top-5 shadow-md w-[70%] mx-auto rounded-md mt-5">
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    <div class="flex items-center space-x-10">
      <h1 class="text-2xl font-bold "><span class=" text-[#10B981]">Habit</span>.</h1>
      <ul class="flex space-x-6">
        <li><a href="/" class="hover:text-[#10B981]">Home</a></li>
        <li><a href="habits" class="hover:text-[#10B981]">My habits</a></li>
        <li><a href="#" class="hover:text-[#10B981]">About</a></li>
      </ul>
    </div>

    <div class="flex items-center">
          <div class="relative">
            <button class="cursor-pointer">
              <i class="fa-solid fa-bell text-lg"></i>
            </button>
            <span class="absolute top-0 right-0 h-2 w-2 bg-[#10B981] rounded-full"></span>
          </div>

      <button class="hover:text-[#10B981]">
        <i class="fa-solid fa-gear ml-[15px]"></i>      
      </button>
      <a href="{{ route('profile.edit') }}">
        <span class=" ml-3 text-[#10B981] font-bold">{{ Auth::user()->name ?? 'Guest' }}<span class=" text-black font-bold">.</span></span>
      </a>
      <!-- <div class="bg-black w-[32px] h-[32px] rounded-full ml-[15px] "></div> -->

    </div>
  </div>
</nav>

