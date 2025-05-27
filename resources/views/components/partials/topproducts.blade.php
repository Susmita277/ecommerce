  <div class="p-12">
      <div class="flex justify-between cursor-pointer items-center">
          <h2>Top Picks</h2>
          <a href="{{ route('products') }}">
              <div class="pbtn flex gap-2 items-center">
                  <h5>view more</h5>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="size-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                  </svg>
              </div>
          </a>
      </div>
      <div class=" grid grid-cols-4 gap-8 py-6 items-stretch">
          @foreach ($topProducts as $product)
              <div class="border border-gray-200 rounded-xl p-3 cursor-pointer">
                  <div class="h-[200px] overflow-hidden rounded-xl">
                      @foreach ($product->images as $image)
                          <img src="{{ asset('storage/' . $image) }}"
                              class="w-full h-full object-cover object-center" />
                      @endforeach
                  </div>
                  <div class="py-2">
                      <h5 class="py-1">{{ $product->name }}</h5>
                      <h5 class="py-1">{{ $product->price }}</h5>
                      <div class="flex gap-1 items-center py-1">
                          <span class="text-gray-500 line-through">{{ $product->mrp }}</span>
                          <span class="text-[var(--color-primary)]">{{ $product->discount }} off</span>
                      </div>
                  </div>
                  @php
                      $inCart = collect($cart)->pluck('product_id')->contains($product->id);
                  @endphp


                  <div class="flex justify-center items-center gap-2 cursor-pointer mbtn text-white pointer-cursor"
                      wire:click.prevent="addToCart({{ $product->id }})">
                      @if ($inCart)
                          <svg class="w-5 h-5  ">✔</svg>
                          <button>In Cart</button>
                      @else
                          <svg class="w-5 h-5 ">🛒</svg>
                          <button>Add to Cart</button>
                      @endif
                  </div>


              </div>
          @endforeach
      </div>
  </div>
