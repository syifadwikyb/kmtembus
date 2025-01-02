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
        <div class="hero flex items-center">
            <div class="left-content flex-1">
                <p class="text-5xl font-bold mb-3">KM TEMBUS</p>
                <p class="text-3xl mb-3">Keluarga Mahasiswa Tembalang Kudus</p>
                <p class="text-3xl italic">"Muda Berbakti Menginspirasi"</p>
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

        <div class="about mt-32 flex items-center">
            <div class="left-content flex-1">
                <p class="text-4xl font-bold mb-3">Tentang KM TEMBUS</p>
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

        <div class="vision_mission mt-32">
            <p class="text-4xl text-center font-bold mb-3">Visi dan Misi</p>
            <p class="text-2xl text-center mb-3">KM TEMBUS atau Keluarga Mahasiswa Tembalang Kudus merupakan Lorem ipsum dolor
                sit amet, consectetur adipiscing elit. Fusce gravida pharetra tortor, non consequat ex efficitur
                vel. Curabitur at risus et quam egestas scelerisque. Proin condimentum,</p>
            <div class="flex flex-1 gap-5 items-center">
                <div class="visi p-4 bg-gray-500 rounded-md">
                    <p class="text-2xl text-center font-bold mb-3">Visi</p>
                    <p class="text-2xl mb-3">KM TEMBUS atau Keluarga Mahasiswa Tembalang Kudus merupakan Lorem ipsum
                        dolor
                        sit amet, consectetur adipiscing elit. Fusce gravida pharetra tortor, non consequat ex efficitur
                        vel. Curabitur at risus et quam egestas scelerisque. Proin condimentum,</p>
                </div>
                <div class="misi p-4 bg-gray-500 rounded-md">
                    <p class="text-2xl text-center font-bold mb-3">Misi</p>
                    <p class="text-2xl mb-3">KM TEMBUS atau Keluarga Mahasiswa Tembalang Kudus merupakan Lorem ipsum
                        dolor
                        sit amet, consectetur adipiscing elit. Fusce gravida pharetra tortor, non consequat ex efficitur
                        vel. Curabitur at risus et quam egestas scelerisque. Proin condimentum,</p>
                </div>
            </div>
        </div>

        <div class="documentations w-full overflow-hidden mt-32">
            <p class="text-4xl font-bold mb-3">Dokumentasi</p>
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
