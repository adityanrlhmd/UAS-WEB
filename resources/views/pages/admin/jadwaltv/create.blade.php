@extends('layouts.admin')
@section('content')
<div class="container-fluid text-black">
    <div class="card">
        <div class="card-header bg-success">
            <div class="card-tittle">
                <h5 class="text-white">Create Jadwal TV</h5>
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

        <form method="post" action="{{route('jadwaltv.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="time">Waktu</label>
              <input type="time" class="form-control" id="time" name="time" placeholder="Enter time">
            </div>
            <div class="form-group">
              <label for="text">Text</label>
              <input type="text" class="form-control" id="text" name="text" placeholder="Enter text">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection
