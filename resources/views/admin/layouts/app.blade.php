<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>student management</title>
    {{-- @vite('resources/css/app.css') --}}
</head>


<body>
    <div class="admin-nav">
        <div class="logo">
            <h1>Student Ms</h1>
</div>
<div class="admin-search">
<i  class="fas fa-bars menu-bar-top"></i>
<input type="text" name="seach" placeholder="search">
</div>
<div class="notification-profile">
    <div class="notifications">
        <div class="abolutee">
            <i class="fas fa-bell"></i>
            <div class="four-m">
                4
            </div>
        </div>
        <div class="abolutee">
          <i class="far fa-comment-alt books"></i>
            <div class="five-m">
                7
            </div> 
        </div>
    </div>
    <div class="profile-pic">
        <img  class="p-img" src="/images/riyad3.jpg" alt="">
        john doe
        <i class="fas fa-angle-down"></i>
    </div>
</div>
    </div>
    <!-- sidebar components -->
    <div class="side-bar-admin">
        <div class="admin-links">
            <div class="main-link">
                <a href="/admin/dashboard">Dashboard</a>
            </div>
        </div>
            
        <div  class="top-list" id="accordion">
            <div class="custom-card">
              <div class="custom-header" data-bs-toggle="collapse" href="#collapseOne">
                <div class="link1">
                  <i class="fas fa-user"></i>
                  student
                </div>
                <a class="btn-drops" data-bs-toggle="collapse" href="#collapseOne">
                  <i class="fas fa-angle-right"></i>
                </a>
              </div>
              <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                <div class="card-body">
                  <div class="descriptions">
                    <a href="/admin/students">all student</a>
                    <a href="/admin/students/create">Admit Student</a>
                    <a href="">student promotion</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="custom-card">
              <div class="custom-header" data-bs-toggle="collapse" href="#collapseTwo">
                <div class="link1">
                  <i class="fas fa-user-alt"></i>
                  teacher
                </div>
                <a class="collapsed btn-drops" data-bs-toggle="collapse" href="#collapseTwo">
                <i class="fas fa-angle-right"></i>
              </a>
              </div>
              <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                  <div class="descriptions">
                    <a href="/admin/teachers">all teachers</a>
                    {{-- <a href="admin/teacher/{teacher}">Teacher Details</a> --}}
                    <a href="/admin/teacher/create">Admit Teacher</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="custom-card">
              <div class="custom-header" data-bs-toggle="collapse" href="#collapseThree">
                <div class="link1">
                  <i class="fas fa-book"></i>
                  exam
                </div>
                <a class="collapsed btn-drops" data-bs-toggle="collapse" href="#collapseThree">
                  <i class="fas fa-angle-right"></i>
                </a>
              </div>
              <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                  <div class="descriptions">
                    <a href="/admin/exams">exam schedule</a>
                    <a href="/admin/exam/create">new exam</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="custom-card">
              <div class="custom-header" data-bs-toggle="collapse" href="#collapseFour">
                <div class="link1">
                  <i class="fas fa-bars"></i>
                  library
                </div>
                <a class="collapsed btn-drops" data-bs-toggle="collapse" href="#collapseFour">
                  <i class="fas fa-angle-right"></i>
                </a>
              </div>
              <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                  <div class="descriptions">
                    <a href="/admin/books">All books</a>
                    <a href="/admin/book/create">Add books</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="custom-card">
              <div class="custom-header" data-bs-toggle="collapse" href="#collapseFive">
                <div class="link1">
                  <i class="fas fa-dollar-sign"></i>
                  Expenses
                </div>
                <a class="collapsed btn-drops" data-bs-toggle="collapse" href="#collapseFive">
                  <i class="fas fa-angle-right"></i>
                </a>
              </div>
              <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                  <div class="descriptions">
                    <a href="/admin/expenses">All expenses</a>
                    <a href="/admin/expense/create">Add expense</a>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="custom-card">
              <div class="custom-header" data-bs-toggle="collapse" href="#collapseSix">
                <div class="link1">
                  <i class="fas fa-user"></i>
                  Parent
                </div>
                <a class="collapsed btn-drops" data-bs-toggle="collapse" href="#collapseSix">
                  <i class="fas fa-angle-right"></i>
                </a>
              </div>
              <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                  <div class="descriptions">
                    <a href="/admin/parents">All Parent</a>
                    {{-- <a href="/admin/parent/{parent}">Parent Details</a> --}}
                    <a href="/admin/parent/create"> Add Parent</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="custom-card">
              <div class="custom-header" data-bs-toggle="collapse" href="#collapseSeven">
                <div class="link1">
                  <i class="fas fa-bell"></i>
                  Notice
                </div>
                <a class="collapsed btn-drops" data-bs-toggle="collapse" href="#collapseSeven">
                  <i class="fas fa-angle-right"></i>
                </a>
              </div>
              <div id="collapseSeven" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                  <div class="descriptions">
                    
                    <a href="/admin/notices">All Notice</a>
                    <a href="/admin/notice/create">Add Notice</a>
                    
                  </div>
                </div>
              </div>
              
            </div>
            <div class="custom-card">
              <div class="custom-header" data-bs-toggle="collapse" href="#collapseEight">
                <div class="link1">
                  <i class="fas fa-clock"></i>
                  Class Routine
                </div>
                <a class="collapsed btn-drops" data-bs-toggle="collapse" href="#collapseEight">
                  <i class="fas fa-angle-right"></i>
                </a>
              </div>
              <div id="collapseEight" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                  <div class="descriptions">
                    <a href="/admin/routines">All Routine</a>
                    <a href="/admin/routine/create">Add Routine</a>
                    
                  </div>
                </div>
              </div>
              
            </div>
            <div class="custom-card">
              <div class="custom-header" data-bs-toggle="collapse" href="#collapseNine">
                <div class="link1">
                  <i class="fas fa-house"></i>
                  Hostel 
                </div>
                <a class="collapsed btn-drops" data-bs-toggle="collapse" href="#collapseNine">
                  <i class="fas fa-angle-right"></i>
                </a>
              </div>
              <div id="collapseNine" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                  <div class="descriptions">
                    <a href="/admin/hostels">All Hostle</a>
                    <a href="/admin/hostel/create">Add Hostel</a>
                  </div>
                </div>
              </div>
              
            </div>

          </div>
        </div>
    </div>
    <div class="outlet-dashboard">
        <x-flash-message />
        @yield('content')
    </div>
    <div class="admin-footer">
      <p>&copy; Copyright <span>Student Ms</span> . Alright Reserved</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
