@extends('layout.main')

@section('container')
    <div class="main-section">
            <div class="section">
                <div class="section-header">
                    <h3>Create Supplier</h3>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Masukan data</h4>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12">
                                    <form action="{{ route('supplier.simpan-supplier') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" class="form-control" id="alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" class="form-control" id="telepon">
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control" id="status">
                                        </div>
                                        <div class="form-group">
                                            <button href="" type="submit" class="btn btn-primary mb-4">Submit</button>
                                        </div>
                                    </form>                                   
                                </div>
                            </div>
                        </div>
                    </div>                        
                    <div class="card-footer bg-whitesmoke">
                        This is card footer
                    </div>
                </div>       
        </div>
    </div>
@endsection