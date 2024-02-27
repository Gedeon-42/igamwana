@extends('admin.layouts.app')
@section('content')
<div class="add-exam-wrapper">
    <div class="add-exam-title">
        <h3>add new Notice</h3>
        <i class="fas fa-times"></i>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form class="add-exam-form" action="/admin/notice" method="POST">
        @csrf
      <label for="">Title</label>
      <input type="text" placeholder="notice title" name="title" value="{{old('title')}}">
      @error('title')
          <p class="errors">{{$message}}</p>
      @enderror
      <label for="">details</label>
      <textarea name="details" id="" cols="30" rows="10">
        {{ old('details', 'Write Notice detail Here') }}
    </textarea>

    @error('details')
    <p class="errors">{{$message}}</p>
@enderror
<label for=""> Posted by</label>
<input type="text" name="author"  value="{{old('author')}}" placeholder="write name">
@error('author')
<p class="errors">{{$message}}</p>
@enderror
<label for="">  date</label>
<input type="date"  value="{{old('date')}}" name="date">
@error('date')
<p class="errors">{{$message}}</p>
@enderror
<button>submit</button>
</form>
</div>
@endsection