@extends('Admin.layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="row no-gutters">
{{--                    <div class="col md-10">--}}
{{--                        <h1 class="h4 mb-0 font-weight-bold text-primary" style="margin-top: 0.2em;">Help</h1>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/Ahelp/4.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/Ahelp/5.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
