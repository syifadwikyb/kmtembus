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

    <div class="container mx-auto max-w-7xl">
        <div class="hero flex flex-col lg:flex-row items-center">
            <div class="right-content flex justify-center lg:order-2 mb-6 lg:mb-0 px-4 flex-col items-center">
                <img 
                    class="w-full h-auto mb-6" 
                    src="{{ asset('assets/WhatsApp Image 2025-01-10 at 23.45.58_1169125a.jpg') }}" 
                    alt="Logo Keluarga Mahasiswa Tembalang Kudus">
            </div>

            <div class="left-content text-center lg:text-left px-4 lg:order-1">
                <p class="text-lg md:text-xl lg:text-2xl mb-3">Makrab - Malam Keakraban</p>
                <p class="text-base md:text-lg lg:text-xl italic">
                    "KM TEMBUS atau Keluarga Mahasiswa Tembalang Kudus merupakan Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Fusce gravida pharetra tortor, non consequat ex efficitur vel. Curabitur at risus
                    et quam egestas scelerisque. Proin condimentum."
                </p>
            </div>
        </div>
    </div>
    
    <x-footer></x-footer>
</body>

</html>
