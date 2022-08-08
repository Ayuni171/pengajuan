@extends('pengajuan::layouts.main')

@section('content')


<!-- Input Sizing start -->
<section id="input-sizing">
  <div class="row match-height">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Sizing Options</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <p class="card-text">
                For different sizes of Input, Use classes like <code>.form-control-lg</code> &amp;
                <code>.form-control-sm</code> for Large, Small input box.
              </p>
              <div class="mb-1">
                <label class="form-label" for="largeInput">Large</label>
                <input id="largeInput" class="form-control form-control-lg" type="text" placeholder="Large Input" />
              </div>
              <div class="mb-1">
                <label class="form-label" for="defaultInput">Default</label>
                <input id="defaultInput" class="form-control" type="text" placeholder="Normal Input" />
              </div>
              <div>
                <label class="form-label" for="smallInput">Small</label>
                <input id="smallInput" class="form-control form-control-sm" type="text" placeholder="Small Input" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection