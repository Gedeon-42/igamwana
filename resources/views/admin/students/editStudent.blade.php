@extends('admin.layouts.app')

@section('content')
<div class="student-form-wrapper">
    <div class="top-student-detail">
        <h4> Edit student form</h4>
        <i class="fas fa-times"></i>
    </div>
    <form action="/admin/students/{{$student['id']}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
    <div class="student-information-wrapper">
<div class="student-information-desc">
    <label for="FullName">Names <span>*</span></label>
    <div>
        @error('FullName')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
        <input type="text" class="@error('FullName') error_border @enderror" name="FullName" value={{ $student['FullName'] }}>
    </div>
  
</div>
<div class="student-information-desc">
    <label for="email">email<span>*</span></label>
    <div>
        @error('email')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
    <input type="email" class="@error('email') error_border @enderror" name="email" value="{{ $student['email'] }}" placeholder=" contact email"><br>
    </div>
   
</div>
<div class="student-information-desc">
    <label for="province">province<span>*</span></label>
    <div>
        {{-- <input type="text" class="@error('province') border-error @enderror" > --}}
<select name="province" value={{$student['province']}} id="province">
    <option value="" disabled selected> select province</option>
    <option value="North" {{old('province') == 'North' ? 'selected': ''}}>North</option>
    <option value="West" {{old('province') == 'West' ? 'selected': ''}}>West</option>
    <option value="East" {{old('province') == 'East' ? 'selected': ''}}>East</option>
    <option value="South" {{old('province') == 'South' ? 'selected': ''}}>South</option>
    <option value="Kigali" {{old('province') == 'kigali' ? 'selected': ''}}>Kigali</option>
</select>
        
        @error('province')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
    </div>
</div>
<div class="student-information-desc">
    <label for="district">district<span>*</span></label>
    <div>
        @error('district')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
        <input type="text" class="@error('district') border-error @enderror" name="district" value={{$student['district']}}>
    </div>
 
</div>
<div class="student-information-desc">
    <label for="sector">sector <span>*</span></label>
    <div>
        @error('sector')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
        <input type="text" class="@error('sector') border-error @enderror" placeholder="sector" name="sector" value={{$student['sector']}} >
    </div>
</div>
<div class="student-information-desc">
    <label for="cell">cell <span>*</span></label>
    <div>
        @error('cell')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
        <input type="text" class="@error('cell') border-error @enderror" name="cell" value={{$student['cell']}}>
    </div>
</div>
<div class="student-information-desc">
    <label for="village">village <span>*</span></label>
    <div>
        @error('village')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
        <input type="text" class="@error('village') border-error @enderror" name="village" value={{$student['village']}}>
    </div>
</div>
<div class="student-information-desc">
    <label for="DOB">birth date<span>*</span></label>
    {{-- <input type="date" name="DOB"  id="" placeholder="year of study"> --}}
    <div>
        @error('DOB')
        <p class="errors">
            {{ $message }}
        </p>
        
    @enderror
        <input type="date" class="@error('DOB') border-error @enderror" name="DOB" value={{$student['DOB']}}>
    </div>
</div>
<div class="student-information-desc">
    <label for="yearofstudy">year of study <span>*</span></label>
    <div>
        <select  id="yearofstudy" name="yearofstudy" value="{{$student['yearofstudy']}}">
            <option value="" disabled  selected> choose year</option>
            <option value="1" {{old('yearofstudy') == 'year1' ? 'selected': ''}}> year 1</option>
            <option value="1" {{old('yearofstudy') == 'year 2' ? 'selected': ''}}>year 2</option>
            <option value="1" {{old('yearofstudy') == 'year 3' ? 'selected': ''}}>year 3</option>
            <option value="1" {{old('yearofstudy') == 'year 4' ? 'selected': ''}}>year 4</option>
            <option value="1" {{old('yearofstudy') == 'year 5' ? 'selected': ''}}>year 5</option>
            <option value="1">year 6</option>
        </select>
        @error('yearofstudy')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
        
    </div>
</div>

<div class="student-information-desc">
    <label for="section">section <span>*</span></label>
    <div>
        <select name="section" id="section" value="{{$student['section']}} >
            <option value="" disabled selected >choose section</option>
            <option value="Olevel" {{old('section') == 'Olevel' ? 'selected': ''}}>Olevel</option>
            <option value="MPC" {{old('section') == 'MPC' ? 'selected': ''}}>MPC</option>
            <option value="PCM" {{old('section') == 'PCM' ? 'selected': ''}}>PCM</option>
            <option value="PCB" {{old('section') == 'PCB' ? 'selected': ''}}">PCB</option>
            <option value="MCB" {{old('section') == 'MCB' ? 'selected': ''}}">MCB</option>
            <option value="MEG" {{old('section') == 'MEG' ? 'selected': ''}}">MEG</option>
        </select>
        @error('section')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
      
    </div>
</div>
<div class="student-information-desc">
    <label for="Parent">Parent/Guardian <span>*</span></label>
    <div>
        @error('Parent')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
        <input type="text" class="@error('Parent') border-error @enderror" name="Parent" value={{$student['Parent']}}>
    </div>
</div>
<div class="student-information-desc">
    <label for="gender">gender <span>*</span></label>
  <div>
    {{-- <input type="text" class="@error('gender') border-error @enderror" > --}}
    <select name="gender" id="gender" >
        <option value="Male" {{old('gender') == 'Male' ? 'selected': ''}}>Male</option>
        <option value="Female" {{old('gender') == 'Female' ? 'selected': ''}}>Female</option>
    </select>
    @error('gender')
    <p class="errors">
        {{ $message }}
    </p>
@enderror
   
</div>
</div>
<div class="student-information-desc">
    <label for="gender">Photo<span>*</span></label>
   <input type="file" name="image">
</div>
<div class="student-information-desc">
    <label for="Phone">Phone Number<span>*</span></label>
   <div>
    @error('Phone')
    <p class="errors">
        {{ $message }}
    </p>
@enderror
    <input type="text" class="@error('Phone') border-error @enderror" name="Phone" value={{$student['Phone']}}>
</div>
</div>
    </div>
    <div class="btn-save-wrapper">
        <button type="submit" class="btn-add-student" >save</button>
        <button class="btn-cancel">cancel</button>
    </div>
    </form>
@endsection