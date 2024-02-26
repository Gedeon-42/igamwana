@extends('admin.layouts.app')
@section('content')
<div class="add-exam-wrapper">
    <div class="add-exam-title">
        <h3>add new exam</h3>
        <i class="fas fa-times"></i>
    </div>
    <div x-data = "{loading:false}" >
        <div x-show = "loading" class="loading-wrapper">
            <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </div>
        </div>
            </div>
            <form method="POST" x-data="{ loading: false }" x-on:submit="loading = true; setTimeout(() => { $refs.form.submit(); }, 5000)" action="/admin/exam" class="add-exam-form" x-ref="form">     
        @csrf
        <label for=""> Exam  type</label>
        <select name="exam_type" id="" value="{{old('exam_type')}}">
            <option value="theoretical" {{old('exam_type') =='theoretical' ? 'selected':''}}>theoretical</option>
            <option value="practical" {{old('exam_type') =='practical' ? 'selected':''}}>practical</option>
        </select>

        <label for=""> select subject</label>
        <select name="subject" value="{{old('subject')}}" id="">
            <option value="Mathematics" {{old('subject') =='Mathematics' ? 'selected':''}}>Mathematics</option>
            <option value="Physics" {{old('subject') =='Physics' ? 'selected':''}}>Physics</option>
            <option value="Chemistry" {{old('subject') =='Chemistry' ? 'selected':''}}>Chemistry</option>
            <option value="Biology" {{old('subject') =='Biology' ? 'selected':''}}>Biology</option>
            <option value="Economics" {{old('subject') =='Economics' ? 'selected':''}}>Economics</option>
            <option value="English" {{old('subject') =='English' ? 'selected':''}}>English</option>
            <option value="Computer" {{old('subject') =='Computer' ? 'selected':''}}>Computer</option>
        </select>
        <label for="">select class</label>
        <select name="class" id="" value="{{old('class')}}" >
        <option value="year 1"   {{old('class') =='year 1' ? 'selected':''}}> year 1</option>
        <option value="year 2"   {{old('class') =='year 3' ? 'selected':''}}> year 3</option>
        <option value="year 3"   {{old('class') =='year 3' ? 'selected':''}}> year 3</option>
        <option value="year 4"   {{old('class') =='year 4' ? 'selected':''}}> year 4</option>
        <option value="year 5"   {{old('class') =='year 5' ? 'selected':''}}> year 5</option>
        <option value="year 6"   {{old('class') =='year 6' ? 'selected':''}}> year 6</option>
    </select> 
    <label for="section"> select section</label>
    <select name="section" id="" value="{{old('section')}}">
    <option value="Olevel" {{old('section') =='Olevel' ? 'selected':''}}>Olevel</option>
    <option value="MPC" {{old('section') =='MPC' ? 'selected':''}}>MPC</option>
    <option value="MCE" {{old('section') =='MCE' ? 'selected':''}} >MCE</option>
    <option value="PCM"  {{old('section') =='PCM' ? 'selected':''}}>PCM</option>
    <option value="MEG"  {{old('section') =='MEG' ? 'selected':''}}>MEG</option>
    <option value="MCB"  {{old('section') =='MCB' ? 'selected':''}}>MCB</option>
</select>
<div class="time-flex-date">
    <div class="time-lable">
        <label for="">start time</label>
        <input type="time" name="startTime" value="{{old('startTime')}}" step="any">
        @error('startTime')
<p class="errors">{{$message}}</p> 
@enderror
    </div>
    <div class="time-lable">
        <label for="">end date</label>
        <input type="time" name="endTime" value="{{old('endTime')}}" step="any">
        @error('endTime')
<p class="errors">{{$message}}</p> 
@enderror
    </div>
</div>
<label for=""> Start date</label>
<input type="Date" value="{{old('startDate')}}" name="startDate">
@error('startDate')
<p class="errors">{{$message}}</p> 
@enderror
<button>submit</button>
    </form>
   
</div>

@endsection
