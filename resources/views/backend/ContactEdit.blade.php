@extends('backend.layout.app')
@section('main-content')
    {{-- @php
        print_r($errors);
    @endphp --}}
    <form action="{{ route('contactform.update', $contact->id)}}" method="POST">
        @csrf
        <div class="maincontainerfor-contactpage">
            <h2 >Edit Contact</h2> <br>
            <label>Customer name</label>
            <div class="contact-header">
                <input type="text" value="{{ $contact->name}}">
                <button type="submit">Save</button>
            </div>
            <div class="contact-form">
                 <div><label for="name">Name</label> <br>
                <input type="text" name="name" value="{{ $contact->name }}"></div>
              <div><label for="email">Email</label> <br>
                <input type="email" name="email" value="{{ $contact->email }}"></div>  

            </div> 
            <div class="textarea">
                <label for="textarae">Textarea</label> <br>
                <textarea name="textarea" id="">{{ $contact->textarea}}</textarea>
            </div>

        </div>


    </form>
@endsection
<style>
    form {
        width: 70%;
        height: 70vh;
        background-color: #ffffff;
        margin-top: 10%;
        font-family: "Open sans";
    }
  .maincontainerfor-contactpage{
    margin: 3%;
  }

    .contact-header {
        display: flex;
        justify-content: space-between;
         margin-top: 1%;
    }


    .contact-header input
     {
        max-width: 900px;
        min-width: 900px;
        max-height: 40px;
        min-height:40px;
        border: none;
        outline: none;
        border: 2px solid #D2242D;
        padding: 10px;
        box-sizing: border-box;
    }
    button{
        max-width: 60px;
        min-width: 60px;
        max-height:40px;
        min-height:40px;
        border: none;
        outline: none;
        border: 2px solid #D2242D;
        background-color: #D2242D;
        color: white;
        padding: 10px;
        box-sizing: border-box;
    }
    .contact-form{
        display: flex;
        justify-content: space-between;
        margin-top: 4%;

    }
    .contact-form input{
        max-width: 430px;
        min-width: 430px;
        max-height: 40px;
        min-height:40px;
        border: none;
        outline: none;
        border: 2px solid #d1d5db;
        padding: 10px;
        box-sizing: border-box;
        background-color: #e5e7eb;
    }
    .textarea{
        margin-top: 4%;
     
    }
    textarea{
        max-width: 960px;
        min-width: 960px;
        max-height:80px;
        min-height:80px;
        border: none;
        outline: none;
        border: 2px solid #d1d5db;
        background-color: #e5e7eb;
        padding: 10px;
        box-sizing: border-box;
    }
</style>
