@extends('layout.base')

@section('container')
<div class="container py-5">
    <div class="d-flex gap-2 justify-content-between align-items-center mb-2">
        <h3>Category</h3>
        <div>
            <a href="{{ route('data.index', []) }}"><button class="btn btn-dark">Back To Product list </button></a>
            <a href="{{ route('category.create', []) }}"><button class="btn btn-dark">Create Category</button></a>

        </div>

    </div>

<table  class="table table-responsive table-dark text-center  shadow rounded-3 overflow-hidden">
        <tbody >
            <tr >
                <th>No</th>
                <th>Name</th>
                <th>Option</th>
            </tr>
                
                @foreach ($category as $item)
            <tr>
                
                <td>{{$no++}}</td>
                <td>{{$item -> name}}</td>
                <td class="w-25"><form action="{{ route('category.destroy', ['category'=> $item -> id]) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="border bg-transparent rounded-3 px-2  text-white">delete</button>
                </form></td>
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
