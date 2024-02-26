@extends('admin.layouts.app')
@section('content')
<div class="parents-wrapper">
    
    <div class="parent-form-wrapper">
        <div class="add-parent-top">
            <h1 class="parent-stud-info">add parent form</h1>
        </div>
     <form action="/admin/parent" method="post" class="parent-form-container">
        @csrf
        <h1 class="parent-stud-info">Parent Information</h1>
        <div class="parent-info">
        <div class="parent-desc">
            <label for="">Father's  Names</label>
            <input type="text" name="fatherName" value="{{old('fatherName')}}" placeholder="Father's names" id="">
            @error('fatherName')
               <p class="errors">{{$message}}</p> 
            @enderror
        </div>
        <div class="parent-desc">
            <label for="">Mother's  Names</label>
            <input type="text" name="motherName" value="{{old('motherName')}}" placeholder="Mother's names" id="">
            @error('motherName')
            <p class="errors">{{$message}}</p> 
         @enderror
        </div>
        <div class="parent-desc">
            <label for=""> Phone Number mother/father</label>
            <input type="text" name="phone" value="{{old('phone')}}"  placeholder="Gardian phone number" id="">
            @error('phone')
            <p class="errors">{{$message}}</p> 
         @enderror
        </div>
        <div class="parent-desc">
            <label for="">Nationality</label>
            <input type="text" name="nationality" value="{{old('nationality')}}"  placeholder="Nationality" id="">
            @error('nationality')
            <p class="errors">{{$message}}</p> 
         @enderror
        </div>
        <div class="parent-desc">
            <label for="">Address</label>
            <input type="text" name="address" value="{{old('address')}}"  placeholder=" parent address" id="">
            @error('address')
            <p class="errors">{{$message}}</p> 
         @enderror
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
                <input type="text" name="studentFname" value="{{old('studentFName')}}" placeholder="first name" id="">
                @error('studentFname')
                <p class="errors">{{$message}}</p> 
             @enderror
            </div>
            <div class="parent-desc">
                <label for="">Student Last Name</label>
                <input type="text" name="studentLname"  value="{{old('studentLname')}}" placeholder="Last name" id="">
                @error('studentLname')
                <p class="errors">{{$message}}</p> 
             @enderror
            </div>
            
            <div class="parent-desc">
                <label for=""> Section</label>
                {{-- <input type="text" name="section"  placeholder="Section" id=""> --}}
                <select name="section"  value="{{old('section')}}">
                    <option value="Olevel" {{old('province') == 'Olevel' ? 'selected':''}}>Olevel</option>
                    <option value="PCM" {{old('province') == 'PCM' ? 'selected':''}}>PCM</option>
                    <option value="MPC" {{old('province') == 'MPC' ? 'selected':''}}>MPC</option>
                    <option value="MCB"  {{old('province') == 'MCBE' ? 'selected':''}}>MCB</option>
                    <option value="MEG"  {{old('province') == 'MEG' ? 'selected':''}}>MEG</option>
                    <option value="MCE"  {{old('province') == 'MCE' ? 'selected':''}}>MCE</option>
                </select>
            </div>
            <div class="parent-desc">
                <label for="">year of study</label>
                {{-- <input type="text" name="class"  placeholder="" id=""> --}}
                <select name="class" value="{{old('class')}}" id="">
                    <option value="year 1" {{old('province') == "year 1" ? 'selected':''}}>year 1</option>
                    <option value="year 2" {{old('province') == "year 2" ? 'selected':''}}>year 2</option>
                    <option value="year 3" {{old('province') == "year 3" ? 'selected':''}}>year 3</option>
                    <option value="year 4" {{old('province') == "year 4" ? 'selected':''}}>year 4</option>
                    <option value="year 5" {{old('province') == "year 5" ? 'selected':''}}>year 5</option>
                    <option value="year 6" {{old('province') == "year 6" ? 'selected':''}}>year 6</option>
                </select>
            </div>
            <div class="parent-desc">
                <label for="">Gender</label>
                {{-- <input type="text" name="address"  placeholder=" parent address" id=""> --}}
                <select name="gender" id="" value={{old('gender')}}>
                    <option value="male" {{old('gender')=='male' ? 'selected' : ''}}>male</option>
                    <option value="female" {{old('female')=='male' ? 'selected' : ''}}>female</option>
                </select>
            </div>
            <div class="parent-desc">
                <label for="">birth Date</label>
                <input type="date"n value="{{old('studBirthdate')}}" name="studBirthdate" id="">
                @error('studBirthdate')
                <p class="errors">{{$message}}</p> 
             @enderror
            </div>
            <div class="parent-desc">
                <label for="">Student Photo</label>
                <input type="file"  name="studImage">
            </div>
            </div>
<div class="add-book-btn">
    <button class="btn-add-book">add</button>
    <button class="btn-cancel-book">cancel</button>
</div>
     </form>
    </div>
</div>
@endsection
