<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<header id="navbar" class="sticky top-0 z-50 bg-transparent transition-all duration-300">
    <nav class="container mx-auto flex items-center justify-between p-6" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/">
                <img class="h-12 w-auto sm:h-14 lg:h-16" src="{{ asset('assets/logo_kmtembus.png') }}" alt="Logo">
            </a>
        </div>
        <button id="menuToggle" class="lg:hidden text-2xl focus:outline-none">
            <i id="menuIcon" class="fas fa-bars"></i>
        </button>
        <div id="menu"
            class="hidden lg:flex flex-col lg:flex-row gap-y-4 lg:gap-y-0 lg:gap-x-6 lg:items-center lg:static absolute top-20 w-1/3 bg-white lg:bg-transparent lg:w-auto lg:p-0 p-4 right-0 shadow-lg lg:shadow-none transition-all duration-300 transform lg:transform-none">
            <a href="/"
                class="text-sm sm:text-base lg:text-lg font-semibold text-gray-900 px-4 py-2 hover:rounded-md hover:bg-orange-500 hover:text-white transition-all duration-300">Beranda</a>
            <a href="/recomendations"
                class="text-sm sm:text-base lg:text-lg font-semibold text-gray-900 px-4 py-2 hover:rounded-md hover:bg-orange-500 hover:text-white transition-all duration-300">Rekomendasi</a>
            <div class="relative inline-block">
                <a href="#" id="activityButton"
                    class="flex items-baseline space-x-2 text-sm sm:text-base lg:text-lg font-semibold text-gray-900 px-4 py-2 hover:rounded-md hover:bg-orange-500 hover:text-white transition-all duration-300">
                    <span>Aktivitas</span>
                    <i id="iconArrow" class="fas fa-chevron-right text-sm"></i>
                </a>
                <div id="activityDropdown"
                    class="hidden absolute z-10 mt-2 w-48 bg-white border border-gray-300 rounded-lg shadow-lg">
                    <a href="https://chat.whatsapp.com" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Gabung
                        Grup WA</a>
                    <a href="/upload-achievements" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Upload
                        Prestasi</a>
                </div>
            </div>
            <a href="/fields-and-programs"
                class="text-sm sm:text-base lg:text-lg font-semibold text-gray-900 px-4 py-2 hover:rounded-md hover:bg-orange-500 hover:text-white transition-all duration-300">Bidang
                & Program Kerja</a>
            <a href="/contact"
                class="text-sm sm:text-base lg:text-lg font-semibold text-gray-900 px-4 py-2 hover:rounded-md hover:bg-orange-500 hover:text-white transition-all duration-300">Kontak</a>
        </div>
    </nav>
</header>

<script>
    document.getElementById('menuToggle').addEventListener('click', function () {
        const menu = document.getElementById('menu');
        const icon = document.getElementById('menuIcon');

        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
        menu.classList.toggle('translate-y-0');
        menu.classList.toggle('-translate-y-full');

        if (icon.classList.contains('fa-bars')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });

    document.getElementById('activityButton').addEventListener('click', function (event) {
        event.preventDefault();
        const dropdown = document.getElementById('activityDropdown');
        const icon = document.getElementById('iconArrow');
        dropdown.classList.toggle('hidden');

        if (dropdown.classList.contains('hidden')) {
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-right');
        } else {
            icon.classList.remove('fa-chevron-right');
            icon.classList.add('fa-chevron-down');
        }
    });

    window.addEventListener('click', function (event) {
        const dropdown = document.getElementById('activityDropdown');
        const button = document.getElementById('activityButton');
        if (!dropdown.contains(event.target) && !button.contains(event.target)) {
            dropdown.classList.add('hidden');
            const icon = document.getElementById('iconArrow');
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-right');
        }
    });

    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 0) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-white');
        } else {
            navbar.classList.remove('bg-white');
            navbar.classList.add('bg-transparent');
        }
    });
</script>
