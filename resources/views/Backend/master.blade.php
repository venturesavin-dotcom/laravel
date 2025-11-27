<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Dashboard</title>
</head>

<body class="bg-gray-100">

  <div class="flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-900 min-h-screen text-white p-6">
      <h1 class="text-2xl font-bold mb-10 flex items-center gap-2">
        <span class="text-red-500 text-3xl">▲</span> ACHS
      </h1>

      <nav class="space-y-4">
        <!-- Dashboard -->
        <a href="/dashboard" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
          <span>🏠</span> Dashboard
        </a>

        <!-- Students -->
        <a href="/students" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
          👨‍🎓 Students
        </a>

        <!-- Courses -->
        <a href="/teachers" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
         🧑‍🏫Teachers
        </a>

        <!-- Attendance -->
        <a href="/courses" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
           📚 Courses
        </a>

        <!-- Reports -->
        <a href="/exams" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
          📝 Exams 
        </a>

        <!-- Settings -->
        <a href="/settings" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
          📜 Results
        </a>

        <a href="/settings" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
          🏫 Enrollment
        </a>
      </nav>

      <!-- Logout (kept as form since it's a POST request) -->
      <form action="/logout" method="POST">
        @csrf
        <button 
            type="submit"
            class="mt-10 w-full bg-red-600 py-2 rounded-lg font-semibold text-white">
            Logout
        </button>
      </form>

    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10">
      @yield('content')   
    </main>
  </div>

</body>
</html>