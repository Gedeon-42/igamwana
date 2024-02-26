@extends('admin.layouts.app')
@section('content')
  <div class="admin-home-wrapper">
    <div class="admin-grid-container">
<div class="box box1">
    <div class="flex-div">
        <div class="flex-div-desc1">
            <p>students<span>| this month</span></p>
        </div>
        <div class="flex-div-filter">
            <h3>...</h3>
        </div>
    </div>
    <div class="dash-content-number">
        <div class="icon-desc">
            <i class="fas fa-user"></i>
        </div>
        <div class="dash-content-desc">
            <h1>2000</h1>
            <p class="increase-stud"><span>10%</span> increases</p>
        </div>
    </div>  
</div>
<div class="box box2">
    <div class="flex-div">
        <div class="flex-div-desc1">
            <p>Revenue<span>| this month</span></p>
        </div>
        <div class="flex-div-filter">
            <h3>...</h3>
        </div>
    </div>
    <div class="dash-content-number">
        <div class="icon-desc2">
            <i class="fas fa-dollar-sign"></i>
        </div>
        <div class="dash-content-desc">
            <h1>$3401</h1>
            <p class="increase-stud"><span>5%</span> increases</p>
        </div>
    </div>
    
</div>

<div class="box box3">
    <div class="flex-div">
        <div class="flex-div-desc1">
            <p>Recent Notice<span>|</span></p>
        </div>
        <div class="flex-div-filter">
            <h3>...</h3>
        </div>
    </div>
    {{-- <div class="recent-activity">
      <div class="recent-activity-desc">
        <h1></h1>
      </div>
        </div> --}}
        <div class="notice-body">
            <div class="notice-description">
                <div class="notice-edit">
                    <h1 class="notice-h1">17 june 2023</h1>
                    <div class="notice-dots">
                        <p>...</p>
                        <div class="edit-notice-link">
                            <a href="/admin/notices">view</a>
                        </div>
                    </div>
                </div>
                
                <h3><a href="" class="name-crimnson">Gedeon mesa</a><span>5 min </span></h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="notice-description">
                <div class="notice-edit">
                    <h1 class="notice-h1">22 february 2024</h1>
                    <div class="notice-dots">
                        <p>...</p>
                        <div class="edit-notice-link">
                            <a href="/admin/notices">view</a>
                        </div>
                    </div>
                </div>
                
                <h3><a href="" class="name-seasgreen">fabrice lokonga</a><span>5 min </span></h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="notice-description">
                <div class="notice-edit">
                    <h1 class="notice-h1">12 may 2024</h1>
                    <div class="notice-dots">
                        <p>...</p>
                        <div class="edit-notice-link">
                            <a href="/admin/notices">view</a>
                        </div>
                    </div>
                </div>
                
                <h3><a href="" class="name-blue">patrick bamford</a><span>5 min </span></h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
{{-- </div> --}}
<div class="box box4">
    <div class="flex-div">
        <div class="flex-div-desc1">
            <p>new student<span>| this year</span></p>
        </div>
        <div class="flex-div-filter">
            <h3>...</h3>
        </div>
    </div>
    <div class="dash-content-number">
        <div class="icon-desc3">
            <i class="fas fa-user"></i>
        </div>
        <div class="dash-content-desc">
            <h1>450</h1>
            <p class="increase-stud"><span>5%</span> increases</p>
        </div>
    </div>
    
</div>
<div class="box box5"> 
    <div class="flex-div">
        <div class="flex-div-desc1">
            <p>Recent expenses<span>| this month</span></p>
        </div>
        <div class="flex-div-filter">
            <h3>...</h3>
        </div>
    </div>
    <div class="expense-table-wrapper">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th class="th-flex-ex">Check <i class="fas fa-sort"></i></th>
                    <th class="th-flex-ex">Customer <i class="fas fa-sort"></th>
                    <th class="th-flex-ex">Expense Type <i class="fas fa-sort"></th>
                    <th class="th-flex-ex">Price <i class="fas fa-sort"></th>
                    <th class="th-flex-ex">Status <i class="fas fa-sort"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td class="name-blue" >Gedeon patrick</td>
                    <td>Transport</td>
                    <td>$2500</td>
                    <td><p class="pending-td">pending</p></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td class="name-blue" >Sebastian Haller</td>
                    <td>Transport</td>
                    <td>$2300</td>
                    <td><p class="approved-td">approved</p></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td class="name-blue" >Samuel Pascal</td>
                    <td>Electricity</td>
                    <td>$289</td>
                    <td><p class="pending-td">pending</p></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td class="name-blue" >Maria carrey</td>
                    <td>Water bill</td>
                    <td>$1200</td>
                    <td><p class="rejected-td">Rejected</p></td>
                </tr>
            </tbody>
          </table>
    </div>
</div>
<div class="box box6">
    <div class="flex-div">
        <div class="flex-div-desc1">
            <p>news and updates<span>| </span></p>
        </div>
        <div class="flex-div-filter">
            <h3>...</h3>
        </div>
    </div>
    <div class="news-update-wrapper">
        <div class="news-update-container">
            <img  class="news-image" src="/images/student1.jpg" alt="">
            <div class="news-content">
                <h1>Lorem ipsum dolor sit amet consectetur.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea explicabo deleniti accusantium!...</p>
            </div>
        </div>
        <div class="news-update-container">
            <img  class="news-image" src="/images/student4.jpg" alt="">
            <div class="news-content">
                <h1>Lorem ipsum dolor sit amet consectetur.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea explicabo deleniti accusantium!...</p>
            </div>
        </div>
        <div class="news-update-container">
            <img  class="news-image" src="/images/student3.jpg" alt="">
            <div class="news-content">
                <h1>Lorem ipsum dolor sit amet consectetur.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea explicabo deleniti accusantium!...</p>
            </div>
        </div>
        <div class="news-update-container">
            <img  class="news-image" src="/images/student2.jpg" alt="">
            <div class="news-content">
                <h1>Lorem ipsum dolor sit amet consectetur.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea explicabo deleniti accusantium!...</p>
            </div>
        </div>
    </div>
</div>
<div class=" box box7">
    <div class="flex-div">
        <div class="flex-div-desc1">
            <p>our Team<span>|this year </span></p>
        </div>
        <div class="flex-div-filter">
            <h3>...</h3>
        </div>
    </div>
    <div class="expense-table-wrapper">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th class="th-flex-ex">Check <i class="fas fa-sort"></i></th>
                    <th class="th-flex-ex">image <i class="fas fa-sort"></th>
                    <th class="th-flex-ex">name<i class="fas fa-sort"></th>
                    <th class="th-flex-ex">email<i class="fas fa-sort"></th>
                    <th class="th-flex-ex">Position <i class="fas fa-sort"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><img class="team-img" src="/images/teacher1.jpg" alt=""></td>
                    <td class="name-blue">Sebestian Mark</td>
                    <td>mark@gmail.com</td>
                    <td>Director</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><img class="team-img" src="/images/teacher1.jpg" alt=""></td>
                    <td class="name-blue">Sebestian Mark</td>
                    <td>Sebastian@gmail.com</td>
                    <td>Cashier</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><img class="team-img" src="/images/teacher5.jpg" alt=""></td>
                    <td class="name-blue">Daniel Olmo</td>
                    <td>daniel@gmail.com</td>
                    <td>Dean of study</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><img class="team-img" src="/images/teacher3.jpg" alt=""></td>
                    <td class="name-blue">Daniel Olmo</td>
                    <td>daniel@gmail.com</td>
                    <td>Animature</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
    </div>
  </div>
    
@endsection