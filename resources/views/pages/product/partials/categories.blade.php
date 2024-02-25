<ul class="flex flex-wrap justify-start items-center gap-5 text-white select-none">
    <li class="rounded-md bg-orange-500 font-semibold mt-2 px-4 py-2"><a href="/product" draggable="false">All</a></li>
    @foreach ($categories as $category)
    <li class="rounded-md bg-orange-500 font-semibold mt-2 px-4 py-2"><a href="/product/category/{{$category['name_url']}}" draggable="false">{{$category['name']}}</a></li>
    @endforeach
  </ul>
