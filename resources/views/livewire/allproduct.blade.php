 <main class="z-0">
     <div class="p-12">
         <h2 class="text-center">All Product</h2>
         <div class="grid grid-cols-5  gap-8 py-8 relative">
             <div class="h-fit sticky top-5">
                 <h4>Categories</h4>
                 @foreach ($categories as $category)
                     <label for="{{ $category->slug }}">
                         <div class="flex gap-2 items-center" wire:key="{{ $category->id }}">
                             <input type="checkbox" wire:model.live="selected_categories" class="w-5 h-5 rounded-md"
                                 value="{{ $category->id }}">
                             <p class="py-1">{{ $category->name }}</p>
                         </div>
                     </label>
                 @endforeach

                 <h4 class="my-2">Price Sort</h4>
                 <div wire:click="setSortOrder('low')"
                     class="px-4 py-1 flex gap-2 border rounded-md w-[150px] my-2 cursor-pointer {{ $sortOrder === 'low' ? 'bg-primary text-white' : '' }}">
                     <button class="outline-none text-sm font-semibold">Low to High</button>
                     <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                     </svg>
                 </div>

                 <div wire:click="setSortOrder('high')"
                     class="px-4 py-1 flex gap-2 border rounded-md w-[150px] my-2 cursor-pointer {{ $sortOrder === 'high' ? 'bg-primary text-white' : '' }}">
                     <button class="outline-none text-sm font-semibold">High to Low</button>
                     <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M2.25 6 9 12.75l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" />
                     </svg>
                 </div>

             </div>



             <div class="col-span-4 ">
                 <div class=" grid grid-cols-4 gap-4 items-stretch">
                     @foreach ($products as $product)
                         <div class="border border-gray-200 rounded-xl p-3">
                                <a href="/products/{{ $product->slug }}"> <div class="h-[200px] overflow-hidden rounded-xl">
                                     @foreach ($product->images as $image)
                                         <img src="{{ asset('storage/' . $image) }}"
                                             class="w-full h-full object-cover object-center" />
                                     @endforeach
                                 </div></a>

                             <div class="py-2">
                                 <h5 class="py-1">{{ $product->name }}</h5>
                                 <h5 class="py-1">{{ $product->price }}</h5>
                                 <div class="flex gap-1 items-center py-1">
                                     <span class="text-gray-500 line-through">{{ $product->mrp }}</span>
                                     <span class="text-[var(--color-primary)]">{{ $product->discount }}off</span>
                                 </div>
                             </div>


                             @php
                                 $inCart = collect($cart)->pluck('product_id')->contains($product->id);
                             @endphp
                        

                             <div class="flex justify-center items-center gap-2 cursor-pointer mbtn text-white pointer-cursor"
                                 wire:click.prevent="addToCart({{ $product->id }})">
                                 @if ($inCart)
                                     <svg class="w-5 h-5 text-white ">✔</svg>
                                     <button>In Cart</button>
                                 @else
                                     <svg class="w-5 h-5 text-white">🛒</svg>
                                     <button>Add to Cart</button>
                                 @endif
                             </div>


                         </div>
                     @endforeach
                 </div>

                 <div class="flex justify-end my-8">
                     {{ $products->links() }}
                 </div>
             </div>

         </div>
     </div>
 </main>
 <!--new arrivals end-->
