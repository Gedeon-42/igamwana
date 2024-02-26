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
        <div class="notice-description">
            <div class="notice-edit">
                <h1 class="notice-h1">17 june 2023</h1>
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
            
            <h3><a href="">Gedeon mesa</a><span>5 min </span></h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi ipsa quos eligendi deleniti? Nulla itaque, perferendis quasi illo nesciunt odio neque iusto illum.</p>
        </div>
        <div class="notice-description">
            <div class="notice-edit">
                <h1 class="notice-h1">17 May 2023</h1>
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
            <h3><a href="">Gedeon mesa</a><span>5 min </span></h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi ipsa quos eligendi deleniti? Nulla itaque, perferendis quasi illo nesciunt odio neque iusto illum.</p>
        </div>
        <div class="notice-description">
            <div class="notice-edit">
                <h1 class="notice-h1">17 february 2028</h1>
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
            <h3><a href="">Gedeon mesa</a><span>5 min </span></h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi ipsa quos eligendi deleniti? Nulla itaque, perferendis quasi illo nesciunt odio neque iusto illum.</p>
        </div>
        <div class="notice-description">
            <div class="notice-edit">
                <h1 class="notice-h1">5 january 2024</h1>
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
            <h3><a href="">Gedeon mesa</a><span>5 min </span></h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi ipsa quos eligendi deleniti? Nulla itaque, perferendis quasi illo nesciunt odio neque iusto illum.</p>
        </div>
    </div>
</div>
@endsection