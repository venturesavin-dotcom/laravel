<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

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
        <a href="/reports" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          📊 Reports
        </a>
        <a href="/settings" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          ⚙️ Settings
        </a>
      </nav>

        <!-- Logout -->
        <form action="/logout" method="POST" class="mt-10 w-full">
            @csrf
            <button type="submit"
                class="bg-red-600 py-2 rounded-lg font-semibold text-white w-full">
                Logout
            </button>
        </form>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10">

        <!-- Header -->
        <div class="flex justify-between mb-8">
            <h2 class="text-3xl font-semibold">Courses</h2>

            <div class="flex items-center gap-6">
                <span class="text-xl cursor-pointer">🔔</span>
                <span class="w-10 h-10 bg-gray-300 rounded-full cursor-pointer"></span>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-gray-500 text-lg flex items-center gap-2">📚 Total Courses</p>
                <h3 class="text-3xl font-bold mt-2">76</h3>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-gray-500 text-lg flex items-center gap-2">👥 Enrolled Students</p>
                <h3 class="text-3xl font-bold mt-2">1,230</h3>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-gray-500 text-lg flex items-center gap-2">📘 New Courses This Month</p>
                <h3 class="text-3xl font-bold mt-2">5</h3>
            </div>
        </div>

        <!-- Courses Table -->
        <div class="bg-white p-6 rounded-xl shadow">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold">Available Courses</h3>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700">
                    + Add Course
                </button>
            </div>

            <table class="w-full text-left">
                <thead>
                    <tr class="border-b">
                        <th class="pb-3">Course Name</th>
                        <th class="pb-3">Department</th>
                        <th class="pb-3">Duration</th>
                        <th class="pb-3">Status</th>
                        <th class="pb-3">Actions</th>
                    </tr>
                </thead>

                <tbody class="text-gray-600">

                    <tr class="border-b">
                        <td class="py-3">Computer Science Basics</td>
                        <td>Computer Science</td>
                        <td>6 months</td>
                        <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Active</span></td>
                        <td class="flex gap-4 py-3">👁️ ✏️ 🗑️</td>
                    </tr>

                    <tr class="border-b">
                        <td class="py-3">Digital Marketing</td>
                        <td>Business Studies</td>
                        <td>4 months</td>
                        <td><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">Upcoming</span></td>
                        <td class="flex gap-4 py-3">👁️ ✏️ 🗑️</td>
                    </tr>

                    <tr class="border-b">
                        <td class="py-3">Physics Fundamentals</td>
                        <td>Science</td>
                        <td>1 year</td>
                        <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Active</span></td>
                        <td class="flex gap-4 py-3">👁️ ✏️ 🗑️</td>
                    </tr>

                    <tr>
                        <td class="py-3">Mathematics Advanced</td>
                        <td>Mathematics</td>
                        <td>1 year</td>
                        <td><span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">Inactive</span></td>
                        <td class="flex gap-4 py-3">👁️ ✏️ 🗑️</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </main>

</div>

</body>
</html>
