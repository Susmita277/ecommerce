<div class="relative w-[400px]">
    <input id="globalSearch"
           type="search"
           wire:model.debounce.500ms="search"
           placeholder="Search products..."
           class="w-full p-3 border border-gray-300 rounded-md outline-none"
    />

    @if(strlen($search) > 0)
        <ul class="absolute z-50 bg-white w-full mt-1 rounded-md shadow max-h-60 overflow-y-auto">
            @forelse($results as $product)
                <li>
                    <a href="{{ route('products', $product->id) }}"
                       class="block p-2 hover:bg-gray-100 transition"
                    >
                        {{ $product->name }}
                    </a>
                </li>
            @empty
                <li class="p-2 text-red-500">No products found</li>
            @endforelse
        </ul>
    @endif
</div>

