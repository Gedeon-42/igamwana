@extends('admin.layouts.app')

@section('content')
<div class="show-student-detail">
    <div class="top-student-detail">
        <i class="fas fa-times"></i>
    </div>
    <div class="student-detail-body">
        <img src="/images/riyad3.jpg" class="student-img"  alt="">
        <div class="student-details">
            <h3> About me</h3>
            <div class="student-detail-desc">
                <span> Name:</span>
                <p>{{$teacher['FullName']}}</p>
            </div>

            <div class="student-detail-desc">
                <span> Gender:</span>
                <p>{{$teacher['gender']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> Highest Degree level:</span>
                <p>{{$teacher['degree']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> Date of birth: </span>
                <p>{{$teacher['DOB']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> email: </span>
                <p>{{$teacher['email']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> Phone </span>
                <p>{{$teacher['Phone']}}</p>
            </div>
        </div>
        <div class="student-detail-action">
            <i class="fas fa-print view"></i>
              <i class="fas fa-edit edit"></i>
              <i class="fas fa-download delete"></i>
        </div>
    </div>
</div>
@endsection