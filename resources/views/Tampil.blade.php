@extends('layout.base')

@section('container')
<div class="container py-5">
    <div class="d-flex gap-2 justify-content-between align-items-center mb-2">
        <h3>Data</h3>
            <a href="{{ route('data.create', []) }}"><button class="btn btn-dark">Create</button></a>

    </div>

<table  class="table table-responsive table-dark text-center  shadow rounded-3 overflow-hidden">
        <tbody >
            <tr >
                <th>No</th>
                <th>Name</th>
                <th>Jenis</th>
                <th>Option</th>
            </tr>
                
                @foreach ($data as $item)
            <tr>
                
                <td>{{$no++}}</td>
                <td>{{$item -> name}}</td>
                <td>{{$item -> jenis}}</td>
                <td class="w-25">
                    <div class="accordion text-white border-0" id="accordionFlushExample{{$item->id}}">
  <div class="accordion-item bg-transparent text-white border-0">
    <h2 class="accordion-header bg-transparent text-white border-0">
      <button class="accordion-button collapsed bg-secondary text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$item->id}}" aria-expanded="false" aria-controls="flush-collapseOne{{$item->id}}">
        Option
      </button>
    </h2>
    <div id="flush-collapseOne{{$item->id}}" class="accordion-collapse border-0 collapse" data-bs-parent="#accordionFlushExample{{$item->id}}">
      <div class="accordion-body py-1 "><a class=" text-white" href="{{ route('data.edit', ['data'=>$item -> id]) }}"><button class="btn text-white">Edit</button></a></div>
    </div>
    <div id="flush-collapseOne{{$item->id}}" class="accordion-collapse border-0 collapse" data-bs-parent="#accordionFlushExample{{$item->id}}">
      <div class="accordion-body py-1 "><form action="{{ route('data.destroy', ['data'=> $item -> id]) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn  text-white">delete</button>
                </form></div>
    </div>
  </div>
</div>     
</td>
            </tr>
                    
                @endforeach
        </tbody>
    </table>
</div>
    
@endsection
