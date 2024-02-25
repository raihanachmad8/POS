<x-app-layout>
    <main class="mx-auto py-24 max-w-7xl  px-8 md:mt-[76px]">
        <div class="flex items-center justify-between">
            <h1 class="text-4xl font-bold dark:text-white">Profile</h1>
        </div>
        <section class="my-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="col-span-2">
                    <div class="flex flex-col gap-5">
                        <div class="flex items
                        -center gap-5">
                            <div class="w-24 h-24 rounded-full bg-gray-200"><img src="https://picsum.photos/200/300" draggable="false" class="w-full h-full object-cover rounded-full" alt="image"></div>
                            <div>
                                <h1 class="text-3xl font-bold dark:text-white">{{$name ?? 'Raihan'}}</h1>
                                <h2 class="text-md font-bold dark:text-white">{{$id ?? '01'}}</h2>
                                <p class="text-gray-400">
                                    <span class="font-semibold">Joined:</span> 26-2-2024
                                </p>
                            </div>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold dark:text-white my-6">My Orders</h1>
                            <div class="flex flex-wrap gap-5">
                                <div class="w-60 h-60 bg-gray-200 rounded-xl"><img src="https://picsum.photos/200/300" draggable="false" alt="image" class="w-full h-full object-cover rounded-xl"></div>
                                <div class="w-60 h-60 bg-gray-200 rounded-xl"><img src="https://picsum.photos/200/300" draggable="false" alt="image" class="w-full h-full object-cover rounded-xl"></div>
                                <div class="w-60 h-60 bg-gray-200 rounded-xl"><img src="https://picsum.photos/200/300" draggable="false" alt="image" class="w-full h-full object-cover rounded-xl"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
