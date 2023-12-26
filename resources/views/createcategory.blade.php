@extends('layout.base')

@section('container')
<div class="container py-5">
    <form class="bg-dark rounded-3 overflow-hidden shadow text-white p-5" action="{{ route('category.store', []) }}" method="post">
        @csrf
  <div class="mb-4">
    <label for="exampleInputEmail1" class="form-label">name category</label>
    <input type="text" class="form-control bg-transparent border-secondary text-white" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" required>
  </div>
  
  <button type="submit" class="btn btn-secondary ">Submit</button>
</form>
</div>
@endsection