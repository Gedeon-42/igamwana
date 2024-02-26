@extends('Home.layouts.app')
@section('content')
<div class="about-banner">
    <h1 class="about-h1">About us</h1>
    <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium.</p>
</div>

<div class="about-wrapper">
    <div class="about-content1">
<h1>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h1>
<p>
Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit.
Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.
Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
</p>
    </div>
    <div class="about-content2">
<img src="/images/student9.jpg" alt="">
    </div>
</div>

@include('Home.partials.student-event')

<div class="testmonial-wrapper">
<div class="testmonial-header">
    <h3>Testmonial</h3>
    <h2>What they are Saying</h2>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <p type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></p>
            <p type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></p>
            <p type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></p>
          </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testmonial-card">
                <div class="testmonial-body">
                    <div class="testmonial-top">
                        <img src="../images/teacher7.jpg" alt="">
                        <div class="tetmoial-name">
                            <h1>Patrick sheck</h1>
                            <p>Teacher</p>
                            <p>
                                <i class="fas fa-quote-left"></i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing.
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                <i class="fas fa-quote-right"></i>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="testmonial-body">
                    <div class="testmonial-top">
                        <img src="../images/teacher9.jpg" alt="">
                        <div class="tetmoial-name">
                            <h1>Gedeon Kalulu</h1>
                            <p>Soft ware developer</p>
                            <p>
                                <i class="fas fa-quote-left"></i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing.
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                <i class="fas fa-quote-right"></i>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testmonial-card">
                <div class="testmonial-body">
                    <div class="testmonial-top">
                        <img src="../images/teacher6.jpeg" alt="">
                        <div class="tetmoial-name">
                            <h1>Mauli Faustin</h1>
                            <p>Network Engineer</p>
                            <p>
                                <i class="fas fa-quote-left"></i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt dicta reprehenderit amet?
                                <i class="fas fa-quote-right"></i>
                            </p>
                        </div>
                    </div>
                   
                </div>
                <div class="testmonial-body">
                    <div class="testmonial-top">
                        <img src="../images/teacher8.jpg" alt="">
                        <div class="tetmoial-name">
                            <h1>Mathew Parrow</h1>
                            <p>Business man</p>
                            <p>
                                <i class="fas fa-quote-left"></i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing.
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                <i class="fas fa-quote-right"></i>
                            </p>
                        </div>
                    </div>
                 
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testmonial-card">
                <div class="testmonial-body">
                    <div class="testmonial-top">
                        <img src="../images/teacher4.jpg" alt="">
                        <div class="tetmoial-name">
                            <h1>Mark Lenovo</h1>
                            <p>Soft ware developer</p>
                            <p>
                                <i class="fas fa-quote-left"></i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing.
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                <i class="fas fa-quote-right"></i>
                            </p>
                        </div>
                    </div>
                 
                </div>
                <div class="testmonial-body">
                    <div class="testmonial-top">
                        <img src="../images/teacher3.jpg" alt="">
                        <div class="tetmoial-name">
                            <h1>Peter john</h1>
                            <p>Soft ware developer</p>
                            <p>
                                <i class="fas fa-quote-left"></i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing.
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                <i class="fas fa-quote-right"></i>
                            </p>
                        </div>
                    </div>
                  
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
</div>
@endsection