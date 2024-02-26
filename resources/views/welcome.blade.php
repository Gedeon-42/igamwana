<h1>{{$heading}}</h1>
@if(count($listings)==0)
<div class="norecord-class">
  <p>No listing found</p>
</div>
@endif
@foreach ($listings as $item)
  <p>{{$item['desc']}}</p>  
@endforeach



