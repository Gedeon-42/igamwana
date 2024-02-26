@extends('admin.layouts.app')

@section('content')

<div class="students">
  @if(count($parents)==0)
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
          @foreach($parents as $parent)
          <tr>
            <td class="td-inner">
              <input type="checkbox">
            </td>
            <td class="td-inner">
              <img src="{{$parent->image ? asset('storage/' . $parent->image ) :asset('images/riyad3.jpg')}}" class="p-img"  alt=""/>
            </td>
            <td class="td-inner">{{$parent->FullName}}</td>
            <td class="td-inner">{{$parent->email}}</td>
            <td class="td-inner">{{$parent->section}}</td>
            <td class="td-inner">{{$parent->Parent}}</td>
            <td class="td-inner">{{$parent->DOB}}</td>
            <td class="td-inner">{{$parent->province}}</td>
            <td class="td-inner">{{$parent->district}}</td>
            <td class="td-inner">{{$parent->yearofstudy}}</td>
            <td class="td-inner">{{$parent->gender}}</td>
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