@extends('layouts.frontend')

@section('css')
    <style>
        #shop .nav {
            border-top: 1px solid rgba(83, 83, 83, 0.678);
            border-bottom: 1px solid rgba(83, 83, 83, 0.678);
        }

        #shop .nav .nav-link {
            color: rgba(83, 83, 83, 0.938);
        }

        #shop .nav .nav-link:hover {
            color: black;
        }
        #main-footer{
            position: fixed;
            bottom:0;
            width: 100%;
        }

    </style>
@endsection

@section('content')
    <section id="shop-bar" class="py-5 mb-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 text-center">
                </div>
                <div class="col-md-6 mb-4 text-center">
                    <i class="bi bi-search fa-3x mb-2"></i>
                    <h3>Live search system</h3>
                    <a href="{{route('shop')}}" class="btn btn-dark my-2">Search 1</a>
                    <a href="{{route('shop2')}}" class="btn btn-dark my-2">Search 2</a>
                </div>
                <div class="col-md-3 mb-4 text-center">
                </div>
            </div>
        </div>
    </section>
@endsection
