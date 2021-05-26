@extends('layout.main')

@section('container')
    <div class="main-section">
            <div class="section">
                <div class="section-header">
                    <h3>Edit Supplier</h3>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Ubah data</h4>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12">
                                    <form action="{{ route('supplier.update-supplier', $sup->id) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input name="nama" type="text" class="form-control" id="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" class="form-control" id="alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input name="email" type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon">Telepon</label>
                                            <input name="telepon" type="text" class="form-control" id="telepon">
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            {{-- <input name="status" type="text" class="form-control" id="status"> --}}
                                            <select class="form-control" id="status" class="form-control" name="status">
                                                <option>suplier</option>
                                                <option>pelanggan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary mb-4">Ubah Data</button>
                                        </div>
                                    </form>                                   
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>       
        </div>
    </div>
@endsection