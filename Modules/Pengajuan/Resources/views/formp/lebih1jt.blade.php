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
              <h2 class="content-header-title float-start mb-0">Pengajuan Lebih dari 1 Juta</h2>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Buat Pengajuan</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Lebih dari 1 Juta</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>


<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row">
      <div class="col-12 col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Pengajuan Lebih dari 1 Juta</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="/pengajuan/kurang1" class="form form-vertical" >
              @csrf 
              <div class="row">
                <div class="col-12">
                  
                  <div class="mb-1">
                    <label class="form-label" for="keterangan">Keterangan</label>
                    <input
                      type="text"
                      id="keterangan"
                      class="form-control"
                      name="keterangan"
                      placeholder="Keterangan"
                    />
                  </div>

                  <div class="mb-1">
                    <label class="form-label" for="jumlah">Jumlah</label>
                    <input
                      type="text"
                      id="jumlah"
                      class="form-control numeral-mask"
                      name="jumlah"
                      placeholder="Rp. "
                    />
                  </div>

              

                  <div class="mb-1">
                    <label class="form-label" for="tanggal">Tanggal Pengajuan</label>
                    <input
                      type="text"
                      id="tanggal"
                      class="form-control"
                      name="tanggal"
                      placeholder="Tanggal Pengajuan"
                    />
                  </div>
              
                  <div class="mb-1">
                    <label class="form-label" for="divisi">Divisi</label>
                    <select class="form-select" id="divisi" required>
                      <option value="">Divisi</option>
                      <option value="usa">SDM dan Umum</option>
                      <option value="operasional">Operasional</option>
                      <option value="keuangan">Keuangan</option>
                    </select>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please select your country</div>
                  </div>

                    <div class="mb-1">
                      <label class="d-block form-label" for="catatan">Catatan</label>
                      <textarea
                        class="form-control"
                        id="catatan"
                        name="catatan"
                        placeholder="Catatan"
                        rows="2"
                        required
                      ></textarea>
                    </div>
                  </div>
                </div>

                
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary me-1">Submit</button>
                  <button type="reset" class="btn btn-outline-secondary">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  
@endsection