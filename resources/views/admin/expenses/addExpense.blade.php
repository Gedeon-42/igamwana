@extends('admin.layouts.app')
@section('content')
<div class="addbook-wrapper">
    <div class="add-exam-title">
        <h3> Add Expense information</h3>
        <i class="fas fa-times"></i>
    </div>
    <form  method="POST" action="">
        <div class="add-book-content">
            <div class="add-book-info">
                <label for="">expense type</label>
                <input type="text" name="expense-type">
            </div>
            <div class="add-book-info">
                <label for="">Name of owner</label>
                <input type="text" name="name" >
            </div>
            <div class="add-book-info">
                <label for="">Expense amount</label>
                <input type="text" name="amount">
            </div>
            <div class="add-book-info">
                <label for="">status</label>
                <select name="status" id="">
                    <option value="paid">paid</option>
                    <option value="pending">pending</option>
                    <option value="onhold">onhold</option>
                    <option value="active">active</option>
                </select>
            </div>
            <div class="add-book-info">
                <label for="">Phone Number</label>
                <input type="text" name="phone">
            </div>
            <div class="add-book-info">
                <label for="">email</label>
                <input type="text" name="email">
            </div>
            <div class="add-book-info">
                <label for="">date</label>
                <input type="Date" name="date">
            </div>
        </div>
        <div class="add-book-btn">
            <button class="btn-add-book">add</button>
            <button class="btn-cancel-book">cancel</button>
        </div>
    </form>
</div>
    
@endsection