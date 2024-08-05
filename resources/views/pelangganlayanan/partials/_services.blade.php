@foreach ($services as $service)
    <div class="card">
        <div class="card-body">
            <div class="card-content">
                <h5 class="card-title">{{ $service->nama_layanan }}</h5>
                <p class="card-text">{{ $service->detail }}</p>
            </div>
            <hr class="divider">
            <p class="card-text service-price">{{ $service->harga }}</p>
        </div>
    </div>
@endforeach
