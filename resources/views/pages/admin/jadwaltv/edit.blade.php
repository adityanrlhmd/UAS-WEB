@extends('layouts.admin')
@section('content')
<div class="container-fluid text-black">
    <div class="card">
        <div class="card-header bg-success">
            <div class="card-tittle">
                <h5 class="text-white">Edit Jadwal TV</h5>
            </div>
        </div>
        <div class="card-body p-2">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{route('jadwaltv.update', $item->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="time">Waktu</label>
              <input type="time" class="form-control" name="time" id="time" placeholder="Enter Time">
            </div>
            <div class="form-group">
              <label for="text">Text</label>
              <input type="text" class="form-control" name="text" id="text" placeholder="Enter Text">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection
