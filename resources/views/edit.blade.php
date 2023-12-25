@extends('layout.base')

@section('container')
<div class="container py-5">
                    @foreach ($data as $item)

               <form class="bg-dark rounded-3 overflow-hidden shadow text-white p-5"  action="{{ route('data.update', ['data' => $item -> id  ]) }}" method="post">
        @method('PUT')
        @csrf
  <div class="mb-4">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control bg-transparent border-secondary text-white" id="exampleInputEmail1" value="{{$item->name}}" name="name" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-4">
    <label for="exampleInputPassword1" class="form-label">jenis</label>
    <input type="text" class="form-control bg-transparent border-secondary text-white" id="exampleInputPassword1" value="{{$item->jenis}}" name="jenis" required>
  </div>
  <button type="submit" class="btn btn-secondary ">Submit</button>
</form>
            @endforeach
</div>
@endsection