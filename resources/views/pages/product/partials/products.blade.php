@if (count($products) == 0)
    <div class="flex justify-center items-center dark:text-white font-semibold text-lg">
        Tidak Ada
    </div>

@endif
@foreach ($products as $produk)
    <x-product-item
    :name="$produk['name']"
    :price="$produk['price']"
    :discount="$produk['discount']"
    :rating="$produk['rating']"
    :sold="$produk['sold_item']"
    :image="$produk['image']"
    />

@endforeach

