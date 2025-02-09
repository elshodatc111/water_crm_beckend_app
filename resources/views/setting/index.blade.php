@extends('layouts.app')
@section('title','Omborlar')
@section('content')
<div class="container-fluid">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Sozlamalar</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{ route('setting_update') }}" method="post">
                            @csrf 
                            <label for="">Suvning narxi</label>
                            <input type="number" name="water_price" value="{{ $Balance['water_price'] }}" required class="form-control">
                            <label for="" class="mt-3">Suvning idishining narxi</label>
                            <input type="number" name="dishes_price" value="{{ $Balance['dishes_price'] }}" required class="form-control">
                            <button class="btn btn-primary w-100 mt-2">O'zgarishlarni saqlash</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection