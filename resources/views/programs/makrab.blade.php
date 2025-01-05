<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Makrab</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700&display=swap"
        rel="stylesheet">
</head>

<body class="mx-auto justify-around font-jakarta">
    <x-navbar></x-navbar>

    <div class="container mx-auto max-w-7xl mt-28">
        <div class="flex items-center">
            <div class="left-content flex-1">
                <p class="text-4xl font-bold mb-3">Makrab - Malam Keakraban</p>
                <p class="text-2xl mb-3">KM TEMBUS atau Keluarga Mahasiswa Tembalang Kudus merupakan Lorem ipsum dolor
                    sit amet, consectetur adipiscing elit. Fusce gravida pharetra tortor, non consequat ex efficitur
                    vel. Curabitur at risus et quam egestas scelerisque. Proin condimentum,</p>

            </div>

            <div class="right-content flex-1 flex justify-center">
                <div class="flex flex-col items-center">
                    <img class="w-3/5 mb-6" src="{{ asset('assets/logo_kmtembus.png') }}" alt="Logo KM TEMBUS">
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</body>
</html>