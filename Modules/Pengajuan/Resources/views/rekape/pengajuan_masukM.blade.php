@extends('pengajuan::layouts.main')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Pengajuan Masuk</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Approval Pengajuan</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Pengajuan Masuk </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12 mt-2">
                            <div class="card">

                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>

                                            <th></th>
                                            <th>No</th>
                                            <th>Jenis Pengajuan</th>
                                            <th>Keterangan</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Yang Mengajukan</th>
                                            <th>Divisi</th>
                                            <th>Catatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kurang1s as $kurang1)
                                            <tr>

                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>{{ $kurang1->keterangan }}</td>
                                                <td>{{ $kurang1->jumlah }}</td>
                                                <td>{{ $kurang1->tanggal }}</td>
                                                <td></td>
                                                <td>{{ $kurang1->divisi }}</td>
                                                <td></td>

                                                <td>
                                                    <div class="demo-inline-spacing">
                                                        <div class="btn-group">
                                                            <button type="button"
                                                                class="btn btn-outline-primary dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                Tanggapi

                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="btn dropdown-item" href="#">Terima</a>
                                                                <a class="btn dropdown-item" href="#">Tolak</a>
                                                                <a class="btn dropdown-item" href="#">Revisi</a>

                                                            </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
