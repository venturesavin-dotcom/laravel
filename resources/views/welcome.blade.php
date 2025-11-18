<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Login</h2>
        
        @if($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $errorMessage)
                <li>{{ $errorMessage }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="email">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Enter your email"
                    required
                    value="{{ old('email') }}">
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="password">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Enter your password"
                    required>
            </div>
            
            <button 
                type="submit" 
                class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none">
                Sign In
            </button>
        </form>
        
        <div class="text-center mt-4">
            <a href="#" class="text-sm text-blue-500 hover:text-blue-700">Forgot password?</a>
        </div>
    </div>
</body>
</html>