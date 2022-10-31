@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<div class="row text-center">
    <img src="/logo/pemko.png" width="80px">
<h3>Selamat Datang di <br/>Aplikasi Perizinan dan Pengawasan Bangunan </h3>
</div>

<div class="row">
    <div class="col-md-12">
        <button type="button" class="btn bg-purple btn-flat" data-toggle="modal" data-target="#modal-add" data-backdrop="static" data-keyboard="false"><i class="fa fa-file"></i>  TAMBAH PERMOHONAN</button><br/><br/>
        <div class="box box-primary">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Data Permohonan</h3>

            {{-- <div class="box-tools">
              <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div> --}}
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody><tr>
                <th>Tanggal</th>
                <th>Pemohon</th>
                <th>Nama Bangunan</th>
              </tr>
              @foreach ($permohonan as $item)
              <tr>
                <td>{{$item->created_at}}</td>
                <td>{{$item->nama_pemohon}}</td>
                <td>{{$item->nama_bangunan}}</td>
              </tr>
              @endforeach
            </tbody></table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
</div>

<div class="modal fade" id="modal-add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-purple">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="ion ion-clipboard"></i> Tambah Permohonan</h4>
        </div>
        <form method="post" action="/pemohon/permohonan/add">
        <div class="modal-body">
            @csrf
            <div class="form-group">
                <label>Nama Pemohon</label>
                <input type="text" class="form-control" name="nama_pemohon" placeholder="Nama Pemohon">
            </div>
            <div class="form-group">
                <label>Nama Bangunan</label>
                <input type="text" class="form-control" name="nama_bangunan" placeholder="Nama Bangunan">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-grey pull-left" data-dismiss="modal"><i class="fa fa-sign-out"></i> Close</button>
          <button type="submit" class="btn bg-purple"><i class="fa fa-save"></i> Simpan</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection
@push('js')
    
@endpush
