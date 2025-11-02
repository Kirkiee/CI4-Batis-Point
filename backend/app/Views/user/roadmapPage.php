<?php
// Page: user/roadmapPage.php
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
                        citrine: '#E3B505',
                        forest: '#1A4314',
                        stone: '#D6D6D6',
                        lightstone: '#F5F5F5',
                    },
                    fontFamily: {
                        sans: ['Inter', 'Helvetica', 'Arial', 'sans-serif'],
                    },
                    boxShadow: {
                        subtle: '0 2px 6px rgba(0, 0, 0, 0.06)',
                    }
                }
            }
        }
    </script>
</head>

<?= view('components/header') ?>

<body class="bg-white font-sans text-slate-800">
    <main class="mx-auto max-w-6xl px-6 py-12">
        <!-- Header -->
        <header class="mb-12">
            <h1 class="text-3xl font-bold text-forest tracking-tight">Road Map</h1>
            <p class="text-slate-600 mt-1">A visual overview of features currently planned and in progress.</p>
        </header>

        <!-- Filter -->
        <div class="flex justify-end mb-6">
            <select id="statusFilter"
                class="border border-stone bg-white rounded-lg text-sm px-3 py-1.5 focus:ring-2 focus:ring-citrine focus:outline-none">
                <option value="all">All</option>
                <option value="planned">Planned</option>
                <option value="in-progress">In Progress</option>
                <option value="done">Done</option>
                <option value="backlog">Backlog</option>
            </select>
        </div>

        <!-- Roadmap Grid -->
        <section id="roadmapList" class="relative grid gap-10 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

            <!-- Road Path (background arrows / road lines) -->
            <div class="absolute inset-0 z-0 flex items-center justify-center">
                <div
                    class="hidden md:block h-full w-px bg-gradient-to-b from-citrine via-stone to-forest opacity-30 pointer-events-none">
                </div>
            </div>

            <!-- Cards -->
            <div class="relative z-10 col-span-full grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <?= view('components/cards/roadmap_cards', [
                    'title' => 'Admin Dashboard',
                    'excerpt' => 'Allows admins to manage rates, edit listings, and update gallery.',
                    'priority' => 'High',
                    'status' => 'Done'
                ]) ?>

                <?= view('components/cards/roadmap_cards', [
                    'title' => 'Service CRUD',
                    'excerpt' => 'Add, update, or remove service rates and descriptions.',
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
                    'title' => 'Request CRUD',
                    'excerpt' => 'Allows clients to modify or delete their inquiries after submission.',
                    'priority' => 'Low',
                    'status' => 'Planned'
                ]) ?>

                <?= view('components/cards/roadmap_cards', [
                    'title' => 'Waze Integration',
                    'excerpt' => 'Enables direct navigation from the landing page to Batis Point’s location.',
                    'priority' => 'Low',
                    'status' => 'Backlog'
                ]) ?>
            </div>
        </section>
    </main>

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

<?= view('components/footer') ?>

</html>