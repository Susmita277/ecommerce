@extends('backend.layout.app')
@section('main-content')

    <form action="{{ route('product.update',$product->id) }}" method="Post">
        @csrf
        <div class="main-containerforproductpage">
            <h2>Edit</h2> <br>
            <div class="product-container">
                <div>
                    <p>Product Name</p>
                    <input type="text" placeholder="Writing" name="productname" value="{{$product->productname}}">
                </div> <br>
                <div>
                    <p>Description</p>
                    <textarea name="description" id="message" placeholder="Type here" name="description">{{$product->description}}</textarea>
                </div>
            </div>

            <p id="paragraph">Images</p>
            <div class="image-upload-section">
            <div class="image-container">
                <div class="product-image">
                    <img src="{{ asset('frontend/images/facewash.jpg') }}">
                </div>
                <div class="product-image">
                    <img src="{{ asset('frontend/images/vanila sugar.jpg') }}">
                </div>
                <div class="product-image">
                    <img src="{{ asset('frontend/images/oats.jpg') }}">
                </div>
            </div>
                <div class="upload">
                    <label for="upload" class="upload-item">
                        <i class="fa-duotone fa-cloud-arrow-up"></i>
                        <p>Upload</p>
                    </label>
                    <input type="file" name="" id="upload" hidden accept="image/*" onchange ="addimage(event)">
                </div>
        </div>
            <div class="product-category">
                <div class="category-input">
                    <label for="category">Category</label> <br>
                    <input type="text" id="category" list="categoryList" name="category" placeholder="Select"  value="{{$product->category}}">
                    <datalist id="categoryList">
                        <option value="Beauty">
                        <option value="Health">
                        <option value="Kitchen">
                        <option value="Hair Care">
                        <option value="Body Care">
                    </datalist>
                </div>


                <div class="sub-category">
                    <label for="category">Sub-category</label> <br>
                    <input type="text" id="category" list="sub-categoryList" name="subcategory" placeholder="Papaya Sunscream" >
                    <datalist id="sub-categoryList">
                        <option value="Papaya Sunscream" >
                        <option value="Body Lotion">
                        <option value="Green Tea">
                        <option value="Coconut Milk">
                        <option value="Onion Hairoil">
                        <option value="CTC Tea">
                        <option value="Fungal Oil">

                    </datalist>
                </div>
            </div> <br>


            <label for="price">
                <p id="paragraph">Price</p>
            </label>
            <div class="price-container">
                <div><input type="text" placeholder="Type here" name="price" value="{{$product->price}}"></div>
                <div> <input type="text" id="currency" placeholder="RS" name="currency">
                    <datalist id="pricelist">
                        <option value="RS.">
                        <option value="EUR">
                        <option value="JPY">
                        <option value="USD">
                        <option value="KWD">
                    </datalist>
                </div>
            </div>
            <div><label>
                    <input type="checkbox" id="myCheckbox" name="checkbox">
                    Publish on site
                </label> </div>
            <div class="button"><button id="btn" type="submit">Submit item</button></div>
        </div>
    </form>
    
@endsection
