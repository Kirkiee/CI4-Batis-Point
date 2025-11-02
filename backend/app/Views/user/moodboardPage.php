<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batis Point | Mood Board</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Proza+Libre:wght@500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bp-forest: #355E3B;
            --bp-moss: #9EC590;
            --bp-gold: #F1B24A;
            --bp-neutral: #FCFFF1;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bp-neutral);
            color: var(--bp-forest);
            scroll-behavior: smooth;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Proza Libre', sans-serif;
        }

        .gradient-hero {
            background: linear-gradient(90deg, var(--bp-forest) 0%, var(--bp-moss) 100%);
        }
    </style>
</head>

<?= view('components/header') ?>

<body class="text-gray-800">

    <!-- Hero Section -->
    <section class="gradient-hero text-white py-20 px-6 relative overflow-hidden">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 items-center gap-12">
            <div>
                <h1 class="text-5xl font-bold mb-4">Batis Point Mood Board</h1>
                <p class="text-lg opacity-90 mb-6">A visual identity inspired by nature — blending lush greens, golden sunlight, and serene eco-luxury.</p>
                <a href="#colors" class="bg-[var(--bp-gold)] text-[var(--bp-forest)] px-6 py-3 rounded-full font-semibold hover:opacity-90 transition">Explore Colors</a>
            </div>
            <div class="relative">
                <div class="absolute -top-10 right-0 w-72 h-72 bg-[var(--bp-neutral)] rounded-full blur-2xl opacity-30"></div>
                <img src="<?= ('assets/images/logo-circle.png'); ?>" alt="Batis Point Logo" class="relative z-10 mx-auto w-64 h-64 object-contain drop-shadow-xl">
            </div>
        </div>
    </section>

    <!-- Color System -->
    <section id="colors" class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold mb-8">Color System</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div>
                <div class="h-24 rounded-md" style="background-color:#355E3B;"></div>
                <p class="mt-3 font-medium">Forest Green</p>
                <p class="text-xs text-gray-600">#355E3B</p>
            </div>
            <div>
                <div class="h-24 rounded-md" style="background-color:#9EC590;"></div>
                <p class="mt-3 font-medium">Moss</p>
                <p class="text-xs text-gray-600">#9EC590</p>
            </div>
            <div>
                <div class="h-24 rounded-md" style="background-color:#F1B24A;"></div>
                <p class="mt-3 font-medium">Golden Accent</p>
                <p class="text-xs text-gray-600">#F1B24A</p>
            </div>
            <div>
                <div class="h-24 rounded-md border border-gray-200" style="background-color:#FCFFF1;"></div>
                <p class="mt-3 font-medium">Neutral Petal</p>
                <p class="text-xs text-gray-600">#FCFFF1</p>
            </div>
        </div>
    </section>

    <!-- Typography -->
    <section class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold mb-8">Typography</h2>
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <p class="text-sm font-semibold mb-2">Heading Font — Proza Libre</p>
                <h3 class="text-4xl font-bold">Nature’s Voice in Bold Form</h3>
            </div>
            <div>
                <p class="text-sm font-semibold mb-2">Body Font — Poppins</p>
                <p class="text-gray-700">Modern, approachable, and clean. Poppins balances the organic nature theme with digital clarity.</p>
            </div>
        </div>
    </section>

    <!-- Buttons -->
    <section class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold mb-8">Button Styles</h2>
        <div class="space-y-6">
            <div>
                <h3 class="font-semibold mb-3">Light Mode</h3>
                <div class="flex flex-wrap gap-4">
                    <?= view('components/buttons/button_primary', ['label' => 'Primary', 'href' => '#']) ?>
                    <?= view('components/buttons/button_secondary', ['label' => 'Secondary', 'href' => '#']) ?>
                    <?= view('components/buttons/button_border', ['label' => 'Border', 'href' => '#']) ?>
                    <?= view('components/buttons/button_primary', ['label' => 'Disabled', 'href' => '#', 'disable' => true]) ?>
                </div>
            </div>
            <div>
                <h3 class="font-semibold mb-3">Dark Mode</h3>
                <div class="flex flex-wrap gap-4 bg-[var(--bp-forest)] p-4 rounded-lg w-fit">
                    <?= view('components/buttons/button_primary', ['label' => 'Primary', 'href' => '#', 'dark' => true]) ?>
                    <?= view('components/buttons/button_secondary', ['label' => 'Secondary', 'href' => '#']) ?>
                    <?= view('components/buttons/button_border', ['label' => 'Border', 'href' => '#']) ?>
                    <?= view('components/buttons/button_primary', ['label' => 'Disabled', 'href' => '#', 'disable' => true]) ?>
                </div>
            </div>
            <p class="text-gray-500 text-sm">Primary for main CTAs, secondary for supportive actions, border for subtle actions, disabled for unavailable states.</p>
        </div>
    </section>

    <!-- Cards -->
    <section class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold mb-8">Card Samples</h2>
        <div class="gap-6 grid grid-cols-1 md:grid-cols-3">
            <?= view('components/cards/card', ['title' => '2,317', 'excerpt' => 'Happy Campers Hosted', 'image' => null]) ?>
            <?= view('components/cards/card', ['title' => 'Private Spring Pool', 'excerpt' => 'A serene oasis for your group to relax in crystal-clear waters.', 'image' => null]) ?>
            <?= view('components/cards/card', ['title' => '"An unforgettable nature escape — peaceful, private, and pure serenity."', 'excerpt' => '— Guest Review', 'image' => null]) ?>
        </div>
    </section>

    <!-- Logos -->
    <section class="max-w-6xl mx-auto px-6 py-16">
        <!-- Section Title -->
        <h2 class="text-3xl font-proza font-bold text-[var(--bp-forest)] mb-8">
            Logos
        </h2>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Circle Logo -->
            <div class="bg-[var(--bp-petal)] border border-[var(--bp-moss)] rounded-2xl shadow-sm hover:shadow-md transition duration-300 hover:-translate-y-1 flex flex-col items-center p-10">
                <div class="w-28 h-28 bg-white border border-[var(--bp-gold)] rounded-full flex items-center justify-center mb-5 shadow-sm">
                    <img src="<?= ('assets/images/logo-circle.png'); ?>" alt="Circle Logo" class="w-20 h-20 object-contain">
                </div>
                <p class="font-poppins text-[var(--bp-forest)] text-sm tracking-wide">
                    Main — Circle
                </p>
            </div>

            <!-- Square Logo -->
            <div class="bg-[var(--bp-petal)] border border-[var(--bp-moss)] rounded-2xl shadow-sm hover:shadow-md transition duration-300 hover:-translate-y-1 flex flex-col items-center p-10">
                <div class="w-28 h-28 bg-white border border-[var(--bp-gold)] rounded-xl flex items-center justify-center mb-5 shadow-sm">
                    <img src="<?= ('assets/images/logo.jpg'); ?>" alt="Square Logo" class="w-20 h-20 object-contain">
                </div>
                <p class="font-poppins text-[var(--bp-forest)] text-sm tracking-wide">
                    Main — Square
                </p>
            </div>
        </div>
    </section>


    <?= view('components/footer'); ?>

</body>

</html>