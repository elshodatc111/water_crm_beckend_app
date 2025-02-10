@extends('layouts.app_show')
@section('title','Omborlar')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $Storage->name }}</h1>
    </div>
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
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ombor haqida</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center" style="font-size: 12px;" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Mavjud idishlar</th>
                                <th>Nosoz idishlar</th>
                                <th>Mavjud naqt summa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $Storage->dishes_count }}</td>
                                <td>{{ $Storage->dishes_defective }}</td>
                                <td>{{ number_format($Storage['cash_paymart'], 0, '.', ' ') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kirimlar tarixi (oxirgi 3 kunlik)</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size: 12px;" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Kirim soni</th>
                                    <th>Kirim Turi</th>
                                    <th>Currer</th>
                                    <th>To'lov turi</th>
                                    <th>To'lov so'mmasi</th>
                                    <th>Kirim vaqti</th>
                                    <th>Status</th>
                                    <th>Omborchi</th>
                                    <th>Tasdiqlandi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>#</td>
                                    <td>2</td>
                                    <td>Sotildi/Nosoz/Chegirma/Bo'sh</td>
                                    <td>CurrerName</td>
                                    <td>Naqt/Plastik/PulKochirish</td>
                                    <td>250000</td>
                                    <td>09-08-2025 15:21:13</td>
                                    <td>Tasdiqlandi/Kutilmoqda</td>
                                    <td>OmborchiName</td>
                                    <td>09-08-2025 15:21:13</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ombor sozlamalari</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <button class="btn btn-primary my-2 w-100" data-toggle="modal" data-target="#expenseModal">
                                <i class="fas fa-plus"></i> Balansdan chiqim
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary my-2 w-100" data-toggle="modal" data-target="#settingsModal">
                                <i class="fas fa-plus"></i> Ombor sozlamalari
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary my-2 w-100" data-toggle="modal" data-target="#incomeModal">
                                <i class="fas fa-plus"></i> Idishlar kirim qilish
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary my-2 w-100" data-toggle="modal" data-target="#outcomeModal">
                                <i class="fas fa-plus"></i> Idishlar chiqim qilish
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Chiqimlar tarixi (oxirgi 3 kunlik)</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size: 12px;" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Chiqim soni</th>
                                    <th>Omborchi</th>
                                    <th>Currer</th>
                                    <th>Status</th>
                                    <th>Chiqim vaqti</th>
                                    <th>Tasdiqlandi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>#</td>
                                    <td>Ombor nomi</td>
                                    <td>Suv idishlar soni</td>
                                    <td>Nosoz idishlar soni</td>
                                    <td>Mavjud naqt pul</td>
                                    <td>Status</td>
                                    <td>Status</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Balansdan chiqim Modal -->
<div class="modal fade" id="expenseModal" tabindex="-1" role="dialog" aria-labelledby="expenseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="expenseModalLabel">Balansdan chiqim (Mavjud: {{ number_format($Storage['cash_paymart'], 0, '.', ' ') }} so'm)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                @csrf 
                <div class="modal-body">
                    <div class="form-group">
                        <label for="expense-amount">Chiqim summasi</label>
                        <input type="number" max="{{ $Storage['cash_paymart'] }}" class="form-control" id="expense-amount" name="amount" required>
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

<!-- Ombor sozlamalari Modal -->
<div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="settingsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="settingsModalLabel">Ombor sozlamalari</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                @csrf 
                @method('put')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="storage-name">Ombor nomi</label>
                        <input type="text" class="form-control" id="storage-name" name="name" value="{{ $Storage->name }}" required>
                        <label for="storage-status">Ombor ish faoliyati</label>
                        <select name="status" class="form-control">
                            <option value="true">Aktive</option>
                            <option value="false">Yanunlash</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor qilish</button>
                    <button type="submit" class="btn btn-primary">O'zgarishlarni saqlash</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Idishlar kirim qilish Modal -->
<div class="modal fade" id="incomeModal" tabindex="-1" role="dialog" aria-labelledby="incomeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="incomeModalLabel">Idishlar kirim qilish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                @csrf 
                <div class="modal-body">
                    <div class="form-group">
                        <label for="bottle-count">Kirim idishlar soni</label>
                        <input type="number" class="form-control" id="bottle-count" name="count" required>
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

<!-- Idishlar chiqim qilish Modal -->
<div class="modal fade" id="outcomeModal" tabindex="-1" role="dialog" aria-labelledby="outcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="outcomeModalLabel">Idishlar chiqim qilish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                @csrf 
                <div class="modal-body">
                    <div class="form-group">
                        <label for="storage-name">Tanlang</label>
                        <select name="status" class="form-control">
                            <option value="true">Idishlari</option>
                            <option value="false">Nosoz idishlar</option>
                        </select>
                        <label for="bottle-out-count" class="mt-2">Chiqim idishlar soni</label>
                        <input type="number" class="form-control" id="bottle-out-count" name="count" required>
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