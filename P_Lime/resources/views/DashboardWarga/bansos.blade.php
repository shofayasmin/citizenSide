<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>C-Hub</title>
</head>

<body>
    @include('layoutWarga.header')

    <div class="container d-flex flex-wrap justify-content-between h-70 overflow-auto mt-5">
        @foreach ($bansos as $d)
            <div class="card">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="https://picsum.photos/300/100" class="card-img-top"
                        style="width: auto; max-height: 400px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $d->judul }}</h5>
                    <p class="card-text">Type of social donation: {{ $d->jenis_bansos }}</p>
                    <p class="card-text">social donation periode : {{ $d->periode_bansos }} day</p>
                    <p class="card-text">total of social donation: {{ $d->jumlah_bansos }}</p>
                    <p class="card-text">date of distribution: {{ $d->tanggal_penyaluran }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
