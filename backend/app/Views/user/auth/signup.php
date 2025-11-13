<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batis Point Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
            background-color: #F9FAFB;
        }

        .btn-primary {
            background-color: #1A4314;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #163610;
        }

        .focus-ring:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(227, 181, 5, 0.5);
        }

        .link {
            color: #1A4314;
        }

        .link:hover {
            color: #E3B505;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen px-4">

    <div class="bg-white shadow-md rounded-2xl w-full max-w-md p-8 border border-gray-100">
        <!-- Logo and Header -->
        <div class="flex flex-col items-center mb-6">
            <img src="<?= ('assets/images/logo.jpg'); ?>" alt="Batis Point Logo"
                class="w-16 h-16 rounded-full border border-gray-200 shadow-sm">
            <h2 class="text-3xl font-bold text-[#1A4314] mt-4">Create an Account</h2>
            <p class="text-gray-500 text-sm mt-1">Join Batis Point and start your private escape experience.</p>
        </div>

        <!-- Signup Form -->
        <form action="<?= ('signup/submit'); ?>" method="post" class="space-y-5">
            <!-- Full Name -->
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your full name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus-ring focus:ring-2 text-gray-900">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus-ring focus:ring-2 text-gray-900">
            </div>

            <!-- Username -->
            <div>
                <label for="username" class="block text-gray-700 font-medium mb-2">Username</label>
                <input type="text" id="username" name="username" required placeholder="Choose a username"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus-ring focus:ring-2 text-gray-900">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" required placeholder="Create a password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus-ring focus:ring-2 text-gray-900">
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="confirm_password" class="block text-gray-700 font-medium mb-2">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required placeholder="Re-enter password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus-ring focus:ring-2 text-gray-900">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full btn-primary font-semibold px-4 py-2 rounded-lg hover:opacity-95 transition-colors duration-150">
                Sign Up
            </button>

            <!-- Divider -->
            <div class="flex items-center my-4">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="px-2 text-sm text-gray-500">or</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <!-- Social Sign-Up Buttons -->
            <div class="space-y-3">
                <a href="<?= ('auth/google'); ?>"
                    class="w-full flex items-center justify-center border border-gray-300 rounded-lg px-4 py-2 bg-white hover:bg-gray-50 transition">
                    <img src="<?= ('assets/icons/google.svg'); ?>" alt="Google" class="w-5 h-5 mr-2">
                    <span class="text-gray-700 font-medium">Sign up with Google</span>
                </a>

                <a href="<?= ('auth/facebook'); ?>"
                    class="w-full flex items-center justify-center border border-gray-300 rounded-lg px-4 py-2 bg-[#1877F2] hover:bg-[#145DBF] transition">
                    <img src="<?= ('assets/icons/facebook.svg'); ?>" alt="Facebook" class="w-5 h-5 mr-2">
                    <span class="text-white font-medium">Sign up with Facebook</span>
                </a>
            </div>

            <!-- Link -->
            <p class="text-center text-gray-600 text-sm mt-4">
                Already have an account?
                <a href="<?= ('login'); ?>" class="font-semibold link transition-colors">Login</a>
            </p>

</body>

</html>