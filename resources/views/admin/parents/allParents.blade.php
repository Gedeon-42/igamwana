@extends('admin.layouts.app')

@section('content')

<div class="students">
  @if(count($parents)==0)
  <div class="norecord-class">
<p> No record Found</p>
  </div>
      
  @else
  <h1 class="h1-top-table"> all Parents</h1>
        <table class="table ">
        <thead>
          <tr class="th-top">
            <th class="th-top">check</th>
            <th class="th-top">photo</th>
            <th class="th-top">father_name</th>
            <th class="th-top">mother_name</th>
            <th class="th-top">Nationality</th>
            <th class="th-top">student_firstname</th>
            <th class="th-top">student_lastname</th>
            <th class="th-top">Student_Image</th>
            <th class="th-top">section</th>
            <th class="th-top">gender</th>
            <th class="th-top">class</th>
            <th class="th-top">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($parents as $parent)
          <tr>
            <td class="td-inner">
              <input type="checkbox">
            </td>
            <td class="td-inner">
              @if ($parent->prtImage)
              <img src="{{ asset('storage/' . $parent->prtImage) }}" class="p-img" alt="Parent Image">
              @else
                  <img src="{{ asset('images/riyad3.jpg') }}" class="p-img" alt="Default Image">
              @endif
          </td>
            <td class="td-inner">{{$parent->fatherName}}</td>
            <td class="td-inner">{{$parent->motherName}}</td>
            <td class="td-inner">{{$parent->nationality}}</td>
            <td class="td-inner">{{$parent->studentFname}}</td>
            <td class="td-inner">{{$parent->studentLname}}</td>
            <td class="td-inner">
              @if ($parent->prtImage)
              <img src="{{ asset('storage/' . $parent->studImage) }}" class="p-img" alt="Parent Image">
              @else
                  <img src="{{ asset('images/nophoto.png') }}" class="p-img" alt="Default Image">
              @endif
          </td>
            <td class="td-inner">{{$parent->section}}</td>
            <td class="td-inner">{{$parent->gender}}</td>
            <td class="td-inner">{{$parent->class}}</td>
            <td class="td-flex">
              <a href="/admin/parent/{{$parent['id']}}"><i class="fas fa-eye view"></i></a>
              <a href="/admin/parent/{{$parent['id']}}/edit"><i class="fas fa-edit edit"></i></a>
              <form action="/admin/parent/delete/{{$parent['id']}}" method="POST" class="form-student-delete" >
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