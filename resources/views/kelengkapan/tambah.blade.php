@extends('layouts.main')

@section('content')
    
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Data Pasien</h2>
                        <div class="mb-2">
                            <label for="">No Rm</label>
                            <input type="text" class="form-control " value="{{ $pasien->no_rm }}" disabled >
                        </div>
                        <div class="mb-2">
                            <label for="">Nama</label>
                            <input type="text" class="form-control " value="{{ $pasien->nama_pasien }}" disabled >
                        </div>
                        <div class="mb-2">
                            <label for="">Umur</label>
                            <input type="text" class="form-control " value="{{ $pasien->umur }}" disabled >
                        </div>
                        <div class="mb-2">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control " value="{{ $pasien->alamat }}" disabled >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Formulir</h2>
                        <div class="mb-2">
                            <label for="">Id Formulir</label>
                            <input type="text" class="form-control " value="{{ $formulir->id_formulir }}" disabled >
                        </div>
                        <div class="mb-2">
                            <label for="">Nama Formulir</label>
                            <input type="text" class="form-control " value="{{ $formulir->nama_formulir }}" disabled >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <form action="{{ route('kelengkapan.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2 class="mb-4">Review Identifikasi</h2>
                                </div>
                                <div class="col-md-4">
                                    <input type="date" name="tanggal" id="" class="form-control">
                                </div>
                            </div>
                            <div class="mb-2">
                                <h4 for="">No Rm <span class="text-danger">*</span></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="radio" name="no rm" id="" value="Ada">
                                        <label for="">Ada</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="no rm" id="" value="Tidak Ada">
                                        <label for="">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <h4 for="">Nama <span class="text-danger">*</span></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="radio" name="nama pasien" id="" value="Ada">
                                        <label for="">Ada</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="nama pasien" id="" value="Tidak Ada">
                                        <label for="">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <h4 for="">Umur<span class="text-danger">*</span></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="radio" name="umur" id="" value="Ada">
                                        <label for="">Ada</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="umur" id="" value="Tidak Ada">
                                        <label for="">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <h4 for="">Alamat <span class="text-danger">*</span></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="radio" name="alamat" id="" value="Ada">
                                        <label for="">Ada</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="alamat" id="" value="Tidak Ada">
                                        <label for="">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-4">Review Pelaporan</h2>
                            <div class="mb-2">
                                <div class="row">
                                    <h4>Pemeriksaan <span class="text-danger">*</span></h4>
                                    <div class="col-md-6">
                                        <input type="radio" name="pemeriksaan" id="" value="Ada">
                                        <label for="">Ada</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="pemeriksaan" id="" value="Tidak Ada">
                                        <label for="">Tidak Ada</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <h4>Terapi <span class="text-danger">*</span></h4>
                                    <div class="col-md-6">
                                        <input type="radio" name="terapi" id="" value="Ada">
                                        <label for="">Ada</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="terapi" id="" value="Tidak Ada">
                                        <label for="">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-4">Review Pencatatan</h2>
                            <div class="mb-2">
                                <h4 for="">Tidak ada tipe-x<span class="text-danger">*</span></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="radio" name="tidak ada tipe x" id="" value="Ada">
                                        <label for="">Ada</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="tidak ada tipe x" id="" value="Tidak Ada">
                                        <label for="">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <h4 for="">Tidak ada coretan<span class="text-danger">*</span></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="radio" name="tidak_ada_coretan" id="" value="Ada">
                                        <label for="">Ada</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="tidak_ada_coretan" id="" value="Tidak Ada">
                                        <label for="">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <h4 for="">Tidak ada singkatan baku<span class="text-danger">*</span></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="radio" name="tidak ada singkatan baku" id="" value="Ada">
                                        <label for="">Ada</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="tidak ada singkatan baku" id="" value="Tidak Ada">
                                        <label for="">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-4">Autentifikasi</h2>
                            <div class="mb-2">
                                <h4 for="">Tanda tangan<span class="text-danger">*</span></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="radio" name="tanda_tangan" id="" value="Ada">
                                        <label for="">Ada</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="tanda_tangan" id="" value="Tidak Ada">
                                        <label for="">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <h4 for="">Nama terang<span class="text-danger">*</span></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="radio" name="nama_terang" id="" value="Ada">
                                        <label for="">Ada</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="nama_terang" id="" value="Tidak Ada">
                                        <label for="">Tidak Ada</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h2>Finalisasi</h2>
                            <h5>Pastikan data yang diinput sudah benar <span class="text-danger">*</span></h5>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" name="no rm pasien" value="{{ $pasien->no_rm }}">
            <input type="hidden" value="{{ $formulir->id_formulir }}" name="id formulir"  >
        </form>

    </div>
</div>
@endsection