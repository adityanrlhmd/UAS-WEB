@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card bg-light" style="border: none">
        <div class="atas d-flex">
            <div class="tittle my-auto pl-3">
                <h3>Jadwal TV</h3>
            </div>
            <div class="button p-3 ml-auto">
                <a class="btn btn-primary" href="{{(route('jadwaltv.create'))}}">Create</a>
             </div>
        </div>
<table class="table table-striped">
    <thead class="text-white">
      <tr class="bg-success" >
        <th scope="col">No</th>
        <th scope="col">Waktu</th>
        <th scope="col">Text</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody style="color: black">
        @forelse ($items as $no => $item)
        <tr>
            <th scope="row">{{$no+1}}</th>
            <td>
                {{$item->time}}
            </td>
            <td>{{$item->text}}</td>
            <td>
                <a href="{{ route('jadwaltv.edit', $item->id)}}"
                    class="btn btn-outline-warning">Edit</a>
                <a onclick="return confirm('Apakah Anda yakin untuk mengahpus ini?')">
                    <form action="{{ route('jadwaltv.destroy', $item->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-danger">
                        Delete
                    </button>
                    </form>
                </a>
            </td>
          </tr>
        @empty
          <tr>
              <td colspan="4" class="text-center">Data Belum Ada</td>
          </tr>
        @endforelse
    </tbody>
</table>
</div>
</div>
@endsection
