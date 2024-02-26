@extends('admin.layouts.app')
@section('content')
<div class="parents-wrapper">
    <div class="parent-form-wrapper">
        <div class="add-parent-top">
            <h1 class="parent-stud-info">Edit parent form</h1>
        </div>
     <form action="" method="post" class="parent-form-container">
        <h1 class="parent-stud-info">Parent Information</h1>
        <div class="parent-info">
        <div class="parent-desc">
            <label for="">Father's  Names</label>
            <input type="text" name="fatherName" placeholder="Father's names" id="">
        </div>
        <div class="parent-desc">
            <label for="">Mother's  Names</label>
            <input type="text" name="fatherName"  placeholder="Mother's names" id="">
        </div>
        <div class="parent-desc">
            <label for=""> Phone Number mother/father</label>
            <input type="text" name="phone"  placeholder="Gardian phone number" id="">
        </div>
        <div class="parent-desc">
            <label for="">Nationality</label>
            <input type="text" name="nationality"  placeholder="Nationality" id="">
        </div>
        <div class="parent-desc">
            <label for="">Address</label>
            <input type="text" name="address"  placeholder=" parent address" id="">
        </div>
        <div class="parent-desc">
            <label for="">Parent Photo</label>
            <input type="file"  name="prtImage">
        </div>
        </div>
        <h1 class="parent-stud-info">Student Information</h1>
        <div class="parent-info">
            <div class="parent-desc">
                <label for="">Student Firstname </label>
                <input type="text" name="studentFname" placeholder="first name" id="">
            </div>
            <div class="parent-desc">
                <label for="">Student Last Name</label>
                <input type="text" name="studentLname"  placeholder="Last name" id="">
            </div>
            <div class="parent-desc">
                <label for=""> Section</label>
                {{-- <input type="text" name="section"  placeholder="Section" id=""> --}}
                <select name="section" id="">
                    <option value="Olevel">Olevel</option>
                    <option value="PCM">PCM</option>
                    <option value="MPC">MPC</option>
                    <option value="MCB">MCB</option>
                    <option value="MEG">MEG</option>
                    <option value="MCE">MCE</option>
                </select>
            </div>
            <div class="parent-desc">
                <label for="">year of study</label>
                {{-- <input type="text" name="class"  placeholder="" id=""> --}}
                <select name="class" id="">
                    <option value="year 1">year 1</option>
                    <option value="year 2">year 2</option>
                    <option value="year 3">year 3</option>
                    <option value="year 4">year 4</option>
                    <option value="year 5">year 5</option>
                    <option value="year 6">year 6</option>
                    <option value="year 7">year 7</option>
                </select>
            </div>
            <div class="parent-desc">
                <label for="">Gender</label>
                {{-- <input type="text" name="address"  placeholder=" parent address" id=""> --}}
                <select name="gender" id="">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div>
            <div class="parent-desc">
                <label for="">birth Date</label>
                <input type="date" name="studBirthdate" id="">
            </div>
            <div class="parent-desc">
                <label for="">Student Photo</label>
                <input type="file"  name="studImage">
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
