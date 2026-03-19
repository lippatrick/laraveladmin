<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body class="min-h-screen bg-gray-50 text-gray-900">
    <div class="min-h-screen flex flex-col">
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
                <h1 class="text-xl font-bold">My Website</h1>
                <a href="/admin/login" class="inline-flex items-center rounded-lg bg-black px-5 py-2.5 text-sm font-medium text-white hover:bg-gray-800">
                    Login
                </a>
            </div>
        </header>

        <main class="flex-1">
            <section class="max-w-7xl mx-auto px-6 py-20">
                <div class="max-w-2xl">
                    <h2 class="text-4xl font-bold tracking-tight">Welcome to the Home Page</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        This is the public website. Click login to access the admin dashboard.
                    </p>
                    <div class="mt-8">
                        <a href="/admin/login" class="inline-flex items-center rounded-lg bg-blue-600 px-6 py-3 text-sm font-medium text-white hover:bg-blue-700">
                            Login to Admin
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>