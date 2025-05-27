<div>
    <x-partials.herosection />
    <x-partials.overview />
    <x-partials.new-arrivals :new-arrivals="$newArrivals" :cart="$cart"/>
    <x-partials.category :categories="$categories" />
    <x-partials.topproducts :top-products="$topProducts" :cart="$cart" />
</div>

