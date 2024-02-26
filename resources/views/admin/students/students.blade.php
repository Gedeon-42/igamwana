@extends('admin.layouts.app')

@section('content')

<div class="students">
  @if(count($students)==0)
  <div class="norecord-class">
<p> No record Found</p>
  </div>
      
  
  @else
        <table class="table table-striped ">
        <thead>
          <tr class="th-top">
            <th class="th-top">check</th>
            <th class="th-top">photo</th>
            <th class="th-top">names</th>
            <th class="th-top">Email</th>
            <th class="th-top">section</th>
            <th class="th-top">parent name</th>
            <th class="th-top">DOB</th>
            <th class="th-top">province</th>
            <th class="th-top">district</th>
            <th class="th-top">year</th>
            <th class="th-top">gender</th> 
            <th class="th-top">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($students as $student)
          <tr>
            <td class="td-inner">
              <input type="checkbox">
            </td>
            <td class="td-inner">
              <img src="{{$student->image ? asset('storage/' . $student->image ) :asset('images/riyad3.jpg')}}" class="p-img"  alt=""/>
            </td>
            <td class="td-inner">{{$student->FullName}}</td>
            <td class="td-inner">{{$student->email}}</td>
            <td class="td-inner">{{$student->section}}</td>
            <td class="td-inner">{{$student->Parent}}</td>
            <td class="td-inner">{{$student->DOB}}</td>
            <td class="td-inner">{{$student->province}}</td>
            <td class="td-inner">{{$student->district}}</td>
            <td class="td-inner">{{$student->yearofstudy}}</td>
            
            <td class="td-inner">{{$student->gender}}</td>
            <td class="td-flex">
              <a href="/admin/student/{{$student['id']}}"><i class="fas fa-eye view"></i></a>
              <a href="/admin/students/{{$student['id']}}/edit"><i class="fas fa-edit edit"></i></a>
              <form action="/admin/students/delete/{{$student['id']}}" method="POST" class="form-student-delete" >
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