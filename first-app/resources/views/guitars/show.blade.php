@extends('layout')
@section('content')
<div class="max-w-6xl mx-auto sm:p-6 lg:p-8">
   
        
               <div>
                    <h2>
                         {{$guitar['name']}}
                    </h2>
                         <ul>
                              <li>Made by: {{$guitar['brand']}}</li>
     
                         </ul>
                  
               </div>    
      
   

</div>
@endsection 