@extends('admin.layouts.app')

@section('content')
<div class="show-student-detail">
    <div class="top-student-detail">
        {{-- <i class="fas fa-times"></i> --}}
    </div>
    <div class="student-detail-body">
        <img src="{{$parent->prtImage ? asset('storage/' . $parent->prtImage ):asset('images/noImage.jpg')}}" class="student-img" alt=""/>
        <div class="student-details">
            <h3>Student details</h3>
            <div class="student-detail-desc">
                <span> Father's Name:</span>
                <p>{{$parent['fatherName']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> Mother's Name:</span>
                <p>{{$parent['motherName']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> nationality:</span>
                <p>{{$parent['nationality']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> student's Firstname:</span>
                <p>{{$parent['studentFname']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> student's Lastname:</span>
                <p>{{$parent['studentLname']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> Date of birth: </span>
                <p>{{$parent['DOB']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> class </span>
                <p>{{$parent['class']}}</p>
            </div>
            <div class="student-detail-desc">
                <span> section/combination </span>
                <p>{{$parent['section']}}</p>
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