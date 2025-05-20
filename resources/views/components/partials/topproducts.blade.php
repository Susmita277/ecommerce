  <div class="p-12">
      <div class="flex justify-between cursor-pointer items-center">
          <h2>Top Picks</h2>
          <a href="allproduct.html">
              <div class="btn">
                  <h5>view more</h5>
                  <span x-hugeicon:upright class=" w-6 h-6 "></span>
              </div>
          </a>
      </div>
      <div class=" grid grid-cols-4 gap-8 py-6 items-stretch">
              @foreach ($topProducts as $product)
                  <div class="border border-gray-200 rounded-xl p-3 cursor-pointer">
                      <div class="relative">
                          <div class="h-[200px] overflow-hidden rounded-xl">
                              @foreach ($product->images as $image)
                                  <img src="{{ asset('storage/' . $image) }}"
                                      class="w-full h-full object-cover object-center" />
                              @endforeach
                          </div>
                          <div
                              class="absolute top-2 right-2 rounded-full p-2   flex items-center bg-[var(--color-accent)] hover:opacity-70">
                              <span x-hugeicon:favourite class="w-6 h-6 t text-white "></span>
                          </div>
                      </div>
                      <div class="py-2">
                          <h5 class="py-1">{{ $product->name }}</h5>
                          <h5 class="py-1">{{ $product->price }}</h5>
                          <div class="flex gap-1 items-center py-1">
                              <span class="text-gray-500 line-through">{{ $product->mrp }}</span>
                              <span class="text-[var(--color-primary)]">{{ $product->discount }} off</span>
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
