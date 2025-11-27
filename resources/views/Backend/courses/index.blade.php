@extends('Backend.master')

@section('title', 'Courses - ACHS')

@section('content')
      <div class="flex justify-between mb-8">
        <h2 class="text-3xl font-semibold">Courses Management</h2>
        <div class="flex items-center gap-4">
          <a href="/courses/create" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200 flex items-center gap-2">
            <span>➕</span>
            Add Course
          </a>
        </div>
      </div>

      <!-- Success Message -->
      @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
          {{ session('success') }}
        </div>
      @endif

      <!-- Courses Table -->
      <div class="bg-white p-6 rounded-xl shadow">
        @if($courses && $courses->count() > 0)
          <div class="overflow-x-auto">
            <table class="w-full text-left">
              <thead>
                <tr class="border-b bg-gray-50">
                  <th class="pb-3 font-semibold text-gray-700">Course Code</th>
                  <th class="pb-3 font-semibold text-gray-700">Course Name</th>
                  <th class="pb-3 font-semibold text-gray-700">Duration (Years)</th>
                </tr>
              </thead>
              <tbody class="text-gray-600">
                @foreach($courses as $course)
                <tr class="border-b hover:bg-gray-50">
                  <td class="py-4 font-medium">{{ $course->course_code }}</td>
                  <td class="py-4">{{ $course->course_name }}</td>
                  <td class="py-4">{{ $course->duration_years }} years</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @else
          <div class="text-center py-8">
            <p class="text-gray-500 text-lg">No courses found.</p>
            <a href="/courses/create" class="inline-block mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
              Add First Course
            </a>
          </div>
        @endif
      </div>
@endsection