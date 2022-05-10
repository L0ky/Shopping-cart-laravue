<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased">
    <div id="app">
        <div class="sticky top-0 bg-white">
            <header-cart></header-cart>
        </div>
        <div class="mt-20">
            {{-- @foreach ($articles as $article)
                <div>
                    <td>{{ $article->name }} </td>
                    <td>{{ $article->price }}€</td>
                    <td><img src="{{ $article->image }}" alt=""></td>
                    {{ $article->image }}
                    <td></td>
                    <img src="../../../public/images/pomme.png" alt="">
                </div>
            @endforeach --}}
            <product-list>
            </product-list>
            <div>

            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
