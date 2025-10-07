<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batis Point | Your Private Camping Escape</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
            scroll-behavior: smooth;
        }
    </style>
</head>
<?= view('components/header') ?>

<body class="bg-gray-100 text-gray-800">

    <section class="relative flex flex-col justify-center items-center bg-cover bg-center h-screen text-center" style="background-image: url('<?= ('assets/images/Background3.jpg'); ?>');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="z-10 relative px-4 max-w-3xl">
            <h1 class="mb-4 font-bold text-citrine text-5xl md:text-6xl" style="color:#E4D00A;">Batis Point</h1>
            <p class="mb-6 text-gray-100 text-lg md:text-xl">Your Private Camping Escape — Experience nature, uninterrupted.</p>
            <a href="#inquiry" class="bg-hunter hover:bg-opacity-90 px-6 py-3 rounded-lg font-semibold text-gray-100 transition" style="background-color:#355E3B;">Book Your Stay</a>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="bg-white py-16">
        <div class="mx-auto px-6 max-w-6xl text-center">
            <h2 class="mb-6 font-bold text-hunter text-3xl" style="color:#355E3B;">About Batis Point</h2>
            <p class="mb-8 text-gray-700 leading-relaxed">
                Batis Point offers an exclusive off-grid camping experience for your group alone — no crowds, no distractions.
                Located in the Cayabu, Tanay, our campsite features a natural spring pool, tent areas, kubos, and open spaces
                for relaxation. With no phone signal and no electricity, it’s the perfect place to disconnect and truly unwind,
                while solar lights softly illuminate your evenings under the stars.
            </p>
            <a href="<?= ('inclusions'); ?>" class="bg-citrine hover:bg-opacity-90 px-6 py-3 rounded-lg font-semibold text-gray-900 transition" style="background-color:#E4D00A;">See Full Inclusions</a>
        </div>
    </section>
    <!-- Location Section -->
    <section id="location" class="bg-gray-50 py-16">
        <div class="mx-auto px-6 max-w-6xl text-center">
            <h2 class="mb-6 font-bold text-hunter text-3xl" style="color:#355E3B;">Find Us</h2>
            <p class="mb-8 text-gray-700">
                Escape from the noise — reconnect with nature where the signal fades and peace begins.

            </p>
            <img src="<?= ('assets/images/maps.png'); ?>" alt="Map" class="shadow-md mx-auto rounded-lg w-full md:w-2/3">
        </div>
    </section>

    <?= view('components/footer'); ?>
    <!-- Mobile Menu Script -->
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>