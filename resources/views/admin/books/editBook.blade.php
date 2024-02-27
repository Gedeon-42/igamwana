@extends('admin.layouts.app')
@section('content')
<div class="addbook-wrapper">
    <div class="add-exam-title">
        <h3> Edit Book information</h3>
        <i class="fas fa-times"></i>
    </div>
    <form  action="/admin/book/{{$book['id']}}" method="POST">
        @csrf
        @method('PUT')
        <div class="add-book-content">
            <div class="add-book-info">
                <label for="">Book name</label>
                <input type="text" name="book_name" value="{{$book['book_name']}}">
            </div>
            <div class="add-book-info">
                <label for="">subject</label>
                <input type="text" name="subject" value="{{$book['subject']}}">
            </div>
            <div class="add-book-info">
                <label for="">Author's name</label>
                <input type="text" name="Author" value="{{$book['Author']}}">
            </div>
            <div class="add-book-info">
                <label for="">class year</label>
                <input type="text" name="class" value="{{$book['class']}}">
            </div>
            <div class="add-book-info">
                <label for="">class section</label>
                <input type="text" name="section" value="{{$book['section']}}">
            </div>
            <div class="add-book-info">
                <label for="">Book IDno</label>
                <input type="text" name="IdNo" value="{{$book['IdNo']}}">
            </div>
            <div class="add-book-info">
                <label for="">published year</label>
                <input type="Date" name="published_year" value="{{$book['published_year']}}">
            </div>
        </div>
        <div class="add-book-btn">
            <button class="btn-add-book">update</button>
            <button class="btn-cancel-book">cancel</button>
        </div>
    </form>
</div>
    
@endsection