@extends('Home.layouts.app')
@section('content')
    <div class="banner-wrapper">
        <div class="banner-content">
            <h1>Learning Today,</h1>
            <h2>Leading To Morrow</h2>
            <p> the eductaion is key , no one is allowed to miss the opprtunity to dicover</p>
            <div class="get-starteds">
                <a href=""> Get Started</a>
            </div>
                </div>
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
    {{-- student section wrapper --}}
    @include('Home.partials.student-event')
    {{-- course section wrapper --}}
    <div class="course-section-wrapper">
      <h1 class="team-course-h1">Our Programs</h1>
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
            {{-- <div class="carousel-indicators">
              {{-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>  --}}
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="cards-wrapper">
                    <div class="card">
  <img src="/images/mpc.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">MPC</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Learn more</a>
  </div>
</div>
<div class="card">
    <img src="/images/pcb.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">PCB</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Learn more</a>
    </div>
  </div>
  <div class="card">
    <img src="/images/phy.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">PCM</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Learn More</a>
    </div>
  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card">
  <img src="/images/math.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">MCB</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Learn More</a>
  </div>
</div>
<div class="card">
    <img src="/images/mpc.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">MCE</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Learn more</a>
    </div>
  </div>
  <div class="card">
    <img src="/images/physics.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">MEG</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Learn more</a>
    </div>
  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="cards-wrapper">
                   <div class="card">
  <img src="/images/geo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BCG</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Learn More</a>
  </div>
</div> 
<div class="card" >
    <img src="/images/lite.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">LKK</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Learn more</a>
    </div>
  </div>
  <div class="card" >
    <img src="/images/mpg.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">MPG</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Learn more</a>
    </div>
  </div>
</div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    @include('Home.partials.student-event')
    {{-- team section styles --}}
    <div class="team-section-wrapper">
      <h1 class="team-course-h1"> Meet Our Team</h1>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
              <div class="card">
                <img src="../images/teacher5.jpg" class="card-img-top" alt="..." class="team-img">
                <div class="card-body">
                  <h5 class="card-title">Morris Benty</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  
                </div>
              </div>
              <div class="card">
                <img src="../images/teacher2.jpg" class="card-img-top" alt="..."  class="team-img">
                <div class="card-body">
                  <h5 class="card-title">Sebastiean menchy</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  
                </div>
              </div>
              <div class="card">
                <img src="../images/teacher7.jpg" class="card-img-top" alt="..."  class="team-img">
                <div class="card-body">
                  <h5 class="card-title">Agnes Patricie</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <div class="card">
                <img src="../images/teacher3.jpg" class="card-img-top" alt="..." class="team-img">
                <div class="card-body">
                  <h5 class="card-title">Mathew Meuno</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card">
                <img src="../images/teacher9.jpg" class="card-img-top" alt="..." class="team-img">
                <div class="card-body">
                  <h5 class="card-title">Bamford daniel</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              
                </div>
              </div>
              <div class="card">
                <img src="../images/teacher8.jpg" class="card-img-top" alt="..." class="team-img">
                <div class="card-body">
                  <h5 class="card-title">Tecy Kamanda</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <div class="card">
                <img src="../images/teacher10.jpg" class="card-img-top" alt="..." class="team-img">
                <div class="card-body">
                  <h5 class="card-title">Simon Peter</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card" >
                <img src="../images/teacher4.jpg" class="card-img-top" alt="..." class="team-img">
                <div class="card-body">
                  <h5 class="card-title">Natasha berssaima</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card">
                <img src="../images/teacher6.jpeg" class="card-img-top" alt="..." class="team-img">
                <div class="card-body">
                  <h5 class="card-title">Mark Andrew</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
    </div>
@endsection