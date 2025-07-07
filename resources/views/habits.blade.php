<title>My habits | Habit.</title>
<x-app-layout>

    <section class="mb-[500px]">
        <div class="w-full h-[50px] bg-[#10B981] flex justify-center items-center text-white font-bold invisible">
            🎉 Habit completed! 🎉
        </div>

        <div class="w-[50%] mx-auto mt-[50px]">
            <h1 class="text-left font-bold text-4xl">Hello, {{ Auth::user()->name ?? 'Guest' }} 👋</h1>
            <span>Take a look at your daily habits:</span>
        </div>

        <div class="w-[50%] h-[500px] mx-auto mt-[25px]">
            <!-- Top Row: Main block + 10% width block -->
            <div class="flex mb-[20px] h-[15%]">
                <!-- Main 90% block -->
                <div class="w-[90%] bg-white rounded-md shadow-xl flex items-center pl-5 font-bold text-gray-800">
                    <span class="w-[90%]">Your habits</span>
                    <span class="text-gray-400 w-[10%]"><i class="fa-solid fa-clock-rotate-left"></i> 24h</span>
                </div>

                <!-- Side 10% block -->
                <div class="w-[10%] bg-white rounded-md shadow-xl ml-2 flex items-center justify-center text-gray-800 cursor-pointer hover:bg-[#10B981] hover:text-white">
                    <span class="text-2xl"><i class="fa-solid fa-plus"></i></span>
                </div>
            </div>

            <!-- Bottom section -->
            <div class="w-full h-[85%] bg-white rounded-md shadow-xl p-5 mb-10">
                <div class="w-full h-full bg-gray-100 rounded-md overflow-y-auto p-2">
                    <div> <!--todos-->
                        <span class="font-bold">To Do</span>
                        @if($undoneHabits->isEmpty())
                            <p class="text-center text-gray-400">No habits to do today.</p>
                        @else
                            @foreach ($undoneHabits as $habit)
                                <div class="bg-white w-full h-[70px] mx-auto rounded-md shadow-xl pl-5 flex items-center justify-between mb-5 mt-5">
                                    <div class="flex items-center">
                                        <div class="w-[32px] h-[32px] border-gray-400 border-dashed border-2 rounded-full 
                                                    hover:bg-[#10B981] hover:border-none hover:text-white text-gray-400 
                                                    flex items-center justify-center cursor-pointer">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span class="ml-3 text-gray-600 font-bold">{{ $habit->name }}</span>
                                    </div>
                                    <div class="text-gray-300 cursor-grab h-full flex border-gray-200 border-l items-center justify-center w-[10%] ml-1">
                                        <i class="fa-solid fa-grip-vertical"></i>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <hr class="border-gray-300 mt-5 mb-5">

                    <div><!--done-->
                        <span class="font-bold">Done</span>
                        @if($doneHabits->isEmpty())
                            <p class="text-center text-gray-400">No habits done yet.</p>
                        @else
                            @foreach ($doneHabits as $habit)
                                <div class="bg-white w-full h-[70px] mx-auto rounded-md shadow-xl pl-5 flex items-center justify-between mb-5 mt-5">
                                    <div class="flex items-center">
                                        <div class="w-[32px] h-[32px] rounded-full bg-[#10B981] text-white flex items-center justify-center cursor-pointer">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span class="ml-3 text-gray-600 font-bold">{{ $habit->name }}</span>
                                    </div>
                                    <div class="text-gray-300 cursor-grab h-full flex border-gray-200 border-l items-center justify-center w-[10%] ml-1">
                                        <i class="fa-solid fa-grip-vertical"></i>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="w-full h-[60px] bg-white rounded-md shadow-xl font-bold flex items-center p-5 cursor-pointer mb-5">
                <span class="w-[95%]">Tips to complete your everyday habits</span><i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="w-full h-[60px] bg-white rounded-md shadow-xl font-bold flex items-center p-5 cursor-pointer mb-5">
                <span class="w-[95%]">Ideas for your next habits</span><i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="w-full h-[60px] bg-white rounded-md shadow-xl font-bold flex items-center p-5 cursor-pointer mb-5">
                <span class="w-[95%]">General tips 'n tricks</span><i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
    </section>
    @include('includes.footer')

</x-app-layout>
