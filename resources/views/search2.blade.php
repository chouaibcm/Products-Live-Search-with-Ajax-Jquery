@foreach ($products as $product)
    <li class="list-group-item li-hover">
        <div class="row">
            <div class="col-md-2">
                <img class="img-small" src="{{ $product->image_path }}" alt="">
            </div>
            <div class="col-md-8">
                <p class="card-text fw-bold">{{ $product->title }}</p>
            </div>
            <div class="col-md-2">
                <p class="fw-bold text-uppercase" style="color: rgb(89, 153, 250)">
                    {{ number_format($product->price, 2) }}
                    DA</p>
            </div>
        </div>
    </li>
@endforeach
