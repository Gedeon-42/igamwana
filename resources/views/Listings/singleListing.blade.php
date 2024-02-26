<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/listings/{{$listing['id']}}/edit"> edit listing</a>
    <h1>{{$listing['title']}}</h1>
    <img src="{{$listing->logo ? asset('storage/' . $listing->logo ) :asset('images/riyad3.jpg')}}" alt="" style="width: 70px;height:70px">
    <p>{{$listing['description']}}</p>
</body>
</html>