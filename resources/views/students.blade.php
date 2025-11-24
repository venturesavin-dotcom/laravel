<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Students - ACHS</title>
</head>

<body class="bg-gray-100">

  <div class="flex">

    <!-- Sidebar (Same as dashboard) -->
    <aside class="w-64 bg-blue-900 min-h-screen text-white p-6">
      <h1 class="text-2xl font-bold mb-10 flex items-center gap-2">
        <span class="text-red-500 text-3xl">▲</span> ACHS
      </h1>

      <nav class="space-y-4">
        <a href="/dashboard" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          <span>🏠</span> Dashboard
        </a>
        <a href="/students" class="flex items-center gap-3 bg-blue-800 p-3 rounded-lg">
          👨‍🎓 Students
        </a>
        <a href="/courses" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          📚 Courses
        </a>
        <a href="/attendence" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          📅 Attendance
        </a>
        <a href="/ExamResults" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          📝 Exams & Results
        </a>
        <a href="/Reports" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          📊 Reports
        </a>
        <a href="/settings" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          ⚙️ Settings
        </a>
      </nav>

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

      <!-- Top Bar -->
      <div class="flex justify-between mb-8">
        <h2 class="text-3xl font-semibold">Students</h2>

        <div class="flex items-center gap-4">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            + Add Student
          </button>
          <span class="text-xl cursor-pointer">🔔</span>
          <span class="w-10 h-10 bg-gray-300 rounded-full cursor-pointer"></span>
        </div>
      </div>

      <!-- Stats Cards -->
      <div class="grid grid-cols-4 gap-6 mb-10">
        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            👤 Total Students
          </p>
          <h3 class="text-3xl font-bold mt-2">1,230</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            📈 New Admissions
          </p>
          <h3 class="text-3xl font-bold mt-2">34</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            🎓 Graduated
          </p>
          <h3 class="text-3xl font-bold mt-2">112</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            ⚠️ Suspended
          </p>
          <h3 class="text-3xl font-bold mt-2">7</h3>
        </div>
      </div>

      <!-- Student List Table -->
      <div class="bg-white p-6 rounded-xl shadow">
        <div class="flex justify-between items-center mb-6">
          <h3 class="text-xl font-semibold">Student List</h3>
          <div class="flex gap-4">
            <input 
              type="text" 
              placeholder="Search students..." 
              class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500"
            >
            <button class="bg-gray-100 px-4 py-2 rounded-lg hover:bg-gray-200">
              🔄
            </button>
          </div>
        </div>

        <table class="w-full text-left">
          <thead>
            <tr class="border-b">
              <th class="pb-3">Name</th>
              <th class="pb-3">Program</th>
              <th class="pb-3">Year</th>
              <th class="pb-3">Status</th>
              <th class="pb-3 text-center">Actions</th>
            </tr>
          </thead>

          <tbody class="text-gray-600">
            <tr class="border-b">
              <td class="py-3">Mark Smith</td>
              <td>Computer Science</td>
              <td>2nd year</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Active</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-yellow-600 hover:text-yellow-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr class="border-b">
              <td class="py-3">Alice Johnson</td>
              <td>Information Technology</td>
              <td>1st year</td>
              <td><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">Promoted</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-yellow-600 hover:text-yellow-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr class="border-b">
              <td class="py-3">Emma Brown</td>
              <td>Physics</td>
              <td>1st year</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Active</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-yellow-600 hover:text-yellow-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr class="border-b">
              <td class="py-3">Adam Williams</td>
              <td>Mathematics</td>
              <td>3rd year</td>
              <td><span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">Suspended</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-yellow-600 hover:text-yellow-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr>
              <td class="py-3">Sarah Miller</td>
              <td>Chemistry</td>
              <td>4th year</td>
              <td><span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Graduated</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-yellow-600 hover:text-yellow-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>
          </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex justify-between items-center mt-6">
          <p class="text-gray-500">Showing 1-5 of 1,230 students</p>
          <div class="flex gap-2">
            <button class="bg-gray-200 px-3 py-1 rounded hover:bg-gray-300">← Previous</button>
            <button class="bg-blue-600 text-white px-3 py-1 rounded">1</button>
            <button class="bg-gray-200 px-3 py-1 rounded hover:bg-gray-300">2</button>
            <button class="bg-gray-200 px-3 py-1 rounded hover:bg-gray-300">3</button>
            <button class="bg-gray-200 px-3 py-1 rounded hover:bg-gray-300">Next →</button>
          </div>
        </div>
      </div>

    </main>
  </div>

</body>
</html>