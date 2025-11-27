<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Reports - ACHS</title>
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
        <a href="/exam-results" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          📝 Exams & Results
        </a>
        <a href="/reports" class="flex items-center gap-3 bg-blue-800 p-3 rounded-lg">
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
        <h2 class="text-3xl font-semibold">Analytics & Reports</h2>

        <div class="flex items-center gap-4">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            📈 Generate Report
          </button>
          <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
            📥 Export All
          </button>
          <span class="text-xl cursor-pointer">🔔</span>
          <span class="w-10 h-10 bg-gray-300 rounded-full cursor-pointer"></span>
        </div>
      </div>

      <!-- Stats Cards -->
      <div class="grid grid-cols-4 gap-6 mb-10">
        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            📊 Reports Generated
          </p>
          <h3 class="text-3xl font-bold mt-2">156</h3>
          <p class="text-blue-600 text-sm mt-1">This month</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            ✅ Automated Reports
          </p>
          <h3 class="text-3xl font-bold mt-2">12</h3>
          <p class="text-green-600 text-sm mt-1">Active schedules</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            📁 Report Categories
          </p>
          <h3 class="text-3xl font-bold mt-2">8</h3>
          <p class="text-purple-600 text-sm mt-1">Different types</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            ⏰ Pending Exports
          </p>
          <h3 class="text-3xl font-bold mt-2">3</h3>
          <p class="text-yellow-600 text-sm mt-1">In queue</p>
        </div>
      </div>

      <!-- Quick Report Types -->
      <div class="grid grid-cols-2 gap-6 mb-6">
        <!-- Academic Reports -->
        <div class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold mb-4 flex items-center gap-2">
            🎓 Academic Reports
          </h3>
          <div class="space-y-3">
            <button class="w-full text-left p-3 border border-gray-200 rounded-lg hover:bg-blue-50 hover:border-blue-200 transition-colors">
              <div class="flex justify-between items-center">
                <span>Student Performance Report</span>
                <span class="text-blue-600">📥</span>
              </div>
            </button>
            <button class="w-full text-left p-3 border border-gray-200 rounded-lg hover:bg-blue-50 hover:border-blue-200 transition-colors">
              <div class="flex justify-between items-center">
                <span>Course-wise Results</span>
                <span class="text-blue-600">📥</span>
              </div>
            </button>
            <button class="w-full text-left p-3 border border-gray-200 rounded-lg hover:bg-blue-50 hover:border-blue-200 transition-colors">
              <div class="flex justify-between items-center">
                <span>Grade Distribution</span>
                <span class="text-blue-600">📥</span>
              </div>
            </button>
            <button class="w-full text-left p-3 border border-gray-200 rounded-lg hover:bg-blue-50 hover:border-blue-200 transition-colors">
              <div class="flex justify-between items-center">
                <span>Faculty Performance</span>
                <span class="text-blue-600">📥</span>
              </div>
            </button>
          </div>
        </div>

        <!-- Administrative Reports -->
        <div class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold mb-4 flex items-center gap-2">
            ⚙️ Administrative Reports
          </h3>
          <div class="space-y-3">
            <button class="w-full text-left p-3 border border-gray-200 rounded-lg hover:bg-green-50 hover:border-green-200 transition-colors">
              <div class="flex justify-between items-center">
                <span>Attendance Summary</span>
                <span class="text-green-600">📥</span>
              </div>
            </button>
            <button class="w-full text-left p-3 border border-gray-200 rounded-lg hover:bg-green-50 hover:border-green-200 transition-colors">
              <div class="flex justify-between items-center">
                <span>Fee Collection Report</span>
                <span class="text-green-600">📥</span>
              </div>
            </button>
            <button class="w-full text-left p-3 border border-gray-200 rounded-lg hover:bg-green-50 hover:border-green-200 transition-colors">
              <div class="flex justify-between items-center">
                <span>Inventory Status</span>
                <span class="text-green-600">📥</span>
              </div>
            </button>
            <button class="w-full text-left p-3 border border-gray-200 rounded-lg hover:bg-green-50 hover:border-green-200 transition-colors">
              <div class="flex justify-between items-center">
                <span>Staff Performance</span>
                <span class="text-green-600">📥</span>
              </div>
            </button>
          </div>
        </div>
      </div>

      <!-- Custom Report Generator -->
      <div class="bg-white p-6 rounded-xl shadow mb-6">
        <h3 class="text-xl font-semibold mb-4">Custom Report Generator</h3>
        <div class="grid grid-cols-3 gap-6 mb-4">
          <div>
            <label class="block text-gray-700 mb-2">Report Type</label>
            <select class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
              <option>Academic Performance</option>
              <option>Attendance</option>
              <option>Financial</option>
              <option>Administrative</option>
            </select>
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Date Range</label>
            <select class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
              <option>Last 7 days</option>
              <option>Last 30 days</option>
              <option>Last 3 months</option>
              <option>Custom Range</option>
            </select>
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Format</label>
            <select class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
              <option>PDF</option>
              <option>Excel</option>
              <option>CSV</option>
              <option>HTML</option>
            </select>
          </div>
        </div>
        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
          Generate Custom Report
        </button>
      </div>

      <!-- Recent Reports Table -->
      <div class="bg-white p-6 rounded-xl shadow">
        <div class="flex justify-between items-center mb-6">
          <h3 class="text-xl font-semibold">Recent Reports</h3>
          <div class="flex gap-4">
            <input 
              type="text" 
              placeholder="Search reports..." 
              class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500"
            >
            <button class="bg-gray-100 px-4 py-2 rounded-lg hover:bg-gray-200">
              🔄 Refresh
            </button>
          </div>
        </div>

        <table class="w-full text-left">
          <thead>
            <tr class="border-b">
              <th class="pb-3">Report Name</th>
              <th class="pb-3">Type</th>
              <th class="pb-3">Generated On</th>
              <th class="pb-3">Format</th>
              <th class="pb-3">Size</th>
              <th class="pb-3">Status</th>
              <th class="pb-3 text-center">Actions</th>
            </tr>
          </thead>

          <tbody class="text-gray-600">
            <tr class="border-b">
              <td class="py-3">Student Performance Q4 2023</td>
              <td><span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Academic</span></td>
              <td>Jan 15, 2024</td>
              <td>PDF</td>
              <td>2.4 MB</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Completed</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-green-600 hover:text-green-800">📥</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr class="border-b">
              <td class="py-3">Attendance Summary Dec 2023</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Administrative</span></td>
              <td>Jan 14, 2024</td>
              <td>Excel</td>
              <td>1.8 MB</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Completed</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-green-600 hover:text-green-800">📥</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr class="border-b">
              <td class="py-3">Financial Report Q4 2023</td>
              <td><span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full">Financial</span></td>
              <td>Jan 13, 2024</td>
              <td>PDF</td>
              <td>3.1 MB</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Completed</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-green-600 hover:text-green-800">📥</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr class="border-b">
              <td class="py-3">Course Enrollment Analysis</td>
              <td><span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Academic</span></td>
              <td>Jan 12, 2024</td>
              <td>CSV</td>
              <td>0.9 MB</td>
              <td><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">Processing</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-green-600 hover:text-green-800">📥</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr>
              <td class="py-3">Faculty Performance Review</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Administrative</span></td>
              <td>Jan 10, 2024</td>
              <td>PDF</td>
              <td>2.7 MB</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Completed</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-green-600 hover:text-green-800">📥</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>
          </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex justify-between items-center mt-6">
          <p class="text-gray-500">Showing 1-5 of 42 reports</p>
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