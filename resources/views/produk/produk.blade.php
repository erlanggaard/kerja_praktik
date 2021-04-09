@extends('layout.main')

@section('container')

<section class="section">

    <div class="card mt-5">
        <div class="card-header">
            <h4>Popular Browser</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col mb-4 mb-lg-0 text-center">
                    <div class="browser browser-chrome"></div>
                    <div class="mt-2 font-weight-bold">Chrome</div>
                    <div class="text-small text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>
                        48%</div>
                </div>
                <div class="col mb-4 mb-lg-0 text-center">
                    <div class="browser browser-firefox"></div>
                    <div class="mt-2 font-weight-bold">Firefox</div>
                    <div class="text-small text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>
                        26%</div>
                </div>
                <div class="col mb-4 mb-lg-0 text-center">
                    <div class="browser browser-safari"></div>
                    <div class="mt-2 font-weight-bold">Safari</div>
                    <div class="text-small text-muted"><span class="text-danger"><i
                                class="fas fa-caret-down"></i></span> 14%</div>
                </div>
                <div class="col mb-4 mb-lg-0 text-center">
                    <div class="browser browser-opera"></div>
                    <div class="mt-2 font-weight-bold">Opera</div>
                    <div class="text-small text-muted">7%</div>
                </div>
                <div class="col mb-4 mb-lg-0 text-center">
                    <div class="browser browser-internet-explorer"></div>
                    <div class="mt-2 font-weight-bold">IE</div>
                    <div class="text-small text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>
                        5%</div>
                </div>
            </div>
        </div>
    </div>

    @endsection