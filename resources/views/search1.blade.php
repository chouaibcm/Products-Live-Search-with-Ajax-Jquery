@if ($products->count() > 0)
    @foreach ($products as $product)
        <div class="col-md-3  mb-2">
            <div class="card product-card h-100">
                <a href="#"><img class="img-fluid card-img-top" src="{{ $product->image_path }}" alt="Card image cap">
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
