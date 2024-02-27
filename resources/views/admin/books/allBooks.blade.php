@extends('admin.layouts.app')

@section('content')
<div class="students">
  @if(count($books)==0)
  <div class="norecord-class">
<p> No record Found</p>
  </div>
      
  @else
  <h1 class="h1-top-table"> all exams Books</h1>
  <table class="table">
    <thead>
      <tr class="th-top">
        <th class="th-top">check</th>
        <th class="th-top">Book name</th>
        <th class="th-top">subject</th>
        <th class="th-top">class</th>
        <th class="th-top">section</th>
        <th class="th-top">Author</th>
        <th class="th-top">IdNo</th>
        <th class="th-top">published year</th>
        <th class="th-top">action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($books as $book)
     <td class="td-inner">
      <input type="checkbox" name="" id="">
     </td>
        <td class="td-inner">{{$book->book_name}}</td>
        <td class="td-inner">{{$book->subject}}</td>
        <td class="td-inner">{{$book->class}}</td>
        <td class="td-inner">{{$book->section}}</td>
        <td class="td-inner">{{$book->Author}}</td>
        <td class="td-inner">{{$book->IdNo}}</td>
        <td class="td-inner">{{$book->published_year}}</td>
        
        <td class="td-flex">
          <a href="/admin/book/{{$book['id']}}/edit"><i class="fas fa-edit edit"></i></a>
          <form action="/admin/book/delete/{{$book['id']}}" method="POST" class="form-student-delete" >
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
