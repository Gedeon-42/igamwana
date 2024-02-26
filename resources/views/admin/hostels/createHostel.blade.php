@extends('admin.layouts.app')
@section('content')
<div class="add-exam-wrapper">
    <div class="add-exam-title">
        <h3>add new hostel</h3>
        <i class="fas fa-times"></i>
    </div>
    <form class="add-exam-form" method="POST" action="">
        <label for=""> Hostel name</label>
    <input type="text" name="name" placeholder="Hostel name">
    <label for="">Room Number</label>
<input type="text" name="Room_no" placeholder="room number">
        <label for=""> Hostel Gender </label>
        <select name="gender_type" id="">
            <option value="Male">male</option>
            <option value="female">female</option>
        </select>
    <label for="section"> select room size</label>
    <select name="Room_type" id="">
    <option value="large">Large</option>
    <option value="medium">medium</option>
    <option value="small">small</option>
</select>
<label for="teacher">number of Beds</label>
<input type="text" placeholder="number of bids" name="beds_no">
<label for=""> cost/month</label>
<input type="text" name="amount" placeholder="enter amount">

<button>submit</button>
</form>
</div>

@endsection