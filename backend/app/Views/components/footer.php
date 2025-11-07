<!-- Footer -->
<footer class="bg-[#355E3B] text-[#FCFFF1] py-10 px-6 mt-16">
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 items-center text-center md:text-left">

        <!-- Branding -->
        <div>
            <h3 class="font-proza text-2xl font-semibold mb-2">Batis Point</h3>
            <p class="text-sm text-[#FCFFF1]/80">Nature. Comfort. Serenity.</p>
        </div>

        <!-- Navigation Buttons -->
        <div class="flex justify-center md:justify-center gap-4">
            <a href="<?= ('/moodboard'); ?>"
                class="px-5 py-2 rounded-full bg-[#F1B24A] text-[#1F3D2A] font-poppins font-medium hover:bg-[#d99c3d] transition duration-200 shadow-md">
                Moodboard
            </a>
            <a href="<?= ('/roadmap'); ?>"
                class="px-5 py-2 rounded-full border border-[#9EC590] text-[#FCFFF1] font-poppins font-medium hover:bg-[#9EC590]/20 transition duration-200">
                Roadmap
            </a>
        </div>

        <!-- Copyright -->
        <div class="text-sm text-[#FCFFF1]/70 md:text-right">
            <p>© <?= date('Y'); ?> Batis Point. All rights reserved.</p>
        </div>
    </div>

    <!-- Divider -->
    <div class="mt-8 border-t border-[#9EC590]/30 pt-4 text-xs text-[#FCFFF1]/50 text-center">
        Crafted with care amidst nature’s calm 🌿
    </div>
</footer>