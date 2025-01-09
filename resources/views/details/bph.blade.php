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

    <div class="container mx-auto max-w-7xl mt-28">
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


        <p class="text-4xl font-bold mt-32 mb-3 text-center">Time Line Program Kerja</p>
        <div class="flex items-center justify-center bg-green-400 rounded-xl overflow-hidden">
            <div class="relative w-full min-h-96 max-w-6xl items-center flex">
                <div class="overflow-x-auto relative w-full scroll-smooth">
                    <div class="flex items-center justify-between w-full relative mb-6">
                        <div
                            class="absolute top-1/2 left-1/2 w-[140vw] -translate-x-1/2 -translate-y-1/2 bg-gray-800 h-2 rounded-full my-4">
                        </div>

                        <div class="flex flex-col items-center mb-40">
                            <div class="w-56 h-28 bg-gray-800 rounded-md flex flex-col items-center justify-center p-3">
                                <p class="text-xl text-center text-white">Lomba Mobile Legends bang bang tembus</p>
                                <p class="text-sm text-center text-white">Januari 2025</p>
                            </div>
                        </div>

                        <div class="flex flex-col items-center justify-center mt-52">
                            <div class="w-56 h-28 bg-gray-800 rounded-md flex flex-col items-center justify-center p-3">
                                <p class="text-xl text-white">Sosialisasi</p>
                                <p class="text-sm text-white">Januari 2025</p>
                            </div>
                        </div>

                        <div class="flex flex-col items-center mb-40">
                            <div class="w-56 h-28 bg-gray-800 rounded-md flex flex-col items-center justify-center p-3">
                                <p class="text-xl text-center text-white">Lomba Mobile Legends bang bang tembus</p>
                                <p class="text-sm text-center text-white">Januari 2025</p>
                            </div>
                        </div>

                        <div class="flex flex-col items-center justify-center mt-52">
                            <div class="w-56 h-28 bg-gray-800 rounded-md flex flex-col items-center justify-center p-3">
                                <p class="text-xl text-white">Sosialisasi</p>
                                <p class="text-sm text-white">Januari 2025</p>
                            </div>
                        </div>

                        <div class="flex flex-col items-center mb-40">
                            <div class="w-56 h-28 bg-gray-800 rounded-md flex flex-col items-center justify-center p-3">
                                <p class="text-xl text-center text-white">Lomba Mobile Legends bang bang tembus</p>
                                <p class="text-sm text-center text-white">Januari 2025</p>
                            </div>
                        </div>

                        <div class="flex flex-col items-center justify-center mt-52">
                            <div class="w-56 h-28 bg-gray-800 rounded-md flex flex-col items-center justify-center p-3">
                                <p class="text-xl text-white">Sosialisasi</p>
                                <p class="text-sm text-white">Januari 2025</p>
                            </div>
                        </div>

                        <div class="flex flex-col items-center mb-40">
                            <div class="w-56 h-28 bg-gray-800 rounded-md flex flex-col items-center justify-center p-3">
                                <p class="text-xl text-center text-white">Lomba Mobile Legends bang bang tembus</p>
                                <p class="text-sm text-center text-white">Januari 2025</p>
                            </div>
                        </div>

                        <div class="flex flex-col items-center justify-center mt-52">
                            <div class="w-56 h-28 bg-gray-800 rounded-md flex flex-col items-center justify-center p-3">
                                <p class="text-xl text-white">Sosialisasi</p>
                                <p class="text-sm text-white">Januari 2025</p>
                            </div>
                        </div>

                        <div class="flex flex-col items-center mb-40">
                            <div class="w-56 h-28 bg-gray-800 rounded-md flex flex-col items-center justify-center p-3">
                                <p class="text-xl text-center text-white">Lomba Mobile Legends bang bang tembus</p>
                                <p class="text-sm text-center text-white">Januari 2025</p>
                            </div>
                        </div>

                        <div class="flex flex-col items-center justify-center mt-52">
                            <div class="w-56 h-28 bg-gray-800 rounded-md flex flex-col items-center justify-center p-3">
                                <p class="text-xl text-white">Sosialisasi</p>
                                <p class="text-sm text-white">Januari 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-4xl font-bold mt-32 mb-3 text-center">Anggota</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center p-6">
            <div class="w-64 bg-white rounded-lg shadow-2xl overflow-hidden">
                <img class="w-full h-56 object-cover" src="https://via.placeholder.com/250" alt="Foto Profil">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Syifa Dwiky Basamala basamala</h3>
                    <p class="text-lg text-gray-600">Jabatan</p>
                </div>
            </div>
            <div class="w-64 bg-white rounded-lg shadow-2xl overflow-hidden">
                <img class="w-full h-56 object-cover" src="https://via.placeholder.com/250" alt="Foto Profil">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Syifa Dwiky Basamala basamala</h3>
                    <p class="text-lg text-gray-600">Jabatan</p>
                </div>
            </div>
            <div class="w-64 bg-white rounded-lg shadow-2xl overflow-hidden">
                <img class="w-full h-56 object-cover" src="https://via.placeholder.com/250" alt="Foto Profil">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Syifa Dwiky Basamala basamala</h3>
                    <p class="text-lg text-gray-600">Jabatan</p>
                </div>
            </div>

            <div class="w-64 bg-white rounded-lg shadow-2xl overflow-hidden">
                <img class="w-full h-56 object-cover" src="https://via.placeholder.com/250" alt="Foto Profil">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Syifa Dwiky Basamala basamala</h3>
                    <p class="text-lg text-gray-600">Jabatan</p>
                </div>
            </div>
            <div class="w-64 bg-white rounded-lg shadow-2xl overflow-hidden">
                <img class="w-full h-56 object-cover" src="https://via.placeholder.com/250" alt="Foto Profil">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Syifa Dwiky Basamala basamala</h3>
                    <p class="text-lg text-gray-600">Jabatan</p>
                </div>
            </div>
            <div class="w-64 bg-white rounded-lg shadow-2xl overflow-hidden">
                <img class="w-full h-56 object-cover" src="https://via.placeholder.com/250" alt="Foto Profil">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Syifa Dwiky Basamala basamala</h3>
                    <p class="text-lg text-gray-600">Jabatan</p>
                </div>
            </div>
            <div class="w-64 bg-white rounded-lg shadow-2xl overflow-hidden">
                <img class="w-full h-56 object-cover" src="https://via.placeholder.com/250" alt="Foto Profil">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Syifa Dwiky Basamala basamala</h3>
                    <p class="text-lg text-gray-600">Jabatan</p>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
