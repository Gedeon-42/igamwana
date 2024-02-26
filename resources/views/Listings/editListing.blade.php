<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Edit listing for funny</p>
    <form action="/listings/{{$listing->id}}" method="post" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$listing->title}}" placeholder="title"><br/>
        @error('title')
            <p class="error">{{$message}}</p>
        @enderror
        <br/>
        <input type="text" name="website" value="{{$listing->website}}" placeholder="website"><br/>
        @error('website')
        <p class="error">{{$message}}</p>
    @enderror
        <br/>
        <input type="text" name="location" value="{{$listing->location}}" placeholder="location"><br/>
        @error('location')
        <p class="error">{{$message}}</p>
    @enderror
        <br/>
        <input type="text" name="tags" value="{{$listing->tags}}" placeholder="tags"><br/>
        @error('tags')
        <p class="error">{{$message}}</p>
    @enderror
        <br/>
        <input type="text" name="company"  value="{{$listing->company}}"placeholder="company"><br/>
        <br/>
        @error('company')
        <p class="error">{{$message}}</p>
    @enderror
        <textarea name="description" id="" cols="30" rows="10">
            {{$listing->description}}
        </textarea>
        @error('description')
        <p class="error">{{$message}}</p>
    @enderror
        <br/>
        <input type="file" name="logo" id="">
        <br/>
        <img src="{{$listing->logo ? asset('storage/' . $listing->logo ) :asset('images/riyad3.jpg')}}" alt="" style="width: 70px;height:70px">
        <button type="submit">add</button>
    </form>
</body>
</html>