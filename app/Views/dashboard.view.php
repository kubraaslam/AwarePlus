<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aware+ Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white min-h-screen flex flex-col">

    <!-- Logo + Title -->
    <div class="mt-10 text-center">
        <img src="/AwarePlus/public/img/awareplus-logo.png" alt="Aware+ Logo" class="w-64 mx-auto">
    </div>

    <div class="flex-grow flex flex-col items-center space-y-6 px-4">
        <!-- Search bar -->
        <div class="w-full max-w-md mt-4">
            <input type="text" placeholder="Search..."
                class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-red-300">
        </div>

        <!-- Buttons -->
        <div class="space-y-4 w-full max-w-md">
            <a href="#"
                class="block text-white text-lg font-medium text-center py-3 rounded transition hover:opacity-90"
                style="background-color: #E7636E;">Knowledge</a>
            <a href="#"
                class="block text-white text-lg font-medium text-center py-3 rounded transition hover:opacity-90"
                style="background-color: #E7636E;">Support
                Services</a>
        </div>

        <!-- Quick Links -->
        <div class="text-center text-sm text-gray-600">
            <p><a href="#" class="underline text-pink-600 hover:text-pink-800">FAQS</a></p>
            <p><a href="#" class="underline text-pink-600 hover:text-pink-800">Emergency Contacts</a></p>
        </div>
    </div>


    <!-- Bottom Navigation -->
    <nav class="w-full fixed bottom-0 bg-pink-100 py-2 border-t border-pink-300 flex justify-around text-pink-700">
        <a href="#" class="flex flex-col items-center">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 3L2 9h2v8h4v-5h4v5h4V9h2L10 3z" />
            </svg>
            <span class="text-xs">Home</span>
        </a>
        <a href="#" class="flex flex-col items-center">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path d="M4 3h12a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V4a1 1 0 011-1zm1 2v10h10V5H5z" />
            </svg>
            <span class="text-xs">Knowledge</span>
        </a>
        <a href="#" class="flex flex-col items-center">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M13 16h-1v-4h-1m1 4v1h-1v-1H6v-1h6v1m2-6h-1V7h-1v3h1v3m1 0v-3h1v3h1V9h-1v1h-1V8h-1v1h-1v1h1v1h1z" />
            </svg>
            <span class="text-xs">Support</span>
        </a>
        <a href="#" class="flex flex-col items-center">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
            </svg>
            <span class="text-xs">Profile</span>
        </a>
    </nav>

</body>

</html>