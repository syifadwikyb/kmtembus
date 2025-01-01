<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KM TEMBUS</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700&display=swap"
        rel="stylesheet">
</head>

<body class="mx-auto justify-around bg-white">
    <x-navbar class="absolute top-0 z-10"></x-navbar>

    <div class="container h-full mx-auto max-w-7xl flex items-center">
        <div class="left-content flex-1">
            <p class="text-5xl font-bold mb-3">KM TEMBUS</p>
            <p class="text-2xl mb-3">Keluarga Mahasiswa Tembalang Kudus</p>
            <p class="text-2xl italic">"Muda Berbakti Menginspirasi"</p>
        </div>

        <div class="right-content flex-1 flex justify-center">
            <div class="flex flex-col items-center">
                <img class="w-3/5 mb-6" src="{{ asset('assets/logo_kmtembus.png') }}" alt="Logo KM TEMBUS">
                <div class="flex gap-4 justify-center">
                    <img class="w-1/6" src="{{ asset('assets/logo_kmtembus.png') }}" alt="Logo 1">
                    <img class="w-1/6" src="{{ asset('assets/logo_kmtembus.png') }}" alt="Logo 2">
                    <img class="w-1/6" src="{{ asset('assets/logo_kmtembus.png') }}" alt="Logo 3">
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
