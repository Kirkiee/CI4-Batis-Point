<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batis Point Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
            background-color: #F3F4F6;
            /* light gray background */
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-xl w-full max-w-md p-8">
        <!-- Logo -->
        <div class="flex flex-col items-center mb-6">
            <img src="<?= ('assets/images/logo.jpg'); ?>" alt="Batis Point Logo" class="w-16 h-16 rounded-full">
            <a href="http://localhost:8090/" class="mt-4 inline-block px-4 py-2 rounded border border-gray-300 text-gray-700 hover:bg-gray-50 transition" style="font-family: Helvetica, Arial, sans-serif;">Back to home</a>
        </div>

        <h2 class="text-2xl font-bold text-center mb-6 text-hunter" style="color:#355E3B;">Admin Login</h2>

        <!-- Login Form -->
        <form action="<?= base_url('admin/loginPage'); ?>" method="post" class="space-y-5">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Username</label>
                <input type="text" name="username" required placeholder="Enter your username"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-citrine focus:outline-none">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" name="password" required placeholder="Enter your password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-citrine focus:outline-none">
            </div>

            <button type="submit" class="w-full bg-hunter text-white font-semibold px-4 py-2 rounded-lg hover:bg-opacity-90 transition" style="background-color:#355E3B;">
                Login
            </button>
        </form>

        <p class="text-center text-gray-500 text-sm mt-6">
            &copy; <?= date('Y'); ?> Batis Point. All rights reserved.
        </p>
    </div>

</body>

</html>