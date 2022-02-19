@extends('layouts.admin')

@section('title')
    Lihat Data Pelayanan
@endsection

@section('content')
    {{-- <!-- Section Content-->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Category</h2>
                <p class="dashboard-subtitle">Create New Category</p>
            </div> --}}
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="index.html" class="link"><i
                                        class="mdi mdi-home-outline fs-4"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Anak Youth</li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                        </ol>
                    </nav>
                    <h1 class="mb-0 fw-bold">Tambah Data Anak Youth</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="text" name="date" value="{{ $data->date }}" class="form-control"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tipe Ibadah</label>
                                        <input type="text" name="type" value="{{ $data->type }}" class="form-control"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Pengkhotbah</label>
                                        <input type="text" name="preacher" value="{{ $data->preacher }}"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Koordinator Ibadah</label>
                                        <input type="text" name="kir" value="{{ $data->kir }}" class="form-control"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Worship Leader</label>
                                        <input type="text" name="worship_leader" value="{{ $data->worship_leader }}"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Singer 1</label>
                                        <input type="text" name="singer1" value="{{ $data->singer1 }}"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Singer 2</label>
                                        <input type="text" name="singer2" value="{{ $data->singer2 }}"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Guitarist</label>
                                        <input type="text" name="guitarist" value="{{ $data->guitarist }}"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Bassist</label>
                                        <input type="text" name="bassist" value="{{ $data->bassist }}"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Keyboardist</label>
                                        <input type="text" name="keyboardist" value="{{ $data->keyboardist }}"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Drummer</label>
                                        <input type="text" name="drummer" value="{{ $data->drummer }}"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Doa Penutup</label>
                                        <input type="text" name="prayer" value="{{ $data->prayer }}"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
