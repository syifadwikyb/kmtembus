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

<body class="mx-auto justify-around font-jakarta">
    <x-navbar></x-navbar>

    <div class="container mx-auto max-w-7xl">
        <div class="hero flex flex-col lg:flex-row items-center">
            <div class="right-content flex-1 flex justify-center lg:order-2 mb-6 lg:mb-0 px-4">
                <div class="flex flex-col items-center">
                    <img class="w-1/2 sm:w-2/5 lg:w-3/5 mb-6" src="{{ asset('assets/logo_kmtembus.png') }}"
                        alt="Logo KM TEMBUS">
                    <div class="flex gap-4 justify-center">
                        <img class="w-12 sm:w-16 lg:w-1/6" src="{{ asset('assets/logo_kmtembus.png') }}" alt="Logo 1">
                        <img class="w-12 sm:w-16 lg:w-1/6" src="{{ asset('assets/logo_kmtembus.png') }}" alt="Logo 2">
                        <img class="w-12 sm:w-16 lg:w-1/6" src="{{ asset('assets/logo_kmtembus.png') }}" alt="Logo 3">
                    </div>
                </div>
            </div>
            <div class="left-content text-center lg:text-left px-4 lg:order-1">
                <p class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-3">KM TEMBUS</p>
                <p class="text-xl sm:text-2xl lg:text-3xl mb-3">Keluarga Mahasiswa Tembalang Kudus</p>
                <p class="text-lg sm:text-xl lg:text-3xl italic">"Muda Berbakti Menginspirasi"</p>
            </div>
        </div>

        <div class="about mt-16 flex flex-col lg:flex-row items-center">
            <div class="left-content text-center lg:text-left px-4">
                <p class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-3">Tentang KM TEMBUS</p>
                <p class="text-base sm:text-lg lg:text-2xl mb-3">
                    KM TEMBUS atau Keluarga Mahasiswa Tembalang Kudus merupakan Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Fusce gravida pharetra tortor, non consequat ex efficitur vel. Curabitur at risus
                    et quam egestas scelerisque. Proin condimentum,
                </p>
            </div>
            <div class="right-content hidden lg:flex justify-center px-4">
                <img class="w-1/2 sm:w-2/5 lg:w-3/5" src="{{ asset('assets/logo_kmtembus.png') }}" alt="Logo KM TEMBUS">
            </div>
        </div>

        <div class="vision_mission mt-16 px-4">
            <p class="text-2xl sm:text-3xl lg:text-4xl text-center font-bold mb-3">Visi dan Misi</p>
            <p class="text-base sm:text-lg lg:text-2xl text-center mb-6">
                KM TEMBUS atau Keluarga Mahasiswa Tembalang Kudus merupakan Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.
            </p>
            <div class="flex flex-wrap gap-6 text-center">
                <div class="visi flex-1 p-4 lg:p-6 bg-gray-500 rounded-md">
                    <p class="text-lg sm:text-xl lg:text-2xl text-center font-bold mb-3">Visi</p>
                    <p class="text-sm sm:text-base lg:text-lg">
                        KM TEMBUS atau Keluarga Mahasiswa Tembalang Kudus merupakan Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit. Fusce gravida pharetra tortor, non consequat ex efficitur vel.
                    </p>
                </div>
                <div class="misi flex-1 p-4 lg:p-6 bg-gray-500 rounded-md">
                    <p class="text-lg sm:text-xl lg:text-2xl text-center font-bold mb-3">Misi</p>
                    <p class="text-sm sm:text-base lg:text-lg">
                        KM TEMBUS atau Keluarga Mahasiswa Tembalang Kudus merupakan Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit. Fusce gravida pharetra tortor, non consequat ex efficitur vel.
                    </p>
                </div>
            </div>
        </div>

        <div class="documentations w-full overflow-hidden mt-32">
            <p class="text-2xl sm:text-3xl lg:text-4xl text-center font-bold mb-3">Dokumentasi</p>
            <div class="flex flex-col gap-4">
                <div id="scrollRowRight" class="flex gap-4 whitespace-nowrap">
                    <img src="https://via.placeholder.com/240x135" alt="Image 1" class="w-60 h-36 object-cover">1
                    <img src="https://via.placeholder.com/240x135" alt="Image 2" class="w-60 h-36 object-cover">2
                    <img src="https://via.placeholder.com/240x135" alt="Image 3" class="w-60 h-36 object-cover">3
                    <img src="https://via.placeholder.com/240x135" alt="Image 4" class="w-60 h-36 object-cover">4
                    <img src="https://via.placeholder.com/240x135" alt="Image 5" class="w-60 h-36 object-cover">5
                </div>
                <div id="scrollRowLeft" class="flex gap-4 whitespace-nowrap">
                    <img src="https://via.placeholder.com/240x135" alt="Image 6" class="w-60 h-36 object-cover">1
                    <img src="https://via.placeholder.com/240x135" alt="Image 7" class="w-60 h-36 object-cover">2
                    <img src="https://via.placeholder.com/240x135" alt="Image 8" class="w-60 h-36 object-cover">3
                    <img src="https://via.placeholder.com/240x135" alt="Image 9" class="w-60 h-36 object-cover">4
                    <img src="https://via.placeholder.com/240x135" alt="Image 10" class="w-60 h-36 object-cover">5
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</body>
@vite('resources/js/marquee.js')

</html>
