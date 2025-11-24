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
        
      <form action="/dashboard" method="GET">   
    <button 
        type="submit"
        class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
       <span>🏠</span> Dashboard
    </button>
</form>
       
<form action="/students" method="GET">
    <button 
        type="submit"
        class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
        👨‍🎓 Students
    </button>
</form>

        <form action="/courses" method="GET"> 
    <button 
        type="submit"
        class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
        📚 Courses
    </button>
</form> 


           <form action="/attendence" method="GET"> 
    <button 
        type="submit"
        class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
        📅 Attendance
    </button>
</form> 

<form action="/ExamResults" method="GET"> 
    <button 
        type="submit"
        class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
        📝 Exams & Results
    </button>
</form>

        <form action="/reports" method="GET"> 
    <button 
        type="submit"
        class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
        📊 Reports
    </button>
</form>

              <form action="/settings" method="GET"> 
    <button 
        type="submit"
        class="flex items-center gap-3 hover:bg-blue-800 p-3 rounded-lg w-full text-left">
        ⚙️ Settings
    </button>
</form>
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
        <h2 class="text-3xl font-semibold">Dashboard</h2>

        <div class="flex items-center gap-6">
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
            🎓 Active Courses
          </p>
          <h3 class="text-3xl font-bold mt-2">76</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            📆 Attendance Today
          </p>
          <h3 class="text-3xl font-bold mt-2">86</h3>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            🕒 Pending Tasks
          </p>
          <h3 class="text-3xl font-bold mt-2">4</h3>
        </div>
      </div>

      <!-- Recent Students Table -->
      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-xl font-semibold mb-4">Recent Students</h3>

        <table class="w-full text-left">
          <thead>
            <tr class="border-b">
              <th class="pb-3">Name</th>
              <th class="pb-3">Program</th>
              <th class="pb-3">Year</th>
              <th class="pb-3">Status</th>
              <th class="pb-3">Actions</th>
            </tr>
          </thead>

          <tbody class="text-gray-600">

            <tr class="border-b">
              <td class="py-3">Mark Smith</td>
              <td>Computer Science</td>
              <td>2nd year</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Active</span></td>
              <td class="flex gap-4 py-3">
                👁️ ✏️ 🗑️
              </td>
            </tr>

            <tr class="border-b">
              <td class="py-3">Alice Johnson</td>
              <td>Information Technology</td>
              <td>1st year</td>
              <td><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">Promoted</span></td>
              <td class="flex gap-4 py-3">
                👁️ ✏️ 🗑️
              </td>
            </tr>

            <tr class="border-b">
              <td class="py-3">Adam Williams</td>
              <td>Mathematics</td>
              <td>3rd year</td>
              <td><span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">Suspended</span></td>
              <td class="flex gap-4 py-3">
                👁️ ✏️ 🗑️
              </td>
            </tr>

            <tr>
              <td class="py-3">Emma Brown</td>
              <td>Physics</td>
              <td>1st year</td>
              <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">Active</span></td>
              <td class="flex gap-4 py-3">
                👁️ ✏️ 🗑️
              </td>
            </tr>

          </tbody>
        </table>
      </div>

    </main>
  </div>

</body>
</html>
 