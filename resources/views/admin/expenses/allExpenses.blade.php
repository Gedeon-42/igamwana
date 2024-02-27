@extends('admin.layouts.app')

@section('content')
<div class="students">
  @if(count($expenses)==0)
  <div class="norecord-class">
<p> No record Found</p>
  </div>
      
  @else
  <table class="table ">
    <h1 class="h1-top-table"> all expenses</h1>
    <thead>
      <tr class="th-top">
        <th class="th-top">check</th>
        <th class="th-top">expense type</th>
        <th class="th-top">name of customer</th>
        <th class="th-top">amount</th>
        <th class="th-top">status</th>
        <th class="th-top">phone</th>
        <th class="th-top">email</th>
        <th class="th-top">date</th>
        <td>action</td>
      </tr>
    </thead>
    <tbody>
      @foreach($expenses as $expense)
     <td>
        <input type="checkbox" name="" id="">
     </td>
        <td class="td-inner">{{$expense->expense_type}}</td>
        <td class="td-inner">{{$expense->name}}</td>
        <td class="td-inner">{{$expense->amount}} Rwf</td>
        <td class="td-inner">{{$expense->status}}</td>
        <td class="td-inner">{{$expense->phone}}</td>
        <td class="td-inner">{{$expense->email}}</td>
        <td class="td-inner">{{$expense->date}}</td>
        
        <td class="td-flex">
          <a href="/admin/expense/{{$expense['id']}}/edit"><i class="fas fa-edit edit"></i></a>
          <form action="/admin/expense/delete/{{$expense['id']}}" method="POST" class="form-student-delete" >
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
