@extends('layout.main');

@section('container')

<!-- Main Content -->
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>Profile</h4>
        </div>
        <h2 class="section-title">Hi, Ujang!</h2>
        <p class="section-lead">
            Change information about yourself on this page.
        </p>
        <div class="card-body">
            <div class="row">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image" src="assets/img/avatar/avatar-1.png"
                            class="rounded-circle profile-widget-picture">
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Posts</div>
                                <div class="profile-widget-item-value">187</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Followers</div>
                                <div class="profile-widget-item-value">6,8K</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Following</div>
                                <div class="profile-widget-item-value">2,1K</div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget-description">
                        <div class="profile-widget-name">Ujang Maman <div
                                class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div> Web Developer
                            </div>
                        </div>
                        Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is
                        not a
                        fictional character but an original hero in my family, a hero for his children and
                        for his
                        wife. So, I use the name as a user in this template. Not a tribute, I'm just bored
                        with
                        <b>'John Doe'</b>.
                    </div>
                    <div class="card-footer text-center">
                        <div class="font-weight-bold mb-2">Follow Ujang On</div>
                        <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-social-icon btn-github mr-1">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="btn btn-social-icon btn-instagram">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <div class="card-footer text-right">
                            <a href="{{route('profil.edit-profil')}}" class="btn btn-primary"> Edit Profile
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection