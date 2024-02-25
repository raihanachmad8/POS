<x-app-layout>
    <main class="mx-auto pt-20 pb-48 md:py-6 max-w-7xl  px-8 md:mt-[76px]">
        <section class="my-4">
            @include('pages.product.partials.searchbar')
        </section>
        <section class="my-4">
            @include('pages.product.partials.categories')
        </section>
        <section class="my-6">
            <div class="grid grid-cols-1 md:grid-cols-3">
                <div class="product_container col-span-2">
                    <div class="flex flex-wrap justify-center gap-5">
                        @include('pages.product.partials.products')
                    </div>
                </div>
                <div class="mt-6 md:mt-0">
                    @include('pages.product.partials.cart')
                </div>
            </div>
        </section>
    </main>
    @push('scripts')
        <script>
            const productContainer = document.querySelector('.product_container');
            const product = document.querySelectorAll('.product');
            const cartContainer = document.querySelector('.cart_container');
            const cart = [];

            product.forEach((item) => {
                item.addEventListener('click', (e) => {
                    const product = e.target.closest('.product');
                    const productName = product.querySelector('h1').textContent;
                    const productPrice = cleanPriceFormat(product.querySelector('.price').textContent);
                    const discount = product.querySelector('.discount');
                    const productImage = product.querySelector('img').src;
                    const productData = {
                        name: productName,
                        price: productPrice,
                        image: productImage,
                        discount: discount ? discount.textContent : 0,
                        qty: 1,
                    };
                    if (cart.length === 0) {
                        cart.push(productData);
                    } else {
                        const existingProduct = cart.find((item) => item.name === productName);
                        if (existingProduct) {
                            existingProduct.qty += 1;
                        } else {
                            cart.push(productData);
                        }
                    }

                    renderCart();
                });
            });

            function cleanPriceFormat(value) {
                return parseInt(value.replace(/[^0-9]/g, ''));
            }

            function addQuantity(productName) {
                const existingProduct = cart.find((item) => item.name === productName);
                existingProduct.qty += 1;
                renderCart();
            }

            function reduceQuantity(productName) {
                const existingProduct = cart.find((item) => item.name === productName);
                if (existingProduct.qty > 1) {
                    existingProduct.qty -= 1;
                } else {
                    cart.splice(cart.indexOf(existingProduct), 1);
                }
                renderCart();
            }

            function createCartElement(product) {

                const li = document.createElement('li');
                li.innerHTML = `
                <li class="my-4">
                    <div class="flex items
                    -center gap-4">
                        <div class="h-24 w-24 rounded-md bg-white">
                            <img src="${product.image}" alt=""
                                class="h-full w-full object-cover rounded-md" draggable="false">
                        </div>
                        <div class="flex">
                            <div class="flex flex-col gap-3">
                                <div class="flex flex-col">
                                    <span class="font-bold">${product.name}</span>
                                    <span class="text-sm font-semibold">Rp ${product.price}</span>
                                </div>
                                <div class="flex items-center">
                                    <button
                                        class="w-10 h-10 px-2 pb-3 rounded-xl bg-orange-700 hover:bg-orange-400 text-3xl text-center text-white font-semibold"
                                        onclick="reduceQuantity('${product.name}')">-</button>
                                    <span
                                        class="w-16 text-center overflow-hidden px-2 py-2 bg-white border-2 border-orange-400 rounded-lg mx-6 select-none">${product.qty}</span>
                                    <button
                                        class="w-10 h-10 px-2 pb-1 rounded-xl bg-orange-700 hover:bg-orange-400 text-3xl text-center text-white font-semibold"
                                        onclick="addQuantity('${product.name}')">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                `;
                cartContainer.appendChild(li);

            }

            function renderCart() {
                cartContainer.innerHTML = '';
                cart.forEach((product) => {
                    createCartElement(product);
                });

                const subtotal = document.querySelector('.cart_subtotal');
                const tax = document.querySelector('.cart_tax');
                const total = document.querySelector('.cart_total');

                subtotal.textContent = `Rp ${rupiahFormat(updateSubtotal())}`;
                tax.textContent = `Rp ${rupiahFormat(updateTax())}`;
                total.textContent = `Rp ${rupiahFormat(updateTotal())}`;
            }
            renderCart();

            function updateSubtotal() {
                const subtotal = cart.reduce((acc, item) => {
                    return acc + (item.price * item.qty);
                }, 0);
                return subtotal;
            }

            function updateTax() {
                const subtotal = updateSubtotal();
                const tax = subtotal * 0.01;
                return tax;
            }

            function updateTotal() {
                const subtotal = updateSubtotal();
                const tax = updateTax();
                const total = subtotal + tax;
                return total;
            }

            function rupiahFormat(value) {
                return value.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + ',00';
            }

        </script>

    @endpush
</x-app-layout>
