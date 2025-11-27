@extends('Backend.master')

@section('title', 'Exams - ACHS')

@section('content')
      <div class="flex justify-between mb-8">
        <h2 class="text-3xl font-semibold">Exams Management</h2>
        <div class="flex items-center gap-4">
          <a href="/exams/create" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200 flex items-center gap-2">
            <span>➕</span>
            Add Exam
          </a>
        </div>
      </div>

      <!-- Success Message -->
      @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
          {{ session('success') }}
        </div>
      @endif

      <!-- Exams Table -->
      <div class="bg-white p-6 rounded-xl shadow">
        @if($exams && $exams->count() > 0)
          <div class="overflow-x-auto">
            <table class="w-full text-left">
              <thead>
                <tr class="border-b bg-gray-50">
                  <th class="pb-3 font-semibold text-gray-700">Exam Name</th>
                  <th class="pb-3 font-semibold text-gray-700">Course ID</th>
                  <th class="pb-3 font-semibold text-gray-700">Year</th>
                  <th class="pb-3 font-semibold text-gray-700">Term</th>
                  <th class="pb-3 font-semibold text-gray-700">Start Date</th>
                  <th class="pb-3 font-semibold text-gray-700">End Date</th>
                </tr>
              </thead>
              <tbody class="text-gray-600">
                @foreach($exams as $exam)
                <tr class="border-b hover:bg-gray-50">
                  <td class="py-4 font-medium">{{ $exam->exam_name }}</td>
                  <td class="py-4">{{ $exam->course_id }}</td>
                  <td class="py-4">{{ $exam->exam_year }}</td>
                  <td class="py-4">{{ $exam->exam_term }}</td>
                  <td class="py-4">{{ $exam->start_date }}</td>
                  <td class="py-4">{{ $exam->end_date }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @else
          <div class="text-center py-8">
            <p class="text-gray-500 text-lg">No exams found.</p>
            <a href="/exams/create" class="inline-block mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
              Add First Exam
            </a>
          </div>
        @endif
      </div>
@endsection