@extends('layout.main');

@section('container')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <form action="{{ route('profil.submit') }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="card-header">
                        <h3>Edit Profil</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" class="form-control" value="{{$user->nama}}" name="nama" required="">
                            <div class="invalid-feedback">
                                Please fill in the Name
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="{{$user->email}}" name="email" required="">
                            <div class="invalid-feedback">
                                Please fill in the Email
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control" value="{{$user->telepon}}" name="telepon"
                                required="">
                            <div class="invalid-feedback">
                                Please fill in the Phone
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label>Address</label>
                            <input class="form-control" value="{{$user->alamat}}" name="alamat" required=""></input>
                            <div class="invalid-feedback">
                                Please fill in the Address
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        {{-- <a href="{{route('profil.view')}}" class="btn btn-primary"> Back
                        </a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection