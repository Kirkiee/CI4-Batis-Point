<!-- Header / Navigation -->
<header class="fixed top-0 left-0 z-50 w-full bg-gradient-to-r from-[#355E3B] via-[#4D774E] to-[#9DC88D] backdrop-blur-sm shadow-lg">
    <div class="flex justify-between items-center mx-auto px-6 py-3 max-w-6xl">

        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <a href="<?= ('/'); ?>" class="flex items-center space-x-3 no-underline hover:opacity-90" aria-label="Go to landing page">
                <img src="<?= ('assets/images/logo.jpg'); ?>" alt="Batis Point Logo" class="rounded-full w-12 h-12 object-cover">
                <span class="font-proza text-2xl font-semibold text-[#FCFFF1]">Batis Point</span>
            </a>
        </div>

        <!-- Navigation Links (Right-Aligned Buttons) -->
        <nav class="hidden md:flex space-x-4 font-poppins font-medium">
            <a href="<?= ('gallery'); ?>"
                class="px-5 py-2 rounded-full bg-[#355E3B] text-[#FCFFF1] shadow-md hover:bg-[#F1B24A] hover:text-[#1F3D2A] transition duration-200">
                Gallery
            </a>
            <a href="<?= ('inquire'); ?>"
                class="px-5 py-2 rounded-full bg-[#355E3B] text-[#FCFFF1] shadow-md hover:bg-[#F1B24A] hover:text-[#1F3D2A] transition duration-200">
                Inquire
            </a>
            <a href="<?= ('Inclusions'); ?>"
                class="px-5 py-2 rounded-full bg-[#355E3B] text-[#FCFFF1] shadow-md hover:bg-[#F1B24A] hover:text-[#1F3D2A] transition duration-200">
                Inclusions
            </a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="menuBtn" class="md:hidden focus:outline-none text-[#FCFFF1] text-2xl">
            ☰
        </button>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-gradient-to-b from-[#355E3B] to-[#4D774E] shadow-inner border-t border-[#9EC590]/30">
        <a href="<?= ('gallery'); ?>" class="block hover:bg-[#9EC590]/20 px-6 py-3 border-b border-[#9EC590]/30 text-[#FCFFF1]">Gallery</a>
        <a href="<?= ('inquire'); ?>" class="block hover:bg-[#9EC590]/20 px-6 py-3 border-b border-[#9EC590]/30 text-[#FCFFF1]">Inquire</a>
        <a href="<?= ('Inclusions'); ?>" class="block hover:bg-[#9EC590]/20 px-6 py-3 border-b border-[#9EC590]/30 text-[#FCFFF1]">Inclusions</a>
    </div>
</header>

<div class="h-5"></div>

<script>
    // Mobile menu toggle
    document.getElementById('menuBtn').addEventListener('click', () => {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    });
</script>