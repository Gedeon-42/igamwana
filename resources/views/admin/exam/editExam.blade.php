@extends('admin.layouts.app')
@section('content')
<div class="add-exam-wrapper">
    <div class="add-exam-title">
        <h3>add new exam</h3>
        <i class="fas fa-times"></i>
    </div>
    <div class="add-exam-form">
        <label for=""> Exam  type</label>
        <select name="exam_type" id="">
            <option value="theoretical">theoretical</option>
            <option value="paractical">paractical</option>
        </select>

        <label for=""> select subject</label>
        <select name="subject" id="">
            <option value="Mathematics">Mathematics</option>
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Biology">Biology</option>
            <option value="Economics">Economics</option>
            <option value="English">English</option>
            <option value="Computer">Computer</option>
        </select>
        <label for="">select class</label>
        <select name="class" id="">
        <option value="year 1"> year 1</option>
        <option value="year 2"> year 3</option>
        <option value="year 3"> year 3</option>
        <option value="year 4"> year 4</option>
        <option value="year 5"> year 5</option>
        <option value="year 6"> year 6</option>
    </select>
    <label for="section"> select section</label>
    <select name="section" id="">
    <option value="Olevel">Olevel</option>
    <option value="MPC">MPC</option>
    <option value="MCE">MCE</option>
    <option value="PCM">PCM</option>
    <option value="MEG">MEG</option>
    <option value="MCB">MCB</option>
</select>
<div class="time-flex-date">
    <div class="time-lable">
        <label for="">start time</label>
        <input type="time" name="startTime" step="any">
    </div>
    <div class="time-lable">
        <label for="">end date</label>
        <input type="time" name="endTime" step="any">
    </div>
</div>
<label for=""> Start date</label>
<input type="Date" name="startDate">

<button>submit</button>
    </div>
</div>

@endsection