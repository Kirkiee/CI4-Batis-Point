<?php
// Page: user/road_map
?>
<!doctype html>
<html lang="en">

<?= view('components/head') ?>

<body class="bg-white font-sans text-slate-900">
    <?= view('components/header', ['active' => 'Road map']) ?>

    <main class="mx-auto px-6 py-12 max-w-5xl">
        <!-- Header -->
        <header class="mb-8">
            <h1 class="text-3xl font-bold text-[#1A4314]">Road map</h1>
            <p class="text-gray-600 mt-1">High-level plan and status for upcoming features.</p>
        </header>

        <section class="mb-8">
            <div class="gap-4 grid grid-cols-1 md:grid-cols-3">
                <?= view('components/cards/card', ['title' => 'Admin Dashboard', 'excerpt' => 'Allows admins to edit rates and update gallery', 'image' => null]) ?>
                <?= view('components/cards/card', ['title' => 'Service CRUD', 'excerpt' => 'Add, Update, and Remove certain inclusions or rates.', 'image' => null]) ?>
                <?= view('components/cards/card', ['title' => 'Client inquiry', 'excerpt' => 'Lets clients make inquiries 
                ', 'image' => null]) ?>
                <?= view('components/cards/card', ['title' => 'Request CRUD', 'excerpt' => 'Lets clients Add, Update, Delete certain inquires', 'image' => null]) ?>
                <?= view('components/cards/card', ['title' => 'Waze Connection ', 'excerpt' => 'Add Waze to landing page', 'image' => null]) ?>

            </div>
        </section>
    </main>

    <?= view('components/footer', [
        'copyright' => 'Batis Point — CI4 Roadmap',
        'links' => [
            ['label' => 'Services', 'href' => '/services'],
            ['label' => 'Mood board', 'href' => '/mood-board'],
            ['label' => 'Road map', 'href' => '/road-map']
        ]
    ]) ?>

    <script>
        // Status filter logic
        (function() {
            const select = document.getElementById('statusFilter');

            function normalize(s) {
                return String(s || '').trim().toLowerCase();
            }

            select.addEventListener('change', function(e) {
                const v = normalize(e.target.value);
                document.querySelectorAll('#roadmapList [data-status]').forEach(el => {
                    const s = normalize(el.dataset.status);
                    el.style.display = (v === 'all' || s === v) ? '' : 'none';
                });
            });
        })();
    </script>

    <style>
        /* Typography + Colors */
        body {
            font-family: Helvetica, Arial, sans-serif;
        }

        /* Status badges (ready to apply manually) */
        .status-badge {
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            display: inline-block;
            text-transform: capitalize;
        }

        .status-backlog {
            background-color: #D1D5DB;
            color: #374151;
        }

        .status-planned {
            background-color: #E5E7EB;
            color: #4B5563;
        }

        .status-in-progress {
            background-color: #E3B505;
            color: #1A1A1A;
        }

        .status-done {
            background-color: #1A4314;
            color: #FFFFFF;
        }

        /* Subtle divider lines for visual grouping */
        hr {
            border: none;
            border-top: 1px solid #E5E7EB;
            margin: 2rem 0;
        }
    </style>
</body>

</html>