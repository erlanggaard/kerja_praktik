@extends('layout.main');

@section('container')

<div class="col-12 col-md-12 col-lg-7">
    <div class="card">
        <form method="post" class="needs-validation" novalidate="">
            <div class="card-header">
                <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6 col-12">
                        <label>First Name</label>
                        <input type="text" class="form-control" value="Ujang" required="">
                        <div class="invalid-feedback">
                            Please fill in the first name
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label>Last Name</label>
                        <input type="text" class="form-control" value="Maman" required="">
                        <div class="invalid-feedback">
                            Please fill in the last name
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-7 col-12">
                        <label>Email</label>
                        <input type="email" class="form-control" value="ujang@maman.com" required="">
                        <div class="invalid-feedback">
                            Please fill in the email
                        </div>
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label>Phone</label>
                        <input type="tel" class="form-control" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label>Bio</label>
                        <textarea
                            class="form-control summernote-simple">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mb-0 col-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                            <label class="custom-control-label" for="newsletter">Subscribe to
                                newsletter</label>
                            <div class="text-muted form-text">
                                You will get new information about products, offers and promotions
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary">Save Changes</button>
                <a href="{{route('profil.view')}}" class="btn btn-primary"> Back
                </a>
            </div>
        </form>
    </div>
</div>

@endsection