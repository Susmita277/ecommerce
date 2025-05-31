 <!--product details start-->
 <main class="p-12">

     <section class="bg-background font-forum  overflow-hidden py-12  ">
         <div class="  grid grid-cols-2 gap-20">

             <div class="h-[500px] ">
                 <img alt="ecommerce" src="{{ url('storage', $product->images[0]) }}"
                     class="w-full h-full object-cover items-stretch rounded-md">
             </div>

             <div class="">
                 <h3>{{ $product->name }}</h3>
                 <div class="flex gap-1 items-center py-2">
                     <h3 class="py-2">Rs.{{ $product->price }}</h3>
                 </div>
                 <p>
                     {{ $product->description }}
                 </p>

        

                 <div class="flex  py-4 gap-4 pt-20">

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
             </div>

         </div>
     </section>

     <section class="py-12 ">
         <h3 class="text-center">You May Also Like</h3>
         <ul class="grid grid-cols-4 gap-4 relative py-8 ">

             @foreach ($products as $product)
                 <div class="border border-gray-200 rounded-xl p-3">
                     <a href="/products/{{ $product->slug }}">
                         <div class="h-[200px] overflow-hidden rounded-xl">
                             @foreach ($product->images as $image)
                                 <img src="{{ asset('storage/' . $image) }}"
                                     class="w-full h-full object-cover object-center" />
                             @endforeach
                         </div>
                     </a>

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
         </ul>
     </section>
 </main>
