@props(['name', 'price', 'discount', 'rating', 'sold', 'image', 'url'])

@php
    if ($discount > 0) {
        $priceDiscount = $price - ($price * $discount) / 100;

        $priceDiscount = number_format($priceDiscount, 0, ',', '.');
    }

    $price = number_format($price, 0, ',', '.');
    $ratingStar = '';
    // Validate rating (optional)
    if (is_numeric($rating) || $rating > 0 || $rating <= 5) {
        $ratingStar = str_repeat('<i class="fa-solid fa-star text-yellow-300"></i>', (int) $rating);
        $ratingStar .= str_repeat('<i class="fa-regular fa-star text-yellow-300"></i>', 5 - (int) $rating);
    }

@endphp
<div class="product">
    <div
        class="inline-flex max-h-96 max-w-60 select-none flex-col items-center justify-center rounded-xl bg-white dark:bg-gray-800">
        <div class="select-none rounded-tl-xl rounded-tr-xl bg-gray-100 h-56 w-full ">
            <img src="{{ env('APP_URL') }}:8000/{{ $image }}" alt="images"
                class="rounded-tl-xl rounded-tr-xl h-full w-full object-cover" draggable="false" />
        </div>
        <div class="w-full h-full px-2 py-6 dark:text-white">
            <h1 class="truncate font-normal">{{ $name }}</h1>
            @if ($discount > 0)
                <div class="flex"><p class="font-normal text-gray-400">
                    <span class="line-through">Rp {{ $price }}</span></p>
                    <p
                        class="mx-3 font-bold text-red-500"><span class="discount">{{ $discount }}</span>%</p></div>
            @endif
            <p class="price text-lg font-bold">Rp {{ $priceDiscount ?? $price }}</p>
            <div>
                {!! $ratingStar !!}
                <span>{{ $rating }}</span>
                <span>|</span>
                <span>{{ $sold }}+ terjual</span>
            </div>
        </div>
    </div>
</div>
