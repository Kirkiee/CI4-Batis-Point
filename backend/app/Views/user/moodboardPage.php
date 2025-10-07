<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batis Point | Mood Board</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
            scroll-behavior: smooth;
        }
    </style>
</head>

<?= view('components/header') ?>


<body class="bg-gray-50 text-gray-800">

    <section class="max-w-6xl mx-auto px-6 py-16">
        <!-- Page Title -->
        <h1 class="text-3xl font-bold mb-2">Mood board</h1>
        <p class="text-gray-600 mb-10">Visual identity samples for Batis Point (eco-camping resort)</p>

        <!-- Color System -->
        <div class="mb-16">
            <h2 class="text-xl font-semibold mb-4">Color system</h2>
            <p class="text-gray-600 mb-6">Three core colors with three tone levels each (dark → light). Preview and hex codes shown below.</p>

            <div class="grid grid-cols-3 gap-8">
                <!-- Forest Green -->
                <div>
                    <div class="space-y-2">
                        <div class="h-10 rounded-md" style="background-color:#1F3D2A;"></div>
                        <div class="h-10 rounded-md" style="background-color:#355E3B;"></div>
                        <div class="h-10 rounded-md" style="background-color:#8CBF75;"></div>
                    </div>
                    <p class="mt-3 text-sm font-medium">Forest Green (Main)</p>
                    <p class="text-xs text-gray-600">#1F3D2A — #355E3B — #8CBF75</p>
                </div>

                <!-- Citrine Yellow -->
                <div>
                    <div class="space-y-2">
                        <div class="h-10 rounded-md" style="background-color:#C2A800;"></div>
                        <div class="h-10 rounded-md" style="background-color:#E4D00A;"></div>
                        <div class="h-10 rounded-md" style="background-color:#F7EFA4;"></div>
                    </div>
                    <p class="mt-3 text-sm font-medium">Citrine Yellow (Accent)</p>
                    <p class="text-xs text-gray-600">#C2A800 — #E4D00A — #F7EFA4</p>
                </div>

                <!-- Stone Gray -->
                <div>
                    <div class="space-y-2">
                        <div class="h-10 rounded-md" style="background-color:#7A7A7A;"></div>
                        <div class="h-10 rounded-md" style="background-color:#D9D9D9;"></div>
                        <div class="h-10 rounded-md" style="background-color:#F4F4F4;"></div>
                    </div>
                    <p class="mt-3 text-sm font-medium">Stone Gray (Neutral)</p>
                    <p class="text-xs text-gray-600">#7A7A7A — #D9D9D9 — #F4F4F4</p>
                </div>
            </div>
        </div>

        <!-- Typography -->
        <div class="mb-16">
            <h2 class="text-xl font-semibold mb-4">Typography</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <p class="font-semibold text-sm mb-1">Heading font</p>
                    <p class="text-2xl font-bold">Helvetica — Heading Example</p>
                </div>
                <div>
                    <p class="font-semibold text-sm mb-1">Body font</p>
                    <p class="text-gray-700">Arial, — Clean and modern text for readability across digital and print materials.</p>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mb-16">
            <h2 class="text-xl font-semibold mb-4">Buttons</h2>

            <!-- Light Mode -->
            <p class="mb-2 font-medium text-gray-700">Light Mode</p>
            <div class="flex flex-wrap gap-4 mb-6">
                <button class="bg-[#355E3B] text-white px-4 py-2 rounded-md font-medium">Primary</button>
                <button class="bg-[#E4D00A] text-gray-900 px-4 py-2 rounded-md font-medium">Secondary</button>
                <button class="border border-gray-400 text-gray-700 px-4 py-2 rounded-md font-medium">Border</button>
                <button class="bg-gray-300 text-gray-500 px-4 py-2 rounded-md font-medium cursor-not-allowed">Disabled</button>
            </div>

            <!-- Dark Mode -->
            <p class="mb-2 font-medium text-gray-700">Dark Mode</p>
            <div class="flex flex-wrap gap-4 bg-gray-800 p-6 rounded-lg">
                <button class="bg-[#355E3B] text-white px-4 py-2 rounded-md font-medium">Primary</button>
                <button class="bg-[#E4D00A] text-gray-900 px-4 py-2 rounded-md font-medium">Secondary</button>
                <button class="border border-[#E4D00A] text-[#E4D00A] px-4 py-2 rounded-md font-medium">Border</button>
                <button class="bg-gray-600 text-gray-400 px-4 py-2 rounded-md font-medium cursor-not-allowed">Disabled</button>
            </div>

            <p class="text-xs text-gray-600 mt-2">Primary for main CTAs, secondary for supportive actions, border for subtle actions, disabled for unavailable states.</p>
        </div>

        <!-- Card Samples -->
        <section class="mb-8">
            <h2 class="mb-4 font-semibold text-lg">Card sample</h2>
            <div class="gap-4 grid grid-cols-1 md:grid-cols-3">
                <?= view('components/cards/card', ['title' => '2,317', 'excerpt' => 'Happy Campers Hosted', 'image' => null]) ?>
                <?= view('components/cards/card', ['title' => 'Private Spring Pool', 'excerpt' => 'A serene oasis for your group to relax in crystal-clear waters.', 'image' => null]) ?>
                <?= view('components/cards/card', ['title' => '"An unforgettable nature escape — peaceful, private, and pure serenity."', 'excerpt' => '— Guest Review', 'image' => null]) ?>
            </div>
        </section>

        <!-- Logos -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Logos</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white shadow-sm border border-gray-200 p-8 rounded-lg flex flex-col items-center">
                    <img src="<?= ('assets/images/logo-circle.png'); ?>" alt="Circle Logo" class="w-24 h-24 mb-4">
                    <p>Main — Circle</p>
                </div>
                <div class="bg-white shadow-sm border border-gray-200 p-8 rounded-lg flex flex-col items-center">
                    <img src="<?= ('assets/images/logo.jpg'); ?>" alt="Square Logo" class="w-24 h-24 mb-4">
                    <p>Main — Square</p>
                </div>
            </div>
        </div>
    </section>

    <?= view('components/footer'); ?>

</body>

</html>