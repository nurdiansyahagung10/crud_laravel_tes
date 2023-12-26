@extends('layout.base')

@section('container')
<div class="container py-5">
    <div class="d-flex gap-2 justify-content-between align-items-center mb-2">
        <h3>Data</h3>
        <div class="d-flex gap-1">       

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    sort by
  </button>
  <ul class="dropdown-menu">
            <li><a href="{{ route('data.index') }}" class="text-black text-decoration-none" ><button class="bg-transparent border-0 w-100 text-left" >all</button></a></li>

      @foreach ($category as $item)
    <li><form action="{{ route('category.sort', ['data'=>$item->id]) }}" method="post" class="dropdown-item">@csrf<button class="bg-transparent border-0 w-100 text-left" type="submit">{{$item->name}}</button></form></li>
    @endforeach
  </ul>
</div>            
            <a href="{{ route('category.index', []) }}"><button class="btn btn-dark">look category</button></a>
                      
            <a href="{{ route('data.create', []) }}"><button class="btn btn-dark">Create Produk</button></a>

        </div>
    </div>

<table  class="table table-responsive table-dark text-center  shadow rounded-3 overflow-hidden">
        <tbody >
            <tr >
                <th>No</th>
                <th>Name</th>
                <th>harga</th>
                <th>category</th>
                <th>Option</th>
            </tr>
                
                @foreach ($data as $item)
            <tr>
                
               <td >{{$no++}}</td>
                <td>{{$item -> name}}</td>
                <td>{{$item -> harga}}</td>
                <td>{{$item -> category -> name }} </td>
                <td  class="w-25">
                  <div class="d-flex gap-3 justify-content-center ">
                  <a class=" text-white" href="{{ route('data.edit', ['data'=>$item -> id]) }}"><button class="bg-transparent px-3 rounded-3 border text-white">Edit</button></a>
                    <form action="{{ route('data.destroy', ['data'=> $item -> id]) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="bg-transparent px-3 rounded-3 border  text-white">delete</button>
                </form>  
</td>
            </tr>
                    
                @endforeach
        </tbody>
    </table>
</div>
    
@endsection
