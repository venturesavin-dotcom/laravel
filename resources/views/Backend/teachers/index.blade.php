@extends('Backend.master')

@section('title', 'Teachers - ACHS')

@section('content')
      <div class="flex justify-between mb-8">
        <h2 class="text-3xl font-semibold">Teachers Management</h2>
        <div class="flex items-center gap-4">
          <a href="{{ route('teachers.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200 flex items-center gap-2">
            <span>➕</span>
            Add Teacher
          </a>
        </div>
      </div>

      <!-- Success Message -->
      @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
          {{ session('success') }}
        </div>
      @endif

      <!-- Teachers Table -->
      <div class="bg-white p-6 rounded-xl shadow">
        @if($teachers && $teachers->count() > 0)
          <div class="overflow-x-auto">
            <table class="w-full text-left">
              <thead>
                <tr class="border-b bg-gray-50">
                  <th class="pb-3 font-semibold text-gray-700">Teacher Code</th>
                  <th class="pb-3 font-semibold text-gray-700">Name</th>
                  <th class="pb-3 font-semibold text-gray-700">Email</th>
                  <th class="pb-3 font-semibold text-gray-700">Phone</th>
                  <th class="pb-3 font-semibold text-gray-700">Qualification</th>
                </tr>
              </thead>
              <tbody class="text-gray-600">
                @foreach($teachers as $teacher)
                <tr class="border-b hover:bg-gray-50">
                  <td class="py-4 font-medium">{{ $teacher->teacher_code }}</td>
                  <td class="py-4">{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                  <td class="py-4">{{ $teacher->email }}</td>
                  <td class="py-4">{{ $teacher->phone }}</td>
                  <td class="py-4">{{ $teacher->qualification }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @else
          <div class="text-center py-8">
            <p class="text-gray-500 text-lg">No teachers found.</p>
            <a href="{{ route('teachers.create') }}" class="inline-block mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
              Add First Teacher
            </a>
          </div>
        @endif
      </div>
@endsection