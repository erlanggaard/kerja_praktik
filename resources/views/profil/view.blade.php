@extends('layout.main');

@section('container')

<!-- Main Content -->
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>Profile</h4>
        </div>
        <h2 class="section-title">Ahli Bisnis</h2>
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image" src="assets/img/avatar/avatar-1.png"
                            class="rounded-circle profile-widget-picture">
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Email</div>
                                <div class="profile-widget-item-value">{{$user->email}}</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Phone</div>
                                <div class="profile-widget-item-value">{{$user->telepon}}</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Status</div>
                                <div class="profile-widget-item-value">{{$user->status}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget-description">
                        <p>Nama / Level</p>
                        <div class="profile-widget-name" style="font-size: 20px"> {{$user->nama}} <div
                                class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div> {{$user->level}}
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget-description">
                        <p>Address</p>
                        <div class="profile-widget-name" style="font-size: 20px"> {{$user->alamat}} <div
                                class="text-muted d-inline font-weight-normal">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <div class="card-footer text-right">
                            <a href="{{route('profil.edit-profil')}}" class="btn btn-icon icon-left btn-primary"><i
                                    class="far fa-edit"></i> Edit Profile</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@include('sweetalert::alert')
@endsection