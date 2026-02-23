<div class="card group relative overflow-hidden rounded-2xl shadow-xl cursor-pointer">

    <img src="{{ $item['image'] }}"
         alt="{{ $item['title'] }}"
         class="w-full h-72 object-cover transition-transform duration-700 ease-out group-hover:scale-110">

    <div class="overlay absolute inset-0 flex flex-col justify-end p-6">

        <div class="content relative z-10 transform translate-y-6 opacity-90 transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100">

            <h3 class="text-xl font-semibold mb-2 text-white">
                {{ $item['title'] }}
            </h3>

            <p class="text-sm text-gray-200 mb-4 line-clamp-2">
                {{ $item['excerpt'] }}
            </p>

            <a href="{{ $item['link'] }}"
               class="inline-flex items-center gap-2 text-teal-400 font-semibold opacity-0 translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">

                Explore More
                <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
            </a>

        </div>
    </div>
</div>
