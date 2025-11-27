@extends('Backend.master')

@section('title', 'Students - ACHS')

@section('content')
      <div class="flex justify-between mb-8">
        <h2 class="text-3xl font-semibold">Students Management</h2>
        <div class="flex items-center gap-4">
          <a href="{{ route('students.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200 flex items-center gap-2">
            <span>➕</span>
            Add Student
          </a>
        </div>
      </div>

      <!-- Success Message -->
      @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
          {{ session('success') }}
        </div>
      @endif

      <!-- Students Table -->
      <div class="bg-white p-6 rounded-xl shadow">
        <div class="flex justify-between items-center mb-6">
          <h3 class="text-xl font-semibold">All Students</h3>
          <div class="flex gap-2">
            <input type="text" placeholder="Search students..." class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition duration-200">
              🔍
            </button>
          </div>
        </div>

        @if($students && $students->count() > 0)
          <div class="overflow-x-auto">
            <table class="w-full text-left">
              <thead>
                <tr class="border-b bg-gray-50">
                  <th class="pb-3 font-semibold text-gray-700">Student Code</th>
                  <th class="pb-3 font-semibold text-gray-700">Name</th>
                  <th class="pb-3 font-semibold text-gray-700">Email</th>
                  <th class="pb-3 font-semibold text-gray-700">Phone</th>
                  <th class="pb-3 font-semibold text-gray-700">Gender</th>
                  <th class="pb-3 font-semibold text-gray-700">Actions</th>
                </tr>
              </thead>
              <tbody class="text-gray-600">
                @foreach($students as $student)
                <tr class="border-b hover:bg-gray-50">
                  <td class="py-4 font-medium">{{ $student->student_code }}</td>
                  <td class="py-4">{{ $student->first_name }} {{ $student->last_name }}</td>
                  <td class="py-4">{{ $student->email }}</td>
                  <td class="py-4">{{ $student->phone ?? 'N/A' }}</td>
                  <td class="py-4">{{ $student->gender ?? 'N/A' }}</td>
                  <td class="py-4">
                    <div class="flex gap-3">
                      <button class="text-blue-600 hover:text-blue-800 transition duration-200" title="View">
                        👁️
                      </button>
                      <button class="text-green-600 hover:text-green-800 transition duration-200" title="Edit">
                        ✏️
                      </button>
                      <button class="text-red-600 hover:text-red-800 transition duration-200" title="Delete">
                        🗑️
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @else
          <div class="text-center py-8">
            <p class="text-gray-500 text-lg">No students found.</p>
            <a href="{{ route('students.create') }}" class="inline-block mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
              Add First Student
            </a>
          </div>
        @endif
      </div>
@endsection