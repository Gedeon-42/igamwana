@extends('admin.layouts.app')
@section('content')
<div class="parents-wrapper">
    <div class="parent-form-wrapper">
        <div class="add-parent-top">
            <h1 class="parent-stud-info">Edit parent form</h1>
        </div>
     <form action="/admin/parent/{{$parent['id']}}" method="post" class="parent-form-container">
        @csrf
        @method('PUT')
        <h1 class="parent-stud-info">Parent Information</h1>
        <div class="parent-info">
        <div class="parent-desc">
            <label for="">Father's  Names</label>
            <input type="text" name="fatherName" value="{{$parent['fatherName']}}" placeholder="Father's names" id="">
        </div>
        <div class="parent-desc">
            <label for="">Mother's  Names</label>
            <input type="text" name="motherName" value="{{$parent['motherName']}}"  placeholder="Mother's names" id="">
        </div>
        <div class="parent-desc">
            <label for=""> Phone Number mother/father</label>
            <input type="text" name="phone" value="{{$parent['phone']}}" placeholder="Gardian phone number" id="">
        </div>
        <div class="parent-desc">
            <label for="">Nationality</label>
            <input type="text" name="nationality" value="{{$parent['nationality']}}"  placeholder="Nationality" id="">
        </div>
        <div class="parent-desc">
            <label for="">Address</label>
            <input type="text" name="address" value="{{$parent['address']}}"  placeholder=" parent address" id="">
        </div>
        <div class="parent-desc">
            <label for="">Parent Photo</label>
            <input type="file"  name="prtImage">
            {{-- @if($parent['prtImage']) --}}
            <img src="{{$parent->prtImage ? asset('storage/'.$parent->prtImage) : asset('images/nophoto.png')}} " class="update-img" alt="">
            @error('prtImage')
                <p class="errors">{{$message}}</p>
            @enderror
        {{-- @endif --}}
        </div>
        </div>
        <h1 class="parent-stud-info">Student Information</h1>
        <div class="parent-info">
            <div class="parent-desc">
                <label for="">Student Firstname </label>
                <input type="text" name="studentFname" value="{{$parent['studentFname']}}" placeholder="first name" id="">
            </div>
            <div class="parent-desc">
                <label for="">Student Last Name</label>
                <input type="text" name="studentLname"  value="{{$parent['studentLname']}}" placeholder="Last name" id="">
            </div>
            <div class="parent-desc">
                <label for=""> Section</label>
                {{-- <input type="text" name="section"  placeholder="Section" id=""> --}}
                <select name="section" id="">
                    <option value="Olevel" {{$parent->section =='Olevel' ? 'selected' :''}}>Olevel</option>
                    <option value="PCM" {{$parent->section =='PCM' ? 'selected' :''}}>PCM</option>
                    <option value="MPC" {{$parent->section =='MPC' ? 'selected' :''}}>MPC</option>
                    <option value="MCB" {{$parent->section =='MCB' ? 'selected' :''}}>MCB</option>
                    <option value="MEG" {{$parent->section =='MEG' ? 'selected' :''}}>MEG</option>
                    <option value="MCE" {{$parent->section =='MCE' ? 'selected' :''}}>MCE</option>
                </select>
            </div>
            <div class="parent-desc">
                <label for="">year of study</label>
                {{-- <input type="text" name="class"  placeholder="" id=""> --}}
                <select name="class" id="">
                    <option value="year 1" {{$parent->class == 'year 1' ? 'selected' : ''}}>year 1</option>
                    <option value="year 2"  {{$parent->class == 'year 2' ? 'selected' : ''}}>year 2</option>
                    <option value="year 3"  {{$parent->class == 'year 3' ? 'selected' : ''}}>year 3</option>
                    <option value="year 4"  {{$parent->class == 'year 4' ? 'selected' : ''}}>year 4</option>
                    <option value="year 5"  {{$parent->class == 'year 5' ? 'selected' : ''}}>year 5</option>
                    <option value="year 6"  {{$parent->class == 'year 6' ? 'selected' : ''}}>year 6</option>
                    <option value="year 7"  {{$parent->class == 'year 7' ? 'selected' : ''}}>year 7</option>
                </select>
            </div>
            <div class="parent-desc">
                <label for="">Gender</label>
                {{-- <input type="text" name="address"  placeholder=" parent address" id=""> --}}
                <select name="gender" id="">
                    <option value="male" {{$parent->gender == 'male' ? 'selected' : ''}}>male</option>
                    <option value="female" {{$parent->gender == 'female' ? 'selected' : ''}}>female</option>
                </select>
            </div>
            <div class="parent-desc">
                <label for="">birth Date</label>
                <input type="date" name="studBirthdate" value="{{$parent['studBirthdate']}}" id="">
            </div>
            <div class="parent-desc">
                <label for="">Student Photo</label>
                <input type="file"  name="studImage">
                <img src="{{$parent->studImage ? asset('storage/'.$parent->studImage) : asset('images/nophoto.png')}} " class="update-img" alt="">
                @error('studImage')
                <p class="errors">{{$message}}</p>
            @enderror
            </div>
            </div>
<div class="add-book-btn">
    <button class="btn-add-book">edit</button>
    <button class="btn-cancel-book">cancel</button>
</div>
     </form>
    </div>
</div>
@endsection
