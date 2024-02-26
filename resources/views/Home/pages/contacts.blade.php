@extends('Home.layouts.app')
@section('content')
<div class="about-banner">
    <h1 class="about-h1">Contact Us</h1>
    <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium.</p>
</div>
<div class="contact-wrapper">
    <div class="contact-content1">
 <div class="contact-desc">
    <i class="fas fa-map-marker-alt"></i>
    <div class="contact-name">
        <h3>Location</h3>
        <p>KN679,Kimihurura</p>
    </div>
 </div>
 <div class="contact-desc">
    <i class="fas fa-envelope"></i>
    <div class="contact-name">
        <h3>Email</h3>
        <p>ment@gmail.com</p>
    </div>
 </div>

 <div class="contact-desc">
    <i class="fas fa-phone"></i>
    <div class="contact-name">
        <h3>Call</h3>
        <p>+25078890078</p>
    </div>
 </div>
    </div>
    <div class="contact-content2">
<div class="contact-form-wrapper">
    <form action="">
        <div class="input-flex">
            <input type="text" placeholder="Your Text">
            <input type="text" placeholder="Your Email">
        </div>
        <input type="text" placeholder="subject">
        <textarea name="" id="" cols="20" rows="10">message</textarea>
        <button>send message</button>
    </form>
</div>
    </div>
</div>
@endsection