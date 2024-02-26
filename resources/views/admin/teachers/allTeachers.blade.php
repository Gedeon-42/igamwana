@extends('admin.layouts.app')

@section('content')
<div class="students">
  @if(count($teachers)==0)
  <div class="norecord-class">
<p> No record Found</p>
  </div>
      
  @else
        <table class="table table-striped ">
        <thead>
          <tr class="th-top">
            <th class="th-top">RegNo</th>
            <th class="th-top">photo</th>
            <th class="th-top">names</th>
            <th class="th-top">Email</th>
            <th class="th-top">degree</th>
            <th class="th-top">DOB</th>
            <th class="th-top">province</th>
            <th class="th-top">district</th>
            <th class="th-top">CourseTeach</th>
            <th class="th-top">gender</th> 
            <th class="th-top">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($teachers as $teacher)
          <tr>
            <td class="td-inner">2210</td>
            <td class="td-inner">
               <img src="{{$teacher->image ? asset('storage/' . $teacher->image ) :asset('images/riyad3.jpg')}}" class="p-img"  alt=""/>
            </td>
            <td class="td-inner">{{$teacher->Fullname}}</td>
            <td class="td-inner">{{$teacher->email}}</td>
            <td class="td-inner">{{$teacher->degree}}</td>
            <td class="td-inner">{{$teacher->Parent}}</td>
            <td class="td-inner">{{$teacher->DOB}}</td>
            <td class="td-inner">{{$teacher->province}}</td>
            <td class="td-inner">{{$teacher->district}}</td>
            <td class="td-inner">{{$teacher->courseteach}}</td>
            <td class="td-inner">{{$teacher->gender}}</td>
            <td class="td-flex">
              <a href="/admin/teacher/{{$teacher['id']}}"><i class="fas fa-eye view"></i></a>
              <a href="/admin/teacher/{{$teacher['id']}}/edit"><i class="fas fa-edit edit"></i></a>
              <form action="/admin/teacher/delete/{{$teacher['id']}}" method="POST" class="form-student-delete" >
                @csrf
                @method('DELETE')
              <button class="btn-delete-stud"> <i class="fas fa-trash delete"></i></button>
              </form>
              
              
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endif
</div>
@endsection