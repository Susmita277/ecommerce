@extends('backend.layout.app')
@section('links')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
@endsection
@section('main-content')
    <form action="{{ route('aboutus.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="aboutus-backend-main-container">
            <div class="aboutus-backend-imagepreviwcontainer">
                <div class="preview">
                    <i class="fa-solid fa-trash delete_button"></i>
                    <img src="{{ asset('frontend/images/add-image.png') }}" class="default-image"
                        id="preview-selected-image" />
                    <img src="" alt="" class="banner_image">
                </div>
                <label class="choose-btn" for="imageupload">Upload</label>
                <input type="file" id="imageupload" name="image" accept="image/*" onchange="previewImage(event)"
                    hidden>
                @error('image')
                    {{ $message }}
                @enderror
            </div><br> <br>


            <div class="aboutus-inputField">
                <label class="title" for="text">Title</label> <br>
                <input class="aboutus-input" type="text" name="title"> <br> <br>
                <label for="description">Description</label>
                <textarea name="description" id="editor" cols="30" rows="10"></textarea>
                {{-- <input type="text" name="description" id="descriptionInput"> --}}

            </div>
            <button type="submit" class="choose-btn">Submit</button> <br> <br>
        </div>
    </form>
@endsection
@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
