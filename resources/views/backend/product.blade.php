@extends('backend.layout.app')
@section('main-content')
    <div class="second-maincontainerof-productlist">

        <div class="Listingproduct-page">
            <h2 class="product-page-header-tag">Product List</h2>
            <div class="main-div headercontainerof-table">
                <div class="leftalign-item-of-product-table">
                    <div>
                        <a href="{{ route('product.create') }}"> <i class="fa-regular fa-plus"></i></a>
                    </div>
                    {{-- <div class=search-button-of-productlist>
                        <input type="text" placeholder=""> <i class="fa-regular fa-magnifying-glass fa-rotate-90"></i>
                    </div> --}}
                    <form action="" method="GET">
                        @csrf
                        <div class=search-button-of-productlist>
                        <input type="search" name="search" id=""  placeholder="search productname or category">
                        <button type="submit" id="productsearchbtn"><i class="fa-regular fa-magnifying-glass fa-rotate-90"></i></button>
                    </div>
                    </form>

                    <i class="fa-thin fa-rotate"></i>
                </div>
                <div class="download-section">
                    <i class="fa-solid fa-square-arrow-down"></i>
                    <p>Download</p>
                </div>
            </div>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th><input type="checkbox" placeholder=""></th>
                        <th>Actions</th>
                        <th>Categories</th>
                        <th>Product Name</th>
                        <th>Selling Price</th>
                        <th>Date</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as  $product)
                        <tr>
                            <td><input type="checkbox" placeholder="" class="checkbox"></td>
                            <td>
                                <div class="delete_edit">
                                    <div><a href="{{ route('product.update', $product->id) }}"><i
                                                class="fa-light fa-pen-to-square"></i></a></div>
                                    <div>
                                        <form action="{{ route('product.delete', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#"><i class="fa-sharp fa-solid fa-trash"></i></a>
                                        </form>
                                    </div>
                                </div>
                            </td>


                            <td>{{ $product->category }}</td>
                            <td>{{ $product->productname }}</td>
                            {{-- <td>240</td> --}}
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->created_at->format('d M Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>
@endsection
