<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student MS</title>
    <link rel="stylesheet" href="/assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
 <div class="nav-home-wrapper">
        <nav>
 <div class="logo">
    <h1 class="logo-home">Student MS</h1>
 </div>
 <div class="nav-home-links">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/courses">Courses</a></li>
        <li><a href="/events">events</a></li>
        <li><a href="/contact">contact</a></li>
        <li class="get-started"><a href="/application" >Apply</a></li>
    </ul>
 </div>
        </nav>
    </div>
    @yield('content')
    <div class="footer-home-wrapper">
        <div class="footer-description">
            <div class="footer-content1">
                <div class="footer-h1-wrapper">
                    <h1>student ms</h1>
                </div>
                <div class="location-home">
                    <p>kigali rwanda</p>
                <p>KNave 567</p>
                <p>kimihurura</p>
                <p><span>Email</span>:ment@gmail.com</p>
                <p><span>Phone</span>:+25078907345</p>
                </div>
                
            </div>
            <div class="footer-content2">
                <div class="footer-h1-wrapper">
                    <h1>useful links</h1>
                </div>
                <ul>
                    <li><i class="fas fa-angle-right"></i><a href="">Home</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="">about</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="">events</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="">courses</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="">contact</a></li>
                </ul>
            </div>
            <div class="footer-content3">
                <div class="footer-h1-wrapper">
                    <h1>Join our news letter</h1>
                </div>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, corporis.</p>
               <form action="" method="post" class="form-subscribe">
                <input type="email" placeholder="enter your email">
                <button>subscribe</button>
               </form>
            </div>
        </div>
        <footer>
            <div class="cop-right">
                <p>&copy; Copright .Allright Reserved</p>
            </div>
            <div class="footer-link-icons">
                <a href=""> <i class="fab fa-facebook-f"></i></a>
                <a href=""> <i class="fab fa-twitter-f"></i></a>
                <a href=""> <i class="fab fa-whatsapp-f"></i></a>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>