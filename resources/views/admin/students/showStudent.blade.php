@extends('admin.layouts.app')

@section('content')
<div class="show-student-detail">
    <div class="top-student-detail">
        {{-- <h4> {{$student['gender']}}</h4> --}}
        {{-- <h1>{{$student['gender']}}</h1> --}}
        <i class="fas fa-times"></i>
    </div>
    <div class="student-detail-body">
        <img src="/images/riyad3.jpg" class="student-img"  alt="">
        <div class="student-details">
            <h3> About me</h3>
            <div class="student-detail-desc">
                <span> Name:</span>
                <p>{{$student['FullName']}}</p>
            </div>

            <div class="student-detail-desc">
                <span> Gender:</span>
                <p>{{$student['gender']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> Parent's name/guardian:</span>
                <p>{{$student['Parent']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> Date of birth: </span>
                <p>{{$student['DOB']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> email: </span>
                <p>{{$student['email']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> Phone </span>
                <p>{{$student['Phone']}}</p>
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