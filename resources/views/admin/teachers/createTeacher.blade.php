@extends('admin.layouts.app')

@section('content')
<div class="student-form-wrapper">
    <div class="top-student-detail">
        <h4> Add Teacher form </h4>
        <i class="fas fa-times"></i>
    </div>
    <form action="/admin/teacher" enctype="multipart/form-data" method="post">
        @csrf
    <div class="student-information-wrapper">
<div class="student-information-desc">
    <label for="Fullname"> teacher's full names <span>*</span></label>
    <div>
        @error('Fullname')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
        <input type="text" placeholder="full name" class="@error('Fullname') error_border @enderror" name="Fullname" value={{ old('Fullname') }}>
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
    <input type="email" class="@error('email') error_border @enderror" name="email" value="{{ old('email') }}" placeholder=" contact email"><br>
    </div>
   
</div>
<div class="student-information-desc">
    <label for="province">province<span>*</span></label>
    <div>
        {{-- <input type="text" class="@error('province') border-error @enderror" > --}}
<select name="province" value={{old('province')}} id="province">
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
        <input type="text" class="@error('district') border-error @enderror" placeholder="district" name="district" value={{old('district')}} >
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
        <input type="text" class="@error('sector') border-error @enderror" placeholder="sector" name="sector" value={{old('sector')}} >
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
        <input type="text" placeholder="cell" class="@error('cell') border-error @enderror" name="cell" value={{old('cell')}}>
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
        <input type="text" placeholder="village" class="@error('village') border-error @enderror" name="village" value={{old('village')}}>
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
    
        <input type="date" class="@error('DOB') border-error @enderror" name="DOB" value={{old('DOB')}}>
    </div>
</div>
<div class="student-information-desc">
    <label for="courseteach">Course teach<span>*</span></label>
    <div>
        @error('courseteach')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
        <input type="text" placeholder="Course teach" class="@error('courseteach') border-error @enderror" name="courseteach" value={{old('courseteach')}}>
    </div>
</div>
<div class="student-information-desc">
    <label for="degree">Highest degree <span>*</span></label>
    <div>
        <select name="degree" id="degree" value="{{old('degree')}}" >
            {{-- <option value="" disabled selected> choose section</option> --}}
            <option value="Advanced Diploma" {{old('degree') == 'Olevel' ? 'selected': ''}}>Advanced diploma</option>
            <option value="Banchelor" {{old('degree') == 'Banchelor' ? 'selected': ''}}>Banchelor</option>
            <option value="Masters" {{old('degree') == 'Masters' ? 'selected': ''}}>Masters</option>
            <option value="PHD" {{old('degree') == 'PHD' ? 'selected': ''}}>PHD</option>
        </select>
        @error('degree')
        <p class="errors">
            {{ $message }}
        </p>
    @enderror
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
    <input type="text" placeholder="Phone number" class="@error('Phone') border-error @enderror" name="Phone" value={{old('Phone')}} >
</div>
</div>
    </div>
    <div class="btn-save-wrapper">
        <button type="submit" class="btn-add-student" >save</button>
        <button class="btn-cancel">cancel</button>
    </div>
    </form>
@endsection