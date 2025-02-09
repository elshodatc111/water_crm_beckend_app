@extends('layouts.app')
@section('title','Omborlar')
@section('content')
<div class="container-fluid">
    @include('layouts.alert-message')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Hodimlar</h6>
            <button class="btn btn-primary" data-toggle="modal" data-target="#addEmployeeModal">
                <i class="fas fa-plus"></i> Yangi hodim
            </button>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="warehouseTabs">
                <li class="nav-item">
                    <a class="nav-link active" id="warehouse-tab" data-toggle="tab" href="#warehouse">Omborchilar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="damaged-tab" data-toggle="tab" href="#damaged">Kurerlar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="admin-tab" data-toggle="tab" href="#admin">Admin</a>
                </li>
            </ul>
            <div class="tab-content mt-3">
                <div class="tab-pane fade show active" id="warehouse">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" style="font-size:14px;" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>FIO</th>
                                    <th>Telefon</th>
                                    <th>Email</th>
                                    <th>Ishga olindi.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($guard as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->index+1 }}</td>
                                        <td><a href="{{ route('user_show_guard',$item['id']) }}">{{ $item['name'] }}</a></td>
                                        <td>{{ $item['phone'] }}</td>
                                        <td>{{ $item['email'] }}</td>
                                        <td>{{ $item['created_at'] }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan=5 class="text-center">Omborchilar mavjud emas.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="damaged">
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size:14px;" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>FIO</th>
                                    <th>Telefon</th>
                                    <th>Email</th>
                                    <th>Mavjud idishlar</th>
                                    <th>Balansida mavjud</th>
                                    <th>Ishga olindi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($currer as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->index+1 }}</td>
                                        <td><a href="{{ route('user_show_currer', $item->id ) }}">{{ $item['name'] }}</a></td>
                                        <td>{{ $item['phone'] }}</td>
                                        <td>{{ $item['email'] }}</td>
                                        <td class="text-center">{{ $item['count'] }}</td>
                                        <td class="text-center">{{ number_format(($Balance['dishes_price']*$item['count']), 0, '.', ' ') }} so'm</td>
                                        <td>{{ $item['created_at'] }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan=4 class="text-center">Omborchilar mavjud emas.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="admin">
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size:14px;" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>FIO</th>
                                    <th>Telefon</th>
                                    <th>Email</th>
                                    <th>Ishga olindi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($admin as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->index+1 }}</td>
                                        <td><a href="{{ route('user_show_currer', $item->id ) }}">{{ $item['name'] }}</a></td>
                                        <td>{{ $item['phone'] }}</td>
                                        <td>{{ $item['email'] }}</td>
                                        <td>{{ $item['created_at'] }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan=5 class="text-center">Omborchilar mavjud emas.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Yangi Hodim Qo'shish Modal -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmployeeModalLabel">Yangi hodim qo'shish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('users_create') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Ism</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefon</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Parol</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Rol</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="guard">Omborchi</option>
                            <option value="currer">Kurer</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor qilish</button>
                    <button type="submit" class="btn btn-primary">Qo'shish</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
