@extends('admin.layouts.app')
@section('content')
<div class="add-exam-wrapper">
    <div class="add-exam-title">
        <h3>edit Notice</h3>
        <i class="fas fa-times"></i>
    </div>
    <div class="add-exam-form">
      <label for="">Title</label>
      <input type="text" placeholder="notice title" name="title">
      <label for="">details</label>
    <textarea name="details" id="" cols="30" rows="10">
        Write Notice detail Here
    </textarea>

<label for=""> Posted by</label>
<input type="text" name="author" placeholder="write name">
<label for="">  date</label>
<input type="Date" name="date">

<button>submit</button>
    </div>
</div>
@endsection