{{-- resources/views/welcome.blade.php --}}
<title>Dashboard | Habit.</title>
<x-app-layout>

    {{-- Main content area --}}
    <main class="flex-grow mb-[200px]">
        <section class="text-center py-12">
            <h1 class="font-bold text-8xl mb-6">Welcome to <span class="text-[#10B981]">Habit</span>.</h1>
            <span class="text-3xl">Keep track of your daily habits.</span>

            <!-- Card with animated text -->
            <div class="bg-white w-[520px] h-[70px] mx-auto rounded-md shadow-xl mt-[80px] pl-5 flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-[32px] h-[32px] border-gray-400 border-dashed border-2 rounded-full 
                                hover:bg-[#10B981] hover:border-none hover:text-white text-gray-400 
                                flex items-center justify-center cursor-pointer">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <span id="typingText" class="ml-3 text-gray-600 whitespace-nowrap font-bold"></span>
                </div>
                <div class="text-gray-300 cursor-grab h-full flex border-gray-200 border-l items-center justify-center w-[15%] ml-1">
                    <i class="fa-solid fa-grip-vertical"></i>        
                </div>
            </div>

            <!-- Icons below -->
            <div class="flex justify-center mt-12">
                <ul class="flex space-x-20">
                    <li class="text-center">
                        <div class="bg-white h-[264px] w-[264px] rounded-full flex items-center justify-center text-9xl mb-5 shadow-xl">
                            🌱
                        </div>
                        <span class="font-bold text-2xl">Create</span>
                        <p>Create a list with your habits!</p>
                    </li>
                    <li class="text-center">
                        <div class="bg-white h-[264px] w-[264px] rounded-full flex items-center justify-center text-9xl mb-5 shadow-xl">
                            🌊
                        </div>
                        <span class="font-bold text-2xl">Track</span>
                        <p>Track the habits!</p>
                    </li>
                    <li class="text-center">
                        <div class="bg-white h-[264px] w-[264px] rounded-full flex items-center justify-center text-9xl mb-5 shadow-xl">
                            ☀️
                        </div>
                        <span class="font-bold text-2xl">Complete</span>
                        <p>Once done, tick off the habit!</p>
                    </li>
                </ul>
            </div>
            <div class=" w-[50%] mx-auto mt-[180px] text-xl">
              <h2 class=" font-bold text-6xl">About</h2>
              <p class=" mt-10 mb-7">Habit is a simple and intuitive tool to track your daily habits and build better routines. Set goals, monitor progress, and stay motivated with clear visuals and gentle reminders. <br><br> Whether you're starting a new habit or breaking an old one, Habit helps you stay consistent — one day at a time.</p>
              <a href="" class="bg-[#10B981] text-white font-bold p-3 rounded-md text-md hover:bg-[#3ecf9f] shadow-xl">Read more</a>
            </div>
        </section>
    </main>

    @include('includes.footer')

    <script>
        const sentences = [
            "Walk for 10 minutes",
            "Drink 2L of water",
            "Stretch your legs",
            "Take a deep breath",
            "Check your posture",
            "Don't forget to floss your teeth",
            "Do your skincare routine",
            "Check in on your friends & family",
            "Eat 2 pieces of fruit"
        ];

        const typingElement = document.getElementById("typingText");
        let sentenceIndex = 0;
        let charIndex = 0;

        function type() {
            if (charIndex < sentences[sentenceIndex].length) {
                typingElement.textContent += sentences[sentenceIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, 50);
            } else {
                setTimeout(erase, 2000);
            }
        }

        function erase() {
            if (charIndex > 0) {
                typingElement.textContent = sentences[sentenceIndex].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(erase, 30);
            } else {
                sentenceIndex = (sentenceIndex + 1) % sentences.length;
                setTimeout(type, 500);
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            type();
        });
    </script>

</x-app-layout>
