<?php
// Page: user/roadmap.php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Road Map | Batis Point</title>

    <!-- ✅ Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        hunter: '#355E3B',
                        moss: '#9EC590',
                        citrine: '#F1B24A',
                        cream: '#FCFFF1',
                        stone: '#EDEDE9',
                    },
                    fontFamily: {
                        proza: ['"Proza Libre"', 'serif'],
                        poppins: ['"Poppins"', 'sans-serif'],
                    },
                    boxShadow: {
                        soft: '0 4px 12px rgba(0, 0, 0, 0.06)',
                    }
                }
            }
        }
    </script>

    <!-- ✅ Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Proza+Libre:wght@600;700&display=swap" rel="stylesheet">
</head>

<?= view('components/header') ?>

<body class="bg-cream font-poppins text-gray-800">

    <main class="relative mx-auto max-w-6xl px-6 py-20">
        <!-- Page Header -->
        <header class="text-center mb-16">
            <h1 class="text-4xl font-proza font-bold text-hunter">Road Map</h1>
            <p class="mt-3 text-gray-600 text-base max-w-2xl mx-auto">
                A visual overview of Batis Point’s upcoming features and enhancements — see what’s planned, in progress, and completed.
            </p>
        </header>

        <!-- Decorative Divider -->
        <div class="flex justify-center mb-12">
            <div class="h-1 w-24 bg-citrine rounded-full"></div>
        </div>

        <!-- Filter -->
        <div class="flex justify-end mb-8">
            <select id="statusFilter"
                class="border border-gray-300 bg-white text-gray-700 rounded-lg text-sm px-3 py-2 focus:ring-2 focus:ring-citrine focus:outline-none shadow-sm">
                <option value="all">All</option>
                <option value="planned">Planned</option>
                <option value="in-progress">In Progress</option>
                <option value="done">Done</option>
                <option value="backlog">Backlog</option>
            </select>
        </div>

        <!-- Roadmap Grid -->
        <section id="roadmapList" class="relative grid gap-10 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

            <!-- Subtle Road Line (Visual Flow) -->
            <div class="absolute inset-0 z-0 flex items-center justify-center">
                <div class="hidden md:block h-full w-px bg-gradient-to-b from-citrine via-moss to-hunter opacity-30 pointer-events-none"></div>
            </div>

            <!-- Cards -->
            <div class="relative z-10 col-span-full grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <?= view('components/cards/roadmap_cards', [
                    'title' => 'Admin Dashboard',
                    'excerpt' => 'Allows admins to manage rates, edit listings, and update gallery.',
                    'priority' => 'High',
                    'status' => 'Done'
                ]) ?>

                <?= view('components/cards/roadmap_cards', [
                    'title' => 'Gallery CRUD',
                    'excerpt' => 'Add, update, or remove Gallery pictures.',
                    'priority' => 'High',
                    'status' => 'In Progress'
                ]) ?>

                <?= view('components/cards/roadmap_cards', [
                    'title' => 'Client Inquiry System',
                    'excerpt' => 'Lets clients send inquiries or feedback easily through the platform.',
                    'priority' => 'Medium',
                    'status' => 'Planned'
                ]) ?>

                <?= view('components/cards/roadmap_cards', [
                    'title' => 'Inquiry CRUD',
                    'excerpt' => 'Allows clients to modify or delete their inquiries after submission.',
                    'priority' => 'Medium',
                    'status' => 'Planned'
                ]) ?>

                <?= view('components/cards/roadmap_cards', [
                    'title' => 'Google Maps Addition',
                    'excerpt' => 'Enables direct navigation from the landing page to Batis Point’s location.',
                    'priority' => 'Low',
                    'status' => 'Backlog' //placeholder for backlog's design (actually planned XD)
                ]) ?>
            </div>
        </section>
    </main>

    <?= view('components/footer') ?>

    <script>
        // Filtering Logic
        (function() {
            const select = document.getElementById('statusFilter');
            const cards = document.querySelectorAll('#roadmapList [data-status]');

            select.addEventListener('change', function() {
                const value = this.value.toLowerCase();
                cards.forEach(card => {
                    const status = card.dataset.status.toLowerCase();
                    card.style.display = (value === 'all' || status === value) ? '' : 'none';
                });
            });
        })();
    </script>

</body>

</html>