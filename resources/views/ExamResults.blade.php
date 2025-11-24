<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Exams & Results - ACHS</title>
</head>

<body class="bg-gray-100">

  <div class="flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-900 min-h-screen text-white p-6">
      <h1 class="text-2xl font-bold mb-10 flex items-center gap-2">
        <span class="text-red-500 text-3xl">▲</span> ACHS
      </h1>

      <nav class="space-y-4">
        <a href="/dashboard" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          <span>🏠</span> Dashboard
        </a>
        <a href="/students" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          👨‍🎓 Students
        </a>
        <a href="/courses" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          📚 Courses
        </a>
        <a href="/attendance" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          📅 Attendance
        </a>
        <a href="/exams" class="flex items-center gap-3 bg-blue-800 p-3 rounded-lg">
          📝 Exams & Results
        </a>
        <a href="/reports" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
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
        <h2 class="text-3xl font-semibold">Exams & Results</h2>

        <div class="flex items-center gap-4">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            📋 Schedule Exam
          </button>
          <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
            📊 Enter Results
          </button>
          <span class="text-xl cursor-pointer">🔔</span>
          <span class="w-10 h-10 bg-gray-300 rounded-full cursor-pointer"></span>
        </div>
      </div>

      <!-- Stats Cards -->
      <div class="grid grid-cols-4 gap-6 mb-10">
        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            📅 Upcoming Exams
          </p>
          <h3 class="text-3xl font-bold mt-2">12</h3>
          <p class="text-blue-600 text-sm mt-1">Next: Jan 20</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            ✅ Completed Exams
          </p>
          <h3 class="text-3xl font-bold mt-2">45</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            🎯 Average Score
          </p>
          <h3 class="text-3xl font-bold mt-2">78%</h3>
          <p class="text-green-600 text-sm mt-1">↑ 3% from last term</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            ⚠️ Pending Results
          </p>
          <h3 class="text-3xl font-bold mt-2">3</h3>
        </div>
      </div>

      <!-- Upcoming Exams Section -->
      <div class="bg-white p-6 rounded-xl shadow mb-6">
        <div class="flex justify-between items-center mb-6">
          <h3 class="text-xl font-semibold">Upcoming Exams</h3>
          <button class="text-blue-600 hover:text-blue-800">View All</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Exam Card 1 -->
          <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
            <div class="flex justify-between items-start mb-3">
              <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-sm">Final Exam</span>
              <span class="text-red-500 font-semibold">Jan 20</span>
            </div>
            <h4 class="font-semibold text-lg mb-2">Computer Science</h4>
            <p class="text-gray-600 text-sm mb-3">Advanced Programming Concepts</p>
            <div class="flex justify-between text-sm text-gray-500">
              <span>⏰ 9:00 AM</span>
              <span>🏛️ Hall A</span>
            </div>
          </div>

          <!-- Exam Card 2 -->
          <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
            <div class="flex justify-between items-start mb-3">
              <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-sm">Mid Term</span>
              <span class="text-red-500 font-semibold">Jan 25</span>
            </div>
            <h4 class="font-semibold text-lg mb-2">Mathematics</h4>
            <p class="text-gray-600 text-sm mb-3">Calculus & Algebra</p>
            <div class="flex justify-between text-sm text-gray-500">
              <span>⏰ 10:30 AM</span>
              <span>🏛️ Hall B</span>
            </div>
          </div>

          <!-- Exam Card 3 -->
          <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
            <div class="flex justify-between items-start mb-3">
              <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-sm">Quiz</span>
              <span class="text-red-500 font-semibold">Jan 18</span>
            </div>
            <h4 class="font-semibold text-lg mb-2">Physics</h4>
            <p class="text-gray-600 text-sm mb-3">Thermodynamics</p>
            <div class="flex justify-between text-sm text-gray-500">
              <span>⏰ 2:00 PM</span>
              <span>🏛️ Lab 3</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Results Table -->
      <div class="bg-white p-6 rounded-xl shadow">
        <div class="flex justify-between items-center mb-6">
          <h3 class="text-xl font-semibold">Recent Results</h3>
          <div class="flex gap-4">
            <select class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
              <option>All Courses</option>
              <option>Computer Science</option>
              <option>Mathematics</option>
              <option>Physics</option>
            </select>
            <input 
              type="text" 
              placeholder="Search students..." 
              class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500"
            >
            <button class="bg-gray-100 px-4 py-2 rounded-lg hover:bg-gray-200">
              📄 Export
            </button>
          </div>
        </div>

        <table class="w-full text-left">
          <thead>
            <tr class="border-b">
              <th class="pb-3">Student</th>
              <th class="pb-3">Course</th>
              <th class="pb-3">Exam</th>
              <th class="pb-3">Date</th>
              <th class="pb-3">Score</th>
              <th class="pb-3">Grade</th>
              <th class="pb-3">Status</th>
              <th class="pb-3 text-center">Actions</th>
            </tr>
          </thead>

          <tbody class="text-gray-600">
            <tr class="border-b">
              <td class="py-3">Mark Smith</td>
              <td>Computer Science</td>
              <td>Final Exam</td>
              <td>Dec 15, 2023</td>
              <td class="font-semibold">85/100</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">A</span></td>
              <td><span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Published</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-yellow-600 hover:text-yellow-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr class="border-b">
              <td class="py-3">Alice Johnson</td>
              <td>Mathematics</td>
              <td>Mid Term</td>
              <td>Dec 12, 2023</td>
              <td class="font-semibold">72/100</td>
              <td><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">B</span></td>
              <td><span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Published</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-yellow-600 hover:text-yellow-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr class="border-b">
              <td class="py-3">Emma Brown</td>
              <td>Physics</td>
              <td>Quiz 3</td>
              <td>Dec 10, 2023</td>
              <td class="font-semibold">92/100</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">A+</span></td>
              <td><span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Published</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-yellow-600 hover:text-yellow-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr class="border-b">
              <td class="py-3">Adam Williams</td>
              <td>Chemistry</td>
              <td>Final Exam</td>
              <td>Dec 18, 2023</td>
              <td class="font-semibold">68/100</td>
              <td><span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full">C+</span></td>
              <td><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">Pending</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-yellow-600 hover:text-yellow-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr>
              <td class="py-3">Sarah Miller</td>
              <td>Biology</td>
              <td>Lab Test</td>
              <td>Dec 14, 2023</td>
              <td class="font-semibold">79/100</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">B+</span></td>
              <td><span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Published</span></td>
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
          <p class="text-gray-500">Showing 1-5 of 128 results</p>
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