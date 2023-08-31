@extends('layout')
@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
 @foreach ($guitars as $guitar)
<div>
     <h2>
      {{$guitar{'name'}}}
     </h2>
     <ul>
      <li>Made by: {{$guitar{'brand'}}}</li>
     
     </ul>
</div>    
 @endforeach
                                                                                                                                                                                                                       
<div>
 User Input: {{$userInput}}
</div>

</div>
@endsection 