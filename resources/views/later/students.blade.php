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
          <a href="{{ route('students.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
    + Add Student
</a>
          <span class="text-xl cursor-pointer">🔔</span>
          <span class="w-10 h-10 bg-gray-300 rounded-full cursor-pointer"></span>
        </div>
      </div>

      <!-- Stats Cards - NOW DYNAMIC -->
      <div class="grid grid-cols-4 gap-6 mb-10">
        <div class="bg-white p-6 rounded-xl shadow">
          <p class="text-gray-500 flex items-center gap-2 text-lg">
            👤 Total Students
          </p>
          <h3 class="text-3xl font-bold mt-2">{{ $students->count() }}</h3>
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

      <!-- Student List Table - NOW DYNAMIC -->
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
              <th class="pb-3">Email</th>
              <th class="pb-3">Phone</th>
              <th class="pb-3">Gender</th>
              <th class="pb-3 text-center">Actions</th>
            </tr>
          </thead>

          <tbody class="text-gray-600">
            @foreach($students as $student)
            <tr class="border-b">
              <td class="py-3">{{ $student->first_name }} {{ $student->last_name }}</td>
              <td>{{ $student->email }}</td>
              <td>{{ $student->phone ?? 'N/A' }}</td>
              <td>{{ $student->gender ?? 'N/A' }}</td>
              <td class="text-center">
                <button class="mx-2 text-blue-600 hover:text-blue-800">👁️</button>
                <button class="mx-2 text-yellow-600 hover:text-yellow-800">✏️</button>
                <button class="mx-2 text-red-600 hover:text-red-800">🗑️</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex justify-between items-center mt-6">
          <p class="text-gray-500">Showing {{ $students->count() }} students</p>
          <!-- We'll add proper pagination later -->
        </div>
      </div>

    </main>
  </div>

</body>
</html>