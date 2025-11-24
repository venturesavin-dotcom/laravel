<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Settings - ACHS</title>
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
        <a href="/reports" class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg">
          📊 Reports
        </a>
        <a href="/settings" class="flex items-center gap-3 bg-blue-800 p-3 rounded-lg">
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
        <h2 class="text-3xl font-semibold">System Settings</h2>

        <div class="flex items-center gap-4">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            💾 Save Changes
          </button>
          <span class="text-xl cursor-pointer">🔔</span>
          <span class="w-10 h-10 bg-gray-300 rounded-full cursor-pointer"></span>
        </div>
      </div>

      <!-- Settings Navigation -->
      <div class="bg-white p-6 rounded-xl shadow mb-6">
        <div class="flex space-x-1 border-b">
          <button class="px-4 py-2 border-b-2 border-blue-600 text-blue-600 font-medium">General</button>
          <button class="px-4 py-2 text-gray-600 hover:text-blue-600">Academic</button>
          <button class="px-4 py-2 text-gray-600 hover:text-blue-600">Notifications</button>
          <button class="px-4 py-2 text-gray-600 hover:text-blue-600">Security</button>
          <button class="px-4 py-2 text-gray-600 hover:text-blue-600">Backup</button>
          <button class="px-4 py-2 text-gray-600 hover:text-blue-600">Users</button>
        </div>
      </div>

      <!-- General Settings -->
      <div class="grid grid-cols-2 gap-6 mb-6">
        <!-- Institution Settings -->
        <div class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold mb-4 flex items-center gap-2">
            🏫 Institution Settings
          </h3>
          <div class="space-y-4">
            <div>
              <label class="block text-gray-700 mb-2">Institution Name</label>
              <input type="text" value="ACHS University" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Address</label>
              <textarea class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500" rows="3">123 Education Street, Knowledge City</textarea>
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Contact Email</label>
              <input type="email" value="admin@achs.edu" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Phone Number</label>
              <input type="tel" value="+1 (555) 123-4567" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
            </div>
          </div>
        </div>

        <!-- System Preferences -->
        <div class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold mb-4 flex items-center gap-2">
            ⚙️ System Preferences
          </h3>
          <div class="space-y-4">
            <div class="flex items-center justify-between">
              <div>
                <label class="block text-gray-700">Auto Backup</label>
                <p class="text-gray-500 text-sm">Automatically backup data daily</p>
              </div>
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked>
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
              </label>
            </div>

            <div class="flex items-center justify-between">
              <div>
                <label class="block text-gray-700">Email Notifications</label>
                <p class="text-gray-500 text-sm">Send email alerts for important events</p>
              </div>
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked>
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
              </label>
            </div>

            <div class="flex items-center justify-between">
              <div>
                <label class="block text-gray-700">Maintenance Mode</label>
                <p class="text-gray-500 text-sm">Put system under maintenance</p>
              </div>
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer">
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
              </label>
            </div>

            <div>
              <label class="block text-gray-700 mb-2">Time Zone</label>
              <select class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
                <option>(UTC-05:00) Eastern Time</option>
                <option>(UTC-08:00) Pacific Time</option>
                <option>(UTC+00:00) London</option>
                <option>(UTC+05:30) India</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <!-- Academic Settings -->
      <div class="bg-white p-6 rounded-xl shadow mb-6">
        <h3 class="text-xl font-semibold mb-4 flex items-center gap-2">
          🎓 Academic Settings
        </h3>
        <div class="grid grid-cols-3 gap-6">
          <div>
            <label class="block text-gray-700 mb-2">Grading System</label>
            <select class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
              <option>Percentage (0-100%)</option>
              <option>GPA (0-4.0)</option>
              <option>Letter Grades (A-F)</option>
            </select>
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Passing Grade</label>
            <input type="number" value="60" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Academic Year</label>
            <select class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
              <option>2023-2024</option>
              <option>2024-2025</option>
              <option>2025-2026</option>
            </select>
          </div>
        </div>
      </div>

      <!-- User Management -->
      <div class="bg-white p-6 rounded-xl shadow mb-6">
        <div class="flex justify-between items-center mb-6">
          <h3 class="text-xl font-semibold flex items-center gap-2">
            👥 User Management
          </h3>
          <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
            + Add User
          </button>
        </div>

        <table class="w-full text-left">
          <thead>
            <tr class="border-b">
              <th class="pb-3">User</th>
              <th class="pb-3">Role</th>
              <th class="pb-3">Department</th>
              <th class="pb-3">Last Login</th>
              <th class="pb-3">Status</th>
              <th class="pb-3 text-center">Actions</th>
            </tr>
          </thead>

          <tbody class="text-gray-600">
            <tr class="border-b">
              <td class="py-3">
                <div class="flex items-center gap-3">
                  <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm">JD</div>
                  <div>
                    <div class="font-medium">John Doe</div>
                    <div class="text-gray-500 text-sm">john.doe@achs.edu</div>
                  </div>
                </div>
              </td>
              <td><span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">Admin</span></td>
              <td>Administration</td>
              <td>Jan 15, 2024</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Active</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr class="border-b">
              <td class="py-3">
                <div class="flex items-center gap-3">
                  <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm">SJ</div>
                  <div>
                    <div class="font-medium">Sarah Johnson</div>
                    <div class="text-gray-500 text-sm">sarah.j@achs.edu</div>
                  </div>
                </div>
              </td>
              <td><span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">Teacher</span></td>
              <td>Computer Science</td>
              <td>Jan 14, 2024</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Active</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>

            <tr>
              <td class="py-3">
                <div class="flex items-center gap-3">
                  <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-white text-sm">MB</div>
                  <div>
                    <div class="font-medium">Mike Brown</div>
                    <div class="text-gray-500 text-sm">mike.b@achs.edu</div>
                  </div>
                </div>
              </td>
              <td><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">Staff</span></td>
              <td>Admissions</td>
              <td>Jan 12, 2024</td>
              <td><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">Inactive</span></td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Danger Zone -->
      <div class="bg-red-50 border border-red-200 rounded-xl p-6">
        <h3 class="text-xl font-semibold mb-4 text-red-800 flex items-center gap-2">
          ⚠️ Danger Zone
        </h3>
        <div class="space-y-4">
          <div class="flex items-center justify-between">
            <div>
              <label class="block text-red-700 font-medium">Reset All Data</label>
              <p class="text-red-600 text-sm">This will permanently delete all student, course, and attendance data</p>
            </div>
            <button class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">
              Reset Data
            </button>
          </div>
          
          <div class="flex items-center justify-between">
            <div>
              <label class="block text-red-700 font-medium">Delete Institution</label>
              <p class="text-red-600 text-sm">Permanently delete this institution and all associated data</p>
            </div>
            <button class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">
              Delete Institution
            </button>
          </div>
        </div>
      </div>

    </main>
  </div>

</body>
</html>