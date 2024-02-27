@extends('admin.layouts.app')
@section('content')
<div class="addbook-wrapper">
    <div class="add-exam-title">
        <h3> Add Expense information</h3>
        <i class="fas fa-times"></i>
    </div>
    <form  method="POST" action="/admin/expense">
        @csrf
        <div class="add-book-content">
            <div class="add-book-info">
                <label for="">expense type</label>
                <input type="text" name="expense_type" placeholder="expense type" value="{{old('expense_type')}}">
                @error('expense_type')
                <p class="errors">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="add-book-info">
                <label for="">Name of owner</label>
                <input type="text" name="name" value="{{old('name')}}" placeholder="expense owner">
                @error('name')
                <p class="errors">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="add-book-info">
                <label for="">Expense amount</label>
                <input type="text" name="amount" value="{{old('amount')}}" placeholder="Enter amount">
                @error('amount')
                <p class="errors">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="add-book-info">
                <label for="">status</label>
                <select name="status" id="" value="{{old('status')}}">
                    <option value="paid" {{old('status') == 'paid'?'selected':''}}>paid</option>
                    <option value="pending" {{old('status') == 'pending'?'selected':''}}>pending</option>
                    <option value="onhold" {{old('status') == 'onhold'?'selected':''}}>onhold</option>
                    <option value="active" {{old('active') == 'paid'?'selected':''}}>active</option>
                </select>
            </div>
            <div class="add-book-info">
                <label for="">Phone Number</label>
                <input type="text" name="phone" placeholder="owner's Phone" >
                @error('phone')
                <p class="errors">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="add-book-info">
                <label for="">owner's email</label>
                <input type="text" name="email" placeholder="owner's email" value="{{old('email')}}">
                @error('email')
                <p class="errors">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="add-book-info">
                <label for="">date</label>
                <input type="Date" name="date" value="{{old('date')}}">
                @error('date')
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