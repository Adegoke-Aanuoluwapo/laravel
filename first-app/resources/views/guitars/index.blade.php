@extends('layout')
@section('content')
<div class="max-w-6xl mx-auto sm:p-6 lg:p-8">
     @if (count($guitars) > 0)
          @foreach ($guitars as $guitar)
               <div>
                    <h2>
                       <a href="{{ route('guitars.show', ['guitar'=>$guitar['id']])}}" > {{$guitar['name']}}</a>
                    </h2>
    
                         <ul>
                              <li>Made by: {{$guitar['brand']}}</li>
     
                         </ul>
                                                  <ul>
                              <li>Year made: {{$guitar['year_made']}}</li>
     
                         </ul>
                    
               </div>    
          @endforeach
     @else
          <h2>There are no guitars to display </h2>
     @endif                                                                                                                                                                                                                
               <div>
                     User Input: {{$userInput}}
               </div>

</div>
@endsection 