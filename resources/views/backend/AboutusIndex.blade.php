@extends('backend.layout.app')
@section('main-content')
    <div class="aboutus-description-index">
        <h2 class="product-page-header-tag">About Us</h2>
        <textarea class="aboutus-index-textarea" name="abouts" id="" cols="30" rows="10">
          </textarea> <br>
        <button type="submit" class="aboutus-btn">Update</button>

    </div>

    <div class="Listingproduct-page">
        <h2 class="product-page-header-tag">Add Section</h2>
        <div class="main-div headercontainerof-table">
            <div class="leftalign-item-of-product-table">
                <div>
                    <a href="{{ route('aboutus.create') }}"> <i class="fa-regular fa-plus"></i></a>
                </div>
                <div class=search-button-of-productlist>
                    <input type="text" placeholder=""> <i class="fa-regular fa-magnifying-glass fa-rotate-90"></i>
                </div>

            </div>
            <div class="download-section">
                <i class="fa-solid fa-square-arrow-down"></i>
                <p>Download</p>
            </div>
        </div>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $data)
                <tr>
                    {{-- <td><img src="{{asset('storage/images/'.$data->image)}}" alt="{{$loop->iteration}}"></td> --}}
                    <td>1</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->description }}</td> 

                    <td>
                        <div class="delete_edit">
                            <div><a href="{{route('aboutus.update',$data->id)}}"><i class="fa-light fa-pen-to-square"></i></a></div>
                            <div>
                                <form action="{{route('aboutus.delete',$data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#"><i class="fa-sharp fa-solid fa-trash"></i></a>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
