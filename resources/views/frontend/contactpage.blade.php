@extends('frontend.layout.app')
@section('content')
<div class="bannertext">
    <h1 class="contact">Contact Us</h1>
</div>

<section class="container">
    <div class="row_item">
        <div class="contact_widget">
            <div><i class="fa-solid fa-phone contacticon"></i></div>
            <div class="text_center">
                <h4>Phone</h4>
                <p>+977-9815067336</p>
            </div>
        </div>

        <div class="contact_widget">
            <div><i class="fa-solid fa-location-dot contacticon"></i></div>
            <div class="text_center">
                <h4>Address</h4>
                <p>Birtamode,Jhapa</p>
            </div>
        </div>
        <div class="contact_widget">
            <div> <i class="fa-regular fa-clock contacticon"></i></div>
            <div class="text_center">
                <h4>Open </h4>
                <p>10:00am to 5:00 pm</p>
            </div>
        </div>
        <div class="contact_widget">
            <div> <i class="fa-regular fa-envelope contacticon"></i> </div>
            <div class="text_center">
                <h4>Email</h4>
                <p>greatfuture@gamil.com</p>
            </div>
        </div>
    </div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3566.304367526422!2d87.9908351!3d26.638735600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e5baf51917c251%3A0x70d868e2899cbf12!2sBhadrapur%20Bus%20Stand!5e0!3m2!1sen!2snp!4v1689316811010!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <div class="contactheading">
    <h1>Leave Message</h1>
  </div>
<form action="{{route('contactform')}}" method="POST">
    @csrf
    @error('name')
            <span class="error_message">{{$message}}</span>
            @enderror
            @error('email')
            <span class="error_message">{{$message}}</span>
            @enderror
        <div class="contact_form">
     <input class=""name="name" type="text" placeholder="Your Name" value="{{old('fullname')}}">
        <input name="email" type="email" placeholder="Email" value="{{old('email')}}">
        </div>
        <div class="textarea">
            <textarea id="message" name="textarea" placeholder="Your message" >{{old('description')}}</textarea>
            @error('textarea')
            <span class="error_message">{{$message}}</span>
            @enderror
        </div>
        {{-- <button type="submit">click me</button> --}}
     <div class="contact_btn">
        <button type="submit" id="contactbutton">SEND MESSAGE</button>
    </div>
</form>
@endsection
