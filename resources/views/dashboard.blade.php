<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - Lab13 Pabiran</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Welcome, {{ auth()->user()->name }}!</h2>
        <p class="text-gray-600 mb-4 text-center">You are logged in as {{ auth()->user()->email }}</p>

        @if (session('error'))
            <p class="text-red-500 text-sm mb-4">{{ session('error') }}</p>
        @endif

        @if (session('404'))
            <p class="text-red-500 text-sm mb-4">404 Not Found: {{ session('404') }}</p>
        @endif

        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                Logout
            </button>
        </form>
    </div>
</body>
  <!-- 
    Designed & Developed by: Ryan Pabiran (2025) 
    GitHub: github.com/Pabsyy
  -->
</html>
