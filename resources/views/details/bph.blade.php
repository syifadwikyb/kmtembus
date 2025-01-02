<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BPH</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700&display=swap"
        rel="stylesheet">
</head>

<body class="mx-auto justify-around font-jakarta">
    <x-navbar></x-navbar>

    <div class="container mx-auto max-w-7xl">
        <div class="flex items-center">
            <div class="left-content flex-1">
                <p class="text-4xl font-bold mb-3">BPH - Badan Pengurus Harian</p>
                <p class="text-2xl mb-3">KM TEMBUS atau Keluarga Mahasiswa Tembalang Kudus merupakan Lorem ipsum dolor
                    sit amet, consectetur adipiscing elit. Fusce gravida pharetra tortor, non consequat ex efficitur
                    vel. Curabitur at risus et quam egestas scelerisque. Proin condimentum,</p>

                <p class="text-4xl font-bold mb-3 mt-5">Program Kerja</p>
                <ul class="text-2xl mb-3">
                    <li>Program Kerja</li>
                    <li>Program Kerja</li>
                    <li>Program Kerja</li>
                    <li>Program Kerja</li>
                </ul>
            </div>

            <div class="right-content flex-1 flex justify-center">
                <div class="flex flex-col items-center">
                    <img class="w-3/5 mb-6" src="{{ asset('assets/logo_kmtembus.png') }}" alt="Logo KM TEMBUS">
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center min-h-80 bg-green-400 rounded-xl">        
            <div class="relative w-full max-w-6xl">
                <button id="scroll-left"
                    class="absolute left-0 top-1/2 -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full shadow hover:bg-gray-700 z-10">
                    &#8592;
                </button>

                <div class="overflow-x-auto relative w-full scroll-smooth max-w-5xl mx-auto">
                    <div class="flex items-center justify-between w-[150%] relative">
                        <div class="absolute top-1/2 left-0 w-full h-1 bg-red-300 -translate-y-1/2 rounded-full"></div>

                        <div class="flex flex-col relative mb-24">
                            <div class="w-40 h-10 bg-gray-800 rounded-md">
                                <p class="mt-2 text-sm text-center">Hari 1 Hari 1 Hari 1Hari 1Hari 1Hari 1Hari 1Hari 1</p>
                            </div>
                        </div>

                        <div class="flex flex-col relative mt-24">
                            <div class="w-40 h-10 bg-gray-800 rounded-md">
                                <p class="mt-2 text-sm text-center">Hari 1 Hari 1 Hari 1Hari 1Hari 1Hari 1Hari 1Hari 1</p>
                            </div>
                        </div>

                        <div class="flex flex-col relative mb-24">
                            <div class="w-40 h-10 bg-gray-800 rounded-md">
                                <p class="mt-2 text-sm text-center">Hari 1 Hari 1 Hari 1Hari 1Hari 1Hari 1Hari 1Hari 1</p>
                            </div>
                        </div>

                        <div class="flex flex-col relative mt-24">
                            <div class="w-40 h-10 bg-gray-800 rounded-md">
                                <p class="mt-2 text-sm text-center">Hari 1 Hari 1 Hari 1Hari 1Hari 1Hari 1Hari 1Hari 1</p>
                            </div>
                        </div>
                    </div>
                </div>
            
                <button id="scroll-right"
                    class="absolute right-0 top-1/2 -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full shadow hover:bg-gray-700 z-10">
                    &#8594;
                </button>
            </div>
        </div>

        <x-footer></x-footer>
</body>
<script>
    // JavaScript untuk navigasi timeline
    const timeline = document.querySelector('.overflow-x-auto');
    const btnLeft = document.getElementById('scroll-left');
    const btnRight = document.getElementById('scroll-right');

    btnLeft.addEventListener('click', () => {
        timeline.scrollBy({
            left: -200,
            behavior: 'smooth'
        });
    });

    btnRight.addEventListener('click', () => {
        timeline.scrollBy({
            left: 200,
            behavior: 'smooth'
        });
    });
</script>

</html>
