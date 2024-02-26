<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-flash-message/>
    <h1>all listing</h1>
    <a href="/listings/create">create new Listing</a>
    <form action="/" >
        <input type="text" name="search" placeholder="search listing">
          <button type="submit">search</button> 

    </form>
    
    
    @foreach ($listings as $listing)
        <a href="/listings/{{$listing['id']}}"><h1>{{$listing['title']}}</h1></a>
        <img src="{{$listing->logo ? asset('storage/' . $listing->logo ) :asset('images/riyad3.jpg')}}" alt="" style="width: 70px;height:70px">
        <p>{{$listing['description']}}</p> 
        <form action="/listings/{{$listing['id']}}" method="POST">
            @csrf
            @method('DELETE')
 <button>delete</button>
        </form>
    @endforeach
</body>
</html>