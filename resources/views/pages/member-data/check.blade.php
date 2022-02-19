@extends('layouts.admin')

@section('title')
    Lihat Data Anggota
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
                            <li class="breadcrumb-item active" aria-current="page">Lihat Data</li>
                        </ol>
                    </nav>
                    <h1 class="mb-0 fw-bold">Lihat Data Anak Youth</h1>
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
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="name" value="{{ $data->name }}" class="form-control"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Panggilan</label>
                                        <input type="text" name="nickname" value="{{ $data->nickname }}"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" name="birth_date" value="{{ $data->birth_date }}"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Hobby/Minat</label>
                                        <input type="text" name="interest" value="{{ $data->interest }}"
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
