<?php

<h1>{count($listings)}</h1>

@unless{count($listing)==0}




l@foreach($listings as $listing)
<h2>
 {{$listing['title']}}
</h2>
<p>{{$listing['discription']}}</p>