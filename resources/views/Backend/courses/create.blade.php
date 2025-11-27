@extends('Backend.master')

@section('title', 'Add Course - ACHS')

@section('content')
      <div class="flex justify-between mb-8">
        <h2 class="text-3xl font-semibold">Add New Course</h2>
        <div class="flex items-center gap-4">
          <a href="/courses" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition duration-200">
            ← Back to Courses
          </a>
        </div>
      </div>

      <!-- Success Message -->
      @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
          {{ session('success') }}
        </div>
      @endif

      <!-- Add Course Form -->
      <div class="bg-white p-6 rounded-xl shadow">
        <form action="/courses" method="POST">
          @csrf
          
          <div class="grid grid-cols-1 gap-6">
            <!-- Course Code -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Course Code</label>
              <input type="text" name="course_code" required 
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="CS101">
            </div>

            <!-- Course Name -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Course Name</label>
              <input type="text" name="course_name" required 
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="Computer Science">
            </div>

            <!-- Duration Years -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Duration (Years)</label>
              <input type="number" name="duration_years" required min="1" max="10"
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="4">
            </div>
          </div>

          <!-- Submit Button -->
          <div class="mt-8 flex justify-end gap-4">
            <a href="/courses" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition duration-200">
              Cancel
            </a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
              Add Course
            </button>
          </div>
        </form>
      </div>
@endsection