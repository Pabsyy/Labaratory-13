<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Login - Lab13 Pabiran</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-300 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 space-y-6">
    <h2 class="text-2xl font-bold text-center text-gray-800">Sign in to your account</h2>

    <!-- Social Login -->
    <div class="flex space-x-4">
      <button class="flex-1 border border-gray-300 rounded-lg py-2 px-4 flex items-center justify-center hover:bg-gray-50">
        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5 mr-2" alt="Google logo" />
        <span class="text-sm text-gray-700">Google</span>
      </button>
      <button class="flex-1 border border-gray-300 rounded-lg py-2 px-4 flex items-center justify-center hover:bg-gray-50">
<img src="https://cdn3.iconfinder.com/data/icons/picons-social/57/16-apple-512.png" class="w-5 h-5 mr-2" alt="Apple logo" />
        <span class="text-sm text-gray-700">Apple</span>
      </button>
    </div>

    <div class="flex items-center space-x-2">
      <hr class="flex-grow border-gray-300" />
      <span class="text-gray-400 text-sm">or</span>
      <hr class="flex-grow border-gray-300" />
    </div>

    <!-- Login Form -->
    <form action="/login" method="POST" class="space-y-4">
        @csrf
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
        <input type="email" id="email" name="email" required class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
      </div>

      <div class="flex items-center justify-between">
        <label class="flex items-center space-x-2 text-sm text-gray-600">
          <input type="checkbox" class="rounded border-gray-300" />
          <span>Remember me</span>
        </label>
        <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
      </div>

      <button type="submit" class="w-full py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">Sign In</button>
    </form>

    <p class="text-center text-sm text-gray-600">
      Don’t have an account? 
<a href="/register" class="text-blue-600 hover:underline">Sign up</a>
    </p>
  </div>

</body>
  <!-- 
    Designed & Developed by: Ryan Pabiran (2025) 
    GitHub: github.com/Pabsyy
  -->
</html>
