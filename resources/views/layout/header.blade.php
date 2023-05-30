<div class="w-[100%]">
    <div class="bg-blue-500 pt-8 pb-8 text-center text-white text-4xl">
        HAPPY BOOK STORE
    </div>
    <ul class="flex pt-2 pb-2 text-1xl items-center justify-center">
        <li class="m-2">
          <a class="text-blue-500 hover:text-blue-800" href="/">Home</a>
        </li>
        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="m-2 text-blue-500 bg-white text-1xl text-center inline-flex items-center" type="button">Category<svg class="w-4 h-4 ml-1" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
        <!-- Dropdown menu -->
        <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
            @php
                $categories = App\Models\Category::all();
            @endphp
            @foreach ($categories as $cat)
                <li>
                    <a href="/category/{{$cat->id}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$cat->category}}</a>
                </li>
            @endforeach
            </ul>
        </div>
        <li class="m-2">
          <a class="text-blue-500 hover:text-blue-800" href="/contact">Contact</a>
        </li>
      </ul>

</div>
