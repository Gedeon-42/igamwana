@extends('admin.layouts.app')
@section('content')
<div class="addbook-wrapper">
    <div class="add-exam-title">
        <h3>Book information</h3>

        <i class="fas fa-times"></i>
    </div>
    <form method="POST" action="/admin/book">
        @csrf
        <div class="add-book-content">
            <div class="add-book-info">
                <label for=""> Add Book name</label>
                <input type="text" name="book_name" placeholder="Book name" value="{{old('book_name')}}">
                @error('book_name')
                <p class="errors">
                    {{ $message }}
                </p>
            @enderror
            </div>
            <div class="add-book-info">
                <label for="">subject</label>
                <input type="text" name="subject" placeholder="subject" value="{{old('subject')}}">
                @error('subject')
                <p class="errors">
                    {{ $message }}
                </p>
            @enderror
            </div>
            <div class="add-book-info">
                <label for="">Author's name</label>
                <input type="text" name="Author" placeholder="Author name" value="{{old('Author')}}">
                @error('Author')
                <p class="errors">
                    {{ $message }}
                </p>
            @enderror
            </div>
            <div class="add-book-info">
                <label for="">class </label>
                <input type="text" name="class" value="{{old('class')}}" placeholder="class year">
                @error('class')
                <p class="errors">
                    {{ $message }}
                </p>
            @enderror
            </div>
            <div class="add-book-info">
                <label for="">class combination</label>
                <input type="text" name="section" placeholder="combination" value="{{old('section')}}">
                @error('section')
                <p class="errors">
                    {{ $message }}
                </p>
            @enderror
            </div>
            <div class="add-book-info">
                <label for="">Book IDno</label>
                <input type="text" name="IdNo" value="{{old('IdNo')}}" placeholder="Book Id_no">
                @error('IdNo')
                <p class="errors">
                    {{ $message }}
                </p>
            @enderror
            </div>
            <div class="add-book-info">
                <label for="">published year</label>
                <input type="Date" name="published_year" placeholder="published year" value="{{old('published_year')}}">
                @error('published_year')
                <p class="errors">
                    {{ $message }}
                </p>
            @enderror
            </div>
        </div>
        <div class="add-book-btn">
            <button class="btn-add-book">add</button>
            <button class="btn-cancel-book">cancel</button>
        </div>
    </form>
</div>
    
@endsection