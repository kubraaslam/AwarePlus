<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Aware+</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 min-h-screen flex justify-center items-center">
    <div class="bg-white p-8 rounded shadow-md text-center w-full max-w-lg">
        <h1 class="text-2xl font-bold text-pink-600 mb-4">Welcome, <?= htmlspecialchars($user['username']) ?>!</h1>
        <p class="text-gray-700">This is your dashboard. More features coming soon!</p>

        <form action="/logout" method="post" class="mt-6">
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                Logout
            </button>
        </form>
    </div>
</body>
</html>