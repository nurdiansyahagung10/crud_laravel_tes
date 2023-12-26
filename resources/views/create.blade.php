@extends('layout.base')

@section('container')
<div class="container py-5">
    <form class="bg-dark rounded-3 overflow-hidden shadow text-white p-5" action="{{ route('data.store', []) }}" method="post">
        @csrf
  <div class="mb-4">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control bg-transparent border-secondary text-white" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-4">
    <label for="exampleInputPassword1" class="form-label">harga</label>
    <input type="text" class="form-control bg-transparent border-secondary text-white" id="exampleInputPassword1" name="harga" required>
  </div>
  <div class="mb-4">
    <label for="exampleInputPassword1" class="form-label">category</label>
    <select name="category_id" id="" class="form-control bg-dark border-secondary text-white">
            <option value=""></option>
      @foreach ($categorys as $category)
      <option value="{{$category -> id }}">{{$category -> name}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-secondary ">Submit</button>
</form>
</div>
@endsection