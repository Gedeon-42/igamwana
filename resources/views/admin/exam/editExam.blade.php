@extends('admin.layouts.app')
@section('content')
<div class="add-exam-wrapper">
    <div class="add-exam-title">
        <h3>Updating new exam</h3>
        <i class="fas fa-times"></i>
    </div>
    <form class="add-exam-form" action="/admin/exam/{{$exam['id']}}" method="POST">
        @csrf
        @method('PUT')
        <label for=""> Exam  type</label>
        <select name="exam_type" id="exam_type">

            <option value="Theoretical" {{ $exam->exam_type == 'Theoretical' ? 'selected' : '' }}>Theoretical</option>
                <option value="Practical" {{ $exam->exam_type == 'Practical' ? 'selected' : '' }}>Practical</option>
        </select>

        <label for=""> select subject</label>
        <select name="subject" id="subject">
            <option value="Mathematics" {{$exam->subject == 'Mathematics' ? 'selected':''}} >Mathematics</option>
            <option value="Physics" {{$exam->subject == 'Physics' ? 'selected':''}} >Physics</option>
            <option value="Chemistry" {{$exam->subject == 'Chemistry' ? 'selected':''}}>Chemistry</option>
            <option value="Biology" {{$exam->subject == 'Biology' ? 'selected':''}}>Biology</option>
            <option value="Economics" {{$exam->subject == 'Economics' ? 'selected':''}}>Economics</option>
            <option value="English" {{$exam->subject == 'English' ? 'selected':''}}>English</option>
            <option value="Computer" {{$exam->subject == 'Computer' ? 'selected':''}}>Computer</option>
        </select>
        <label for="">select class</label>
        <select name="class" id="class">
        <option value="year 1" {{$exam->class == 'year 1' ? 'selected':''}}> year 1</option>
        <option value="year 2" {{$exam->class == 'year 2' ? 'selected':''}}> year 2</option>
        <option value="year 3" {{$exam->class == 'year 3' ? 'selected':''}}> year 3</option>
        <option value="year 4"  {{$exam->class == 'year 4' ? 'selected':''}}> year 4</option>
        <option value="year 5"  {{$exam->class == 'year 5' ? 'selected':''}}> year 5</option>
        <option value="year 6"  {{$exam->class == 'year 5' ? 'selected':''}}> year 6</option>
    </select>
    <label for="section"> select section</label>
    <select name="section" id="section">
    <option value="Olevel" {{$exam->section == 'Olevel' ? 'selected':''}}>Olevel</option>
    <option value="MPC"  {{$exam->section == 'MPC' ? 'selected':''}}>MPC</option>
    <option value="MCE" {{$exam->section == 'MCE' ? 'selected':''}}>MCE</option>
    <option value="PCM" {{$exam->section == 'PCM' ? 'selected':''}}>PCM</option>
    <option value="MEG" {{$exam->section == 'MEG' ? 'selected':''}}>MEG</option>
    <option value="MCB" {{$exam->section == 'MCB' ? 'selected':''}}>MCB</option>
</select>
<div class="time-flex-date">
    <div class="time-lable">
        <label for="">start time</label>
        <input type="time" name="startTime" value="{{$exam['startTime']}}" step="any">
    </div>
    <div class="time-lable">
        <label for="">end date</label>
        <input type="time" name="endTime" value="{{$exam['endTime']}}" step="any">
    </div>
</div>
<label for=""> Start date</label>
<input type="Date" value="{{$exam['startDate']}}" name="startDate">

<button>submit</button>
</form>
</div>

@endsection