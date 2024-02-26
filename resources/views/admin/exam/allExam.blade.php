@extends('admin.layouts.app')

@section('content')
<div class="students">
  @if(count($exams)==0)
  <div class="norecord-class">
<p> No record Found</p>
  </div>
      
  @else
  <table class="table table-striped ">
    <thead>
      <tr class="th-top">
        <th class="th-top">check</th>
        <th class="th-top">exam type</th>
        <th class="th-top">subject</th>
        <th class="th-top">class</th>
        <th class="th-top">section</th>
        <th class="th-top">start time</th>
        <th class="th-top">start date</th>
        <th class="th-top">action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($exams as $exam)
        <td class="td-inner">{{$exam->exam_type}}</td>
        <td class="td-inner">{{$exam->subject}}</td>
        <td class="td-inner">{{$exam->class}}</td>
        <td class="td-inner">{{$exam->section}}</td>
        <td class="td-inner">{{$exam->startTime}}-{{$exam->endTime}}</td>
        <td class="td-inner">{{$exam->startDate}}</td>
        <td class="td-flex">
          <a href="/admin/exam/{{$exam['id']}}/edit"><i class="fas fa-edit edit"></i></a>
          <form action="/admin/exam/delete/{{$exam['id']}}" method="POST" class="form-student-delete" >
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
