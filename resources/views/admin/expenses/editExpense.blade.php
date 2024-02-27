@extends('admin.layouts.app')
@section('content')
<div class="addbook-wrapper">
    <div class="add-exam-title">
        <h3> Edit Expense information</h3>
        <i class="fas fa-times"></i>
    </div>
    <form method="Post" action="/admin/expense/{{$expense['id']}}" >
        @csrf
        @method('PUT')
        <div class="add-book-content">
            <div class="add-book-info">
                <label for="">expense type</label>
                <input type="text" name="expense_type" value="{{$expense['expense_type']}}">
            </div>
            <div class="add-book-info">
                <label for="">Name of owner</label>
                <input type="text" name="name" value="{{$expense['name']}}" >
            </div>
            <div class="add-book-info">
                <label for="">Expense amount</label>
                <input type="text" name="amount" value="{{$expense['amount']}}">
            </div>
            <div class="add-book-info">
                <label for="">status</label>
                <select name="status" id="">
                    <option value="paid" {{$expense->status =='paid' ? 'selected':''}}>paid</option>
                    <option value="pending" {{$expense->status =='pending' ? 'selected':''}}>pending</option>
                    <option value="onhold"  {{$expense->status =='onhold' ? 'selected':''}}>onhold</option>
                    <option value="active" {{$expense->status =='active' ? 'selected':''}}>active</option>
                </select>
            </div>
            <div class="add-book-info">
                <label for="">Phone Number</label>
                <input type="text" name="phone" value="{{$expense['phone']}}">
            </div>
            <div class="add-book-info">
                <label for="">owner's email</label>
                <input type="text" name="email" value="{{$expense['email']}}">
            </div>
            <div class="add-book-info">
                <label for="">date</label>
                <input type="Date" name="date" value="{{$expense['date']}}">
            </div>
        </div>
        <div class="add-book-btn">
            <button class="btn-add-book">update</button>
            <button class="btn-cancel-book">cancel</button>
        </div>
    </form>
</div>
    
@endsection