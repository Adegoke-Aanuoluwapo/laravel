@extends('layout')

@section('content')
<div class="max-m 6xl mx-auto sm:px-6 lg:px-8">
<form class="form bg-white px-6 border-1" method="POST" action="{{route('guitars.store')}}">
 @csrf
  <div>
   <label class="text-sm" for="guitar-name">Guitar Name</label>
   <input class="text-lg border-1" type="text" id="guitar-name" name="name" value="{{old('name')}}">
   @error('guitar-name')
    <div class="form-error">
      {{$message}}
    </div>
   @enderror
  </div>
  <div>
   <label class="text-sm" for="brand">Brand</label>
   <input class="text-lg border-1" type="text" id="brand" name="brand" value="{{old('brand')}}">
    @error('brand')
    <div class="form-error">
      {{$message}}
    </div>
   @enderror
  </div>
  <div>
   <label class="text-sm" for="year">Year Made</label>
   <input class="text-lg border-1" type="text" id="year" name="year_made" value="{{old('year_made')}}">
    @error('year')
    <div class="form-error">
      {{$message}}
    </div>
   @enderror
  </div>
  <div>
   <button class="border-1" type="submit">Submit</button>
  </div>
</form>

</div>






@endsection