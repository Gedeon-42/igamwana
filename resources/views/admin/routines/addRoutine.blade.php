@extends('admin.layouts.app')
@section('content')
<div class="add-exam-wrapper">
    <div class="add-exam-title">
        <h3>add new routine</h3>
        <i class="fas fa-times"></i>
    </div>
    <form method="POST" action="" class="add-exam-form">
        <label for=""> Day</label>
        <select name="day" id="">
            <option value="monday">monday</option>
            <option value="tuesday">tuesday</option>
            <option value="wednesday">wednesday</option>
            <option value="thursday">thursday</option>
            <option value="friday">friday</option>
            <option value="suturday">suturday</option>
            <option value="sunday">sunday</option>
        </select>
    <label for="">selct class year</label>
    <select name="class" id="">
        <option value="1">1</option>
        <option value="2">3</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>
        <label for=""> select class</label>
        <select name="subject" id="">
            <option value="Mathematics">Mathematics</option>
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Biology">Biology</option>
            <option value="Economics">Economics</option>
            <option value="English">English</option>
            <option value="Computer">Computer</option>
        </select>
    <label for="section"> select section</label>
    <select name="section" id="">
    <option value="Olevel">Olevel</option>
    <option value="MPC">MPC</option>
    <option value="MCE">MCE</option>
    <option value="PCM">PCM</option>
    <option value="MEG">MEG</option>
    <option value="MCB">MCB</option>
    <option value="PCB">PCB</option>
</select>
<label for="teacher">Teacher</label>
<input type="text" placeholder="teacher's name" name="teacher">
<div class="time-flex-date">
    <div class="time-lable">
        <label for="">start time</label>
        <input type="time" name="startTime" step="any">
    </div>
    <div class="time-lable">
        <label for="">end date</label>
        <input type="time"  name="endtime" step="any">
    </div>
</div>
<label for=""> Start date</label>
<input type="Date" name="date">

<button>submit</button>
</form>
</div>

@endsection