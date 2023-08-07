<h1>{{$heading}}</h1>
@php
    $test
@endphp

@foreach($listings as $listing)

<h2>
 {{$listing['title']}} 
</h2>

<p>
 {{$listing['description']}}
</p>
@endforeach
