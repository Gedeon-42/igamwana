@extends('admin.layouts.app')
@section('content')
<div class="Notice-wrapper">
    <div class="notice-head">
        <h1 class="parent-stud-info">Notice Board</h1>
        <div class="form-search-notice">
            <form action="">
                <input type="text" name="search" placeholder="search by date">
                <button>search</button>
            </form>
        </div>
    </div>
    
    <div class="notice-body">
       @foreach ($notices as $notice)
       <div class="notice-description">
        <div class="notice-edit">
            <h1 class="notice-h1">{{$notice->date}}</h1>
            <div class="notice-dots">
                <p>...</p>
                <div class="edit-notice-link">
                    <a href="/admin/notice/{notice}/edit">Edit</a>
                    <form action="">
                        <button>Delete</button>
                    </form>
                </div>
            </div>
        </div>
        
        <h3><a href="">{{$notice->title}}</a><span>5 min </span></h3>
        <p>
            {{$notice->details}}
        </p>
    </div>  
       @endforeach
    </div>
</div>
@endsection