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

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Omborlar</h6>
            <button class="btn btn-primary" data-toggle="modal" data-target="#addWarehouseModal">
                <i class="fas fa-plus"></i> Yangi ombor
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Ombor nomi</th>
                            <th>Suv idishlar soni</th>
                            <th>Nosoz idishlar soni</th>
                            <th>Mavjud naqt pul</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Storage as $item)
                        <tr>
                            <td class="text-center">{{ $loop->index+1 }}</td>
                            <td><a href="{{ route('storage_show',$item->id) }}">{{ $item['name'] }}</a></td>
                            <td class="text-center">{{ $item['dishes_count'] }}</td>
                            <td class="text-center">{{ $item['dishes_defective'] }}</td>
                            <td class="text-center">{{ number_format($item['cash_paymart'], 0, '.', ' ') }}</td>
                            <td class="text-center">
                                @if($item['status'])
                                    <b class='text-success'>Aktive</b>
                                @else 
                                    <b class='text-danger'>Block</b>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan=6 class="text-center">Omborlar mavjud emas.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addWarehouseModal" tabindex="-1" role="dialog" aria-labelledby="addWarehouseModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addWarehouseModalLabel">Yangi Ombor Qo'shish</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('storage_store') }}" method="post">
                    @csrf 
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="warehouse-name">Ombor nomi</label>
                            <input type="text" class="form-control" id="warehouse-name" name="name" placeholder="Ombor nomini kiriting" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor qilish</button>
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection