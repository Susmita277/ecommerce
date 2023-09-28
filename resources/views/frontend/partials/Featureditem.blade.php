<!-- product -->
<div class="Product-heading">
    <h2>Featured Categories </h2>
</div>



<div class="Product-container">
    @foreach ($products as $product)
    <div class=" product-1 bannereachimage ">
        <img src="{{ asset('frontend/images/Coconut Milk') }}" alt="Coconut Milk">
        <p>{{$product->productname}}</p>
        <p class="price"> {{$product->price}}
        </p>
    </div>
    @endforeach

</div>

<div class="BestSelling-Container-heading">
    <h2>Best Selling</h2>
</div>
<div class="BestSelling-Container">
    <div class="product">
        <img src="{{ asset('frontend/images/neemala.png') }}" alt="Neemala shop">
        <p>Neemala shop</p>
        <p class="price"> $25.00</p>
    </div>
    <div class=" product ">
        <img src="{{ asset('frontend/images/castor oil.jpg') }}" alt="Castor Oil">
        <p>Castor oil</p>
        <p class="price"> $25.00
        </p>
    </div>
    <div class="product">
        <img src="{{ asset('frontend/images/CTC Tea.jpg') }}" alt="CTC Tea">
        <p>CTC Tea</p>
        <p class="price"> $25.00
        </p>
    </div>
    <div class="product">
        <img src="{{ asset('frontend/images/neem.png') }}" alt="Neem Tootpaste">
        <p>Neem Tootpaste </p>
        <p class="price"> $25.00
        </p>
    </div>
    <div class="product">
        <img src="{{ asset('frontend/images/Cetaphil Lotion.jpg') }}" alt="Cetaphil Lotion">
        <p>Cetaphil Lotion</p>
        <p class="price">$25.00
        </p>
    </div>
    <div class="product">
        <img src="{{ asset('frontend/images/Cetaphil Lotion.jpg') }}" alt="Cetaphil Lotion">
        <p>Cetaphil Lotion</p>
        <p class="price">$25.00
        </p>
    </div>
    <div class="product">
        <img src="{{ asset('frontend/images/Cetaphil Lotion.jpg') }}" alt="Cetaphil Lotion">
        <p>Cetaphil Lotion</p>
        <p class="price">$25.00
        </p>
    </div>
    <div class="product">
        <img src="{{ asset('frontend/images/Cetaphil Lotion.jpg') }}" alt="Cetaphil Lotion">
        <p>Cetaphil Lotion</p>
        <p class="price">$25.00
        </p>
    </div>

</div>


{{-- food-item as per season --}}

<div class="bottom-banner-container">
    <div class="banner-bottom"> <img src="{{asset('frontend/images/bannerrrr-bottom.png')}}"alt="banner"></div>
    <div class="banner-bottom-2" ><img src="{{asset('frontend/images/discountbanner.jpg')}}"></div>
</div>
