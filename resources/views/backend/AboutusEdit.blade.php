@extends('backend.layout.app')
@section('links')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
@endsection
@section('main-content')
<form action="{{route('aboutus.update',$data->id)}}" method="POST">
@csrf
    <div class="aboutus-backend-main-container">
        <div class="aboutus-backend-imagecontainer">
            <div class="banner_image"><img src="" alt=""></div> <br>
            <label class="choose-btn" for="imageupload">Upload</label>
            <input type="file" name="imageupload" id="imageupload" accept="image/*" hidden>
        </div> <br> <br>
        <div class="aboutus-inputField">
            <label class="title" for="text">Title</label> <br>
            <input class="aboutus-input" type="text" name="title" value="{{$data->title}}"> <br> <br>
             <label for="description">Description</label>
            <div id="editor" class="w-50 h-auto"></div>
            <input type="hidden" name="description" id="descriptionInput" value="{{$data->description}}">

        </div>
        <button type="submit" class="aboutus-btn">Submit</button> <br> <br>
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

