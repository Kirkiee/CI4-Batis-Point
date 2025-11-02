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
    <section class="relative h-[90vh] flex flex-col items-center justify-center text-center px-6 bg-cover bg-center"
        style="background-image: url('assets/images/batis2.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div> <!-- subtle overlay for text readability -->
    </section>

    <!-- Call to Action Section -->
    <section class="relative bg-[#FCFFF1] py-24 text-center overflow-hidden">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-4xl font-proza font-semibold text-[#355E3B] mb-4">
                Your Private Escape Awaits
            </h2>
            <p class="text-gray-700 mb-10 leading-relaxed">
                Unwind beneath the trees, beside the springs, and under a sky full of stars.
                Batis Point is where tranquility and togetherness meet.
            </p>
            <a href="<?= ('inquire'); ?>"
                class="bg-[#F1B24A] hover:bg-[#e19c2d] text-[#355E3B] font-semibold px-8 py-3 rounded-xl shadow-md transition inline-block">
                Book Your Stay Now
            </a>
        </div>
        <!-- Soft wave divider -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-20 text-[#FCFFF1]" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1200 120">
                <path d="M0,0V46.29c47.87,22.2,98.7,29,146.6,17,48.7-12.19,90.3-43.46,139-55.44C375.4-6.77,428.1,4.8,478,22.45
            c61,21.81,117.3,57.47,178,73.59,51.3,13.6,104.1,9.4,155.6-4.9,60.5-17.2,113.3-49.1,172-61.6,30.2-6.2,61.1-6.2,91.3,1V0Z"
                    fill="#FCFFF1"></path>
            </svg>
        </div>
    </section>

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