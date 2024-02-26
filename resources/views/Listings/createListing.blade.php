<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Post listings for funny</p>
    <form action="/listings" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" value="{{old('title')}}" placeholder="title"><br/>
        @error('title')
            <p class="error">{{$message}}</p>
        @enderror
        <br/>
        <input type="text" name="website" value="{{old('website')}}" placeholder="website"><br/>
        @error('website')
        <p class="error">{{$message}}</p>
    @enderror
        <br/>
        <input type="text" name="location" value="{{old('location')}}" placeholder="location"><br/>
        @error('location')
        <p class="error">{{$message}}</p>
    @enderror
        <br/>
        <input type="text" name="tags" value="{{old('tags')}}" placeholder="tags"><br/>
        @error('tags')
        <p class="error">{{$message}}</p>
    @enderror
        <br/>
        <input type="text" name="company"  value="{{old('company')}}"placeholder="company"><br/>
        <br/>
        @error('company')
        <p class="error">{{$message}}</p>
    @enderror
        <textarea name="description" value="{{old('description')}}" id="" cols="30" rows="10"></textarea>
        @error('description')
        <p class="error">{{$message}}</p>
    @enderror
        <br/>
        <input type="file" name="logo" id="">
        <br/>
        <button type="submit">add</button>
    </form>
</body>
</html>