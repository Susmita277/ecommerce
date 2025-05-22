   <div class="p-12">
       <h2>Designed for Every Space</h2>
       <div class="grid grid-cols-2 gap-8 py-6 items-stretch">
           @foreach ($categories as $category)
               <a href="/products?selected_categories[0]={{ $category->id }}" wire:key="{{ $category->id }}"><div class="rounded-xl overflow-hidden relative cursor-pointer">
                   <img src="{{ asset('storage/' . $category->image) }}" class="w-full h-full object-cover object-center" />
                   <h4 class="absolute bottom-5 left-5 text-white">{{ $category->name }}</h4>
               </div>
           @endforeach
       </div>
   </div>
   <!--categories end-->
