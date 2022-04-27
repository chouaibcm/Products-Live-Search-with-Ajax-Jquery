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

    </style>
@endsection

@section('content')
    <section id="shop-bar" class="py-2 mb-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 text-center">
                </div>
                <div class="col-md-6 mb-4 text-center">
                    <i class="bi bi-shop fa-3x mb-2"></i>
                    <h3>Search 1</h3>
                    <p></p>
                </div>
                <div class="col-md-3 mb-4 text-center">
                </div>
            </div>
        </div>
    </section>
    <section id="shop" class="">
        <div class="container">
            <ul class="nav justify-content-center mb-2">
                <li class="nav-item"><a href="" class="nav-link">new product</a>
                <li class="nav-item"><a href="" class="nav-link">old product</a>
                </li>
            </ul>
            <div class="row">
                <div class="col-md-2 text-end">
                    <label for="">Search:</label>
                </div>
                <div class="col-md-8">
                    <input type="text" id="SearchProduct" class="form-control mb-2" placeholder="Search">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-between">
                        <h4 class="fw-bold"> Products</h4>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Order by
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">New</a></li>
                                <li><a class="dropdown-item" href="#">Features</a></li>
                                <li><a class="dropdown-item" href="#">Old</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr class="mb-2">
                    <div class="row product_filter">
                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <div class="col-md-3  mb-2">
                                    <div class="card product-card h-100">
                                        <a href="#"><img class="img-fluid card-img-top" src="{{ $product->image_path }}"
                                                alt="Card image cap">
                                        </a>
                                        <div class="card-body text-start pb-0">
                                            <div class="col d-flex justify-content-inline">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                                <h6 class="ms-2">(1)</h6>
                                            </div>
                                            {{-- --------------------------------- --}}
                                            <a href="#">
                                                <p class="card-text fw-bold">{{ $product->title }}</p>
                                            </a>
                                            <p class="fw-bold text-uppercase" style="color: rgb(89, 153, 250)">
                                                {{ number_format($product->price, 2) }}
                                                DA</p>
                                        </div>
                                        <div class="card-footer d-flex justify-content-center" style="background: white">
                                            <a href="#" class="btn btn-dark text-white" style="width: 200px">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="d-flex justify-content-center">
                                <h4>No Data</h4>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#SearchProduct").on('keyup', function() {
                var q = $(this).val();
                $.ajax({
                    url: "{{ url('shop') }}",
                    method: "GET",
                    data: {
                        q: q
                    },
                    success: function(data) {
                        // console.log(data.html);
                        $('.product_filter').html("");
                        $('.product_filter').html(data.html);
                    }
                });
            });
        });
    </script>
@endsection
