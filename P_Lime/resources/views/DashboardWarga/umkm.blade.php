<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @include('layoutWarga.header')

    <div class="container d-flex flex-wrap justify-content-between h-70 overflow-auto">

        @foreach ($umkms as $umkm)
            <div class="card" style="width: 25rem;">
                <div class="image-container position-relative">
                    <span class="badge badge-warning position-absolute" style="top:0; right:0;">UMKM</span>
                    <img class="card-img-top" src="https://picsum.photos/300/100" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $umkm->Nama }}</h5>
                    <p class="card-text overflow-hidden" style="height: 5rem;">{{ $umkm->umkm }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach

    </div>
</body>

</html>
