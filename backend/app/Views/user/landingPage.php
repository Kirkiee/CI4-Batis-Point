<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batis Point | Your Private Camping Escape</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Proza+Libre:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            background-color: #FCFFF1;
        }

        h1,
        h2,
        h3 {
            font-family: 'Proza Libre', serif;
        }
    </style>

</head>

<?= view('components/header') ?>

<body class="text-gray-800">

    <!-- Hero Section -->
    <section class="relative h-[67vh] flex flex-col items-center justify-center text-center px-6 bg-cover bg-center"
        style="background-image: url('assets/images/batis2.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div> <!-- subtle overlay  -->
    </section>

    <?= view('components/cards/cta'); ?>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-proza text-[#355E3B] mb-4">About Batis Point</h2>
                <p class="text-gray-700 leading-relaxed mb-8">
                    Batis Point offers an exclusive off-grid camping experience for your group alone — no crowds, no distractions.
                    Nestled in the heart of Cayabu, Tanay, our campsite features a natural spring pool, tent areas, kubos,
                    and open spaces for rest and connection. With no phone signal or electricity, you can fully unplug
                    while the soft glow of solar lights guides your evenings under the stars.
                </p>
                <a href="<?= ('inclusions'); ?>"
                    class="bg-[#F1B24A] hover:bg-[#e19c2d] text-[#355E3B] font-semibold px-6 py-3 rounded-lg transition">
                    See Full Inclusions
                </a>
            </div>
            <div class="flex justify-center">
                <img src="<?= ('assets/images/view_from_pool.jpg'); ?>" alt="About Batis Point"
                    class="rounded-2xl shadow-lg w-full max-w-md object-cover">
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="py-20 bg-[#9EC590]/10">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-proza text-[#355E3B] mb-4">Find Us</h2>
            <p class="text-gray-700 mb-8">
                Escape the noise and reconnect with nature — where the signal fades and peace begins.
            </p>
            <div class="bg-[#FCFFF1] shadow-md rounded-xl p-4 inline-block">
                <img src="<?= ('assets/images/maps.png'); ?>" alt="Map of Batis Point"
                    class="rounded-lg shadow-sm w-full md:w-[600px]">
            </div>
        </div>
    </section>

    <?= view('components/footer'); ?>

    <script>
        // Mobile menu toggle
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>