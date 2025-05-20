<!--new arrivals-->
<div class="p-12">
    <div class="flex justify-between cursor-pointer">
        <h2>New arrivals</h2>
        <a class="allproduct.html">
            <div class="pbtn flex gap-2 items-center">
                <h5>view more</h5>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                </svg>
            </div>
        </a>
    </div>
    <div class=" grid grid-cols-4 gap-8 py-6 items-stretch cursor-pointer">
        @foreach ($newArrivals as $product)
            <div class="border border-gray-200 rounded-xl p-3">
                <div class="relative">
                    <div class="h-[200px] overflow-hidden rounded-xl">
                    @foreach ($product->images as $image)
                        <img src="{{ asset('storage/' . $image) }}" class="w-full h-full object-cover object-center" />
                    @endforeach</div>
                    <div class="absolute top-2 right-2 rounded-full p-2 flex items-center bg-[var(--color-accent)] hover:opacity-70"
                        wire:click="$emit('addToWishlist', {{ $product->id }})">
                        <!-- Heart Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#ffffff" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>

                    </div>
                </div>

                <div class="py-2">
                    <h5 class="py-1">{{ $product->name }}</h5>
                    <h5 class="py-1">{{ $product->price }}</h5>
                    <div class="flex gap-1 items-center py-1">
                        <span class="text-gray-500 line-through">{{ $product->mrp }}</span>
                        <span class="text-[var(--color-primary)]">{{ $product->discount }}off</span>
                    </div>
                </div>

                <div class="mbtn text-center w-full flex justify-center gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#ffffff" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>

                    <button>
                        Add to Cart
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!--new arrivals end-->
