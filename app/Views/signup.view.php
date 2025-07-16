<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aware+ Signup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50 flex justify-center items-center h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <img src="/AwarePlus/public/img/awareplus-logo.png" alt="Aware+ Logo" class="mx-auto mb-4 w-48 h-48">
        <h2 class="text-2xl font-bold mb-6 text-center">Signup</h2>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?= $_SESSION['error'];
                unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <form action="/signup/submit" method="POST" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-900">Username</label>
                    <input type="text" name="username" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300">
                </div>
                <div>
                    <label class="block text-gray-900">Email</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-900">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300">
                </div>
                <div>
                    <label class="block text-gray-900">Date of Birth</label>
                    <input type="date" name="date_of_birth" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="text-white px-6 py-2 rounded-lg transition hover:opacity-90"
                    style="background-color: #E7636E;">Signup</button>
            </div>
        </form>

        <!-- Link to sign up page -->
        <p class="mt-4 text-sm text-gray-900">Already have an account?
            <a href="/login" class="underline text-black">Login</a>
        </p>
    </div>
</body>

</html>