<div class="w-full h-[60vh] md:h-[70vh] rounded-md bg-orange-200 select-none flex justify-between flex-col">
    <div class="p-10">
        <h1 class="text-2xl font-bold">Current Order</h1>
        <ul class="my-5 cart_container h-80 overflow-y-auto">

        </ul>
    </div>
    <div class="h-50 drop-shadow-2xl bg-orange-100 rounded-xl px-10 py-5">
        <ul>
            <li>
                <div class="flex justify-between font-semibold">
                    <span >Subtotal</span>
                    <span class="cart_subtotal"></span>
                </div>
            </li>
            <li>
                <div class="flex justify-between font-semibold">
                    <span>Tax</span>
                    <span class="cart_tax"></span>
                </div>
            </li>
            <li>
                <div class="flex justify-between font-semibold text-2xl">
                    <span>Total</span>
                    <span class="cart_total"></span>
                </div>
            </li>
        </ul>
        <button class="bg-orange-400 hover:bg-orange-200 text-white w-full px-10 py-2 rounded-xl font-bold text-2xl my-4" onclick="showLogin()" >Pay</button>
    </div>
</div>
