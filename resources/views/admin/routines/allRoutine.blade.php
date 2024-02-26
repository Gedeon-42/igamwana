@extends('admin.layouts.app')

@section('content')

<div class="students">
  @if(count($routines)==0)
  <div class="norecord-class">
<p> No record Found</p>
  </div>
      
  @else
        <table class="table table-striped ">
        <thead>
          <tr class="th-top">
            <th class="th-top">check</th>
            <th class="th-top">Day</th>
            <th class="th-top">class</th>
            <th class="th-top">subject</th>
            <th class="th-top">section</th>
            <th class="th-top">teacher</th>
            <th class="th-top">time</th>
            <th class="th-top">Date</th>
            <th class="th-top">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($routines as $routine)
          <tr>
            <td class="td-inner">
              <input type="checkbox">
            </td>
            <td class="td-inner">{{$routine->day}}</td>
            <td class="td-inner">{{$routine->class}}</td>
            <td class="td-inner">{{$routine->section}}</td>
            <td class="td-inner">{{$routine->teacher}}</td>
            <td class="td-inner">{{$routine->DOB}}</td>
            <td class="td-inner">{{$routine->startTime}}-{{$routine->endtime}}</td>
            <td class="td-inner">{{$routine->date}}</td>
            <td class="td-flex">
              <a href="/admin/routine/{{$routine['id']}}/edit"><i class="fas fa-edit edit"></i></a>
              <form action="/admin/routine/delete/{{$routine['id']}}" method="POST" class="form-student-delete" >
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