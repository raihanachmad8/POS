<div class="login absolute hidden z-30 h-full w-full top-0 left-0 bg-opacity-70  bg-black ">
    <section class="fixed items center flex h-screen w-full justify-center select-none">
        <div class="flex justify-center items-center">
            <div class="bg-white px-20 py-10 dark:border-2 dark:border-gray-300 dark:bg-gray-900 rounded-xl">
                <div class="flex justify-between items-center">
                    <h1 class="text-4xl font-bold dark:text-white">Masuk</h1>
                    <i class="fa-solid fa-x close_login dark:text-white font-bold text-2xl"></i>
                </div>
                <p class="text-gray-400 dark:text-gray-300">Masuk untuk melanjutkan</p>
                <div class="py-4">
                    <form action="">
                        <div class="flex flex-col gap-2 py-3">
                            <label for="username" class="text-md font-semibold text-gray-500">username</label>
                            <input type="text" name="username" id="username"
                                class="rounded-lg border-2 border-gray-200 bg-gray-200 px-4 py-2 dark:bg-gray-500 dark:text-white font-semibold" />
                        </div>
                        <div class="flex flex-col gap-2 py-3">
                            <label for="username" class="text-md font-semibold text-gray-500">username</label>
                            <input type="text" name="username" id="username"
                                class="rounded-lg border-2 border-gray-200 bg-gray-200 px-4 py-2 dark:bg-gray-500 dark:text-white font-semibold" />
                        </div>

                        <div class="py-6">
                            <button
                                class="py-4 px-2 w-full bg-orange-400 hover:bg-orange-300 rounded-xl text-white font-bold">Button</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<nav class="sticky top-0 w-full bg-white dark:bg-gray-800 z-10">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-8 py-4">
        <div>
            <x-logo />
        </div>
        <div class="hidden md:block">
            <ul class="flex items-center">
                <li class="select-none rounded-md px-6 py-2 dark:text-white text-lg font-semibold hover:bg-orange-400">
                    <a href="/" draggable="false">Home</a></li>
                <li class="select-none rounded-md px-6 py-2 dark:text-white text-lg font-semibold hover:bg-orange-400">
                    <a href="{{ route('product') }}" draggable="false">Product</a></li>
                <li class="select-none rounded-md px-6 py-2 dark:text-white text-lg font-semibold hover:bg-orange-400">
                    <a href="{{ route('profile', ['id' => '1', 'name' => 'raihan']) }}" draggable="false">Profile</a></li>
            </ul>
        </div>
        <div>
            <button
                class="text-md rounded-md bg-orange-500 px-4 py-2 font-semibold text-white hover:bg-orange-400" onclick="showLogin()" >Login</button>
        </div>
    </div>
</nav>



<div class="fixed z-20 bottom-0 left-0 w-screen bg-white dark:bg-gray-800 md:hidden select-none">
    <div class="grid grid-cols-3 gap-y-5">
        <div
            class="py-4 flex justify-center dark:text-white font-semibold leading-8 hover:bg-orange-400">
            <a href="/" draggable="false" class="inline-flex flex-col items-center justify-center ">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>
        </div>

        <div
            class="py-4 flex justify-center dark:text-white font-semibold leading-8 hover:bg-orange-400">
            <a href="{{ route('product') }}" class="inline-flex flex-col items-center justify-center" draggable="false">
                <i class="fa-solid fa-shop"></i>
                <span>Product</span>
            </a>
        </div>
        <div
            class="py-4 flex justify-center dark:text-white font-semibold leading-8 hover:bg-orange-400">
            <a href="{{ route('profile', [
                'id' => '1', 'name' => 'raihan'
            ]) }}" draggable="false" class="inline-flex flex-col items-center justify-center">
                <i class="fa-solid fa-user"></i>
                <span>Product</span>
            </a>
        </div>

    </div>
</div>
