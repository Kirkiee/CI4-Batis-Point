<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee - Batis Point Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
            background-color: #F9FAFB;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col items-center justify-center bg-gray-100">

    <div class="bg-white shadow-lg rounded-xl w-full max-w-2xl p-8">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <img src="<?= ('assets/images/logo.jpg'); ?>" alt="Batis Point Logo" class="w-12 h-12 rounded-full">
                <h2 class="text-2xl font-bold text-hunter" style="color:#355E3B;">Add New Employee</h2>
            </div>
            <a href="<?= ('admin/dashboard'); ?>" class="text-sm text-citrine hover:underline font-medium" style="color:#D4AF37;">
                ← Back to Dashboard
            </a>
        </div>

        <!-- Form -->
        <form action="<?= ('admin/saveEmployee'); ?>" method="post" class="space-y-5">

            <!-- Name -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Full Name</label>
                <input type="text" name="fullname" required placeholder="Enter employee name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-citrine focus:outline-none">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" required placeholder="Enter employee email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-citrine focus:outline-none">
            </div>

            <!-- Role -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Role</label>
                <select name="role" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-white focus:ring-2 focus:ring-citrine focus:outline-none">
                    <option value="">Select role</option>
                    <option value="Staff">Staff</option>
                    <option value="Manager">Manager</option>
                    <option value="Admin Assistant">Admin Assistant</option>
                </select>
            </div>

            <!-- Contact -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Contact Number</label>
                <input type="text" name="contact" placeholder="Enter contact number"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-citrine focus:outline-none">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" name="password" required placeholder="Set a password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-citrine focus:outline-none">
            </div>

            <!-- Buttons -->
            <div class="flex justify-end space-x-4 pt-4">
                <?= view('components/buttons/button_border', ['label' => 'Reset', 'href' => '#']) ?>
                <?= view('components/buttons/button_primary', ['label' => 'Save Employee', 'href' => '#']) ?>
            </div>
        </form>
    </div>

    <p class="text-center text-gray-500 text-sm mt-6 mb-4">
        &copy; <?= date('Y'); ?> Batis Point. All rights reserved.
    </p>

</body>

</html>