<?php
// Page: admin/admindashboard.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Batis Point</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Proza+Libre:wght@600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FCFFF1;
            color: #355E3B;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Proza Libre', serif;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">

    <!-- Top Navigation -->
    <header class="bg-[#355E3B] text-[#FCFFF1] shadow-md px-8 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-proza font-semibold">Batis Point Admin</h1>
        <button class="bg-[#F1B24A] text-[#355E3B] font-semibold px-4 py-2 rounded-lg hover:bg-[#e19c2d] transition">
            Logout
        </button>
    </header>

    <!-- Dashboard Layout -->
    <div class="flex flex-1">

        <!-- Sidebar -->
        <aside class="w-64 bg-[#9EC590]/40 border-r border-[#9EC590]/50 p-6 hidden md:block">
            <nav class="space-y-4">
                <a href="#" class="block font-medium text-[#355E3B] hover:text-[#F1B24A] transition">🏠 Dashboard</a>
                <a href="#" class="block font-medium text-[#355E3B] hover:text-[#F1B24A] transition">🧾 Manage Bookings</a>
                <a href="#" class="block font-medium text-[#355E3B] hover:text-[#F1B24A] transition">📸 Gallery</a>
                <a href="#" class="block font-medium text-[#355E3B] hover:text-[#F1B24A] transition">💬 Inquiries</a>
                <a href="#" class="block font-medium text-[#355E3B] hover:text-[#F1B24A] transition">⚙️ Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <!-- Stats Overview -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="bg-[#355E3B] text-[#FCFFF1] rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-semibold mb-2">Total Bookings</h3>
                    <p class="text-3xl font-bold">128</p>
                </div>
                <div class="bg-[#9EC590] text-[#355E3B] rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-semibold mb-2">Active Inquiries</h3>
                    <p class="text-3xl font-bold">24</p>
                </div>
                <div class="bg-[#F1B24A] text-[#355E3B] rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-semibold mb-2">Pending Requests</h3>
                    <p class="text-3xl font-bold">7</p>
                </div>
            </section>

            <!-- Data Section -->
            <section>
                <h2 class="text-2xl font-proza font-semibold mb-6">Recent Inquiries</h2>
                <div class="bg-white border border-[#E5E7EB] rounded-xl shadow-sm overflow-hidden">
                    <table class="min-w-full text-left text-sm">
                        <thead class="bg-[#9EC590]/30 text-[#355E3B]">
                            <tr>
                                <th class="px-6 py-3 font-semibold">Name</th>
                                <th class="px-6 py-3 font-semibold">Email</th>
                                <th class="px-6 py-3 font-semibold">Message</th>
                                <th class="px-6 py-3 font-semibold">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t hover:bg-[#FCFFF1]">
                                <td class="px-6 py-4">John Cruz</td>
                                <td class="px-6 py-4">john@example.com</td>
                                <td class="px-6 py-4">Inquiry about weekend rates</td>
                                <td class="px-6 py-4"><span class="bg-[#9EC590] text-white px-3 py-1 rounded-full text-xs">Replied</span></td>
                            </tr>
                            <tr class="border-t hover:bg-[#FCFFF1]">
                                <td class="px-6 py-4">Maria Santos</td>
                                <td class="px-6 py-4">maria@example.com</td>
                                <td class="px-6 py-4">Question about available slots</td>
                                <td class="px-6 py-4"><span class="bg-[#F1B24A] text-[#355E3B] px-3 py-1 rounded-full text-xs">Pending</span></td>
                            </tr>
                            <tr class="border-t hover:bg-[#FCFFF1]">
                                <td class="px-6 py-4">Luis Dela Cruz</td>
                                <td class="px-6 py-4">luis@example.com</td>
                                <td class="px-6 py-4">Asking about group discounts</td>
                                <td class="px-6 py-4"><span class="bg-[#355E3B] text-[#FCFFF1] px-3 py-1 rounded-full text-xs">Resolved</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

</body>

</html>