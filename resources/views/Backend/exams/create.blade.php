@extends('Backend.master')

@section('title', 'Add Exam - ACHS')

@section('content')
      <div class="flex justify-between mb-8">
        <h2 class="text-3xl font-semibold">Add New Exam</h2>
        <div class="flex items-center gap-4">
          <a href="/exams" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition duration-200">
            ← Back to Exams
          </a>
        </div>
      </div>

      <!-- Success Message -->
      @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
          {{ session('success') }}
        </div>
      @endif

      <!-- Add Exam Form -->
      <div class="bg-white p-6 rounded-xl shadow">
        <form action="/exams" method="POST">
          @csrf
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Exam Name -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Exam Name</label>
              <input type="text" name="exam_name" required 
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="Mid-term, Final, etc.">
            </div>

            <!-- Course -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Course</label>
              <select name="course_id" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                <option value="">Select Course</option>
                @foreach($courses as $course)
                <option value="{{ $course->id }}">{{ $course->course_name }} ({{ $course->course_code }})</option>
                @endforeach
              </select>
            </div>

            <!-- Exam Year -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Exam Year</label>
              <input type="number" name="exam_year" required min="2020" max="2030"
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="2024" value="2024">
            </div>

            <!-- Exam Term -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Exam Term</label>
              <select name="exam_term" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                <option value="">Select Term</option>
                <option value="1">1st Term</option>
                <option value="2">2nd Term</option>
                <option value="3">3rd Term</option>
              </select>
            </div>

            <!-- Start Date -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Start Date</label>
              <input type="date" name="start_date" required 
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
            </div>

            <!-- End Date -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">End Date</label>
              <input type="date" name="end_date" required 
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
            </div>
          </div>

          <!-- Submit Button -->
          <div class="mt-8 flex justify-end gap-4">
            <a href="/exams" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition duration-200">
              Cancel
            </a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
              Add Exam
            </button>
          </div>
        </form>
      </div>
@endsection