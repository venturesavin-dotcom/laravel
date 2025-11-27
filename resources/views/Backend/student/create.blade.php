@extends('Backend.master')

@section('title', 'Add Student - ACHS')

@section('content')
      <div class="flex justify-between mb-8">
        <h2 class="text-3xl font-semibold">Add New Student</h2>
        <div class="flex items-center gap-4">
          <a href="{{ route('students.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition duration-200">
            ← Back to Students
          </a>
        </div>
      </div>

      <!-- Success Message -->
      @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
          {{ session('success') }}
        </div>
      @endif

      <!-- Error Messages -->
      @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
          <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <!-- Add Student Form -->
      <div class="bg-white p-6 rounded-xl shadow">
        <form action="{{ route('students.store') }}" method="POST">
          @csrf
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Student Code -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Student Code *</label>
              <input type="text" name="student_code" required 
                     value="{{ old('student_code') }}"
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="STU001">
            </div>

            <!-- First Name -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">First Name *</label>
              <input type="text" name="first_name" required 
                     value="{{ old('first_name') }}"
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="John">
            </div>

            <!-- Last Name -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Last Name *</label>
              <input type="text" name="last_name" required 
                     value="{{ old('last_name') }}"
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="Doe">
            </div>

            <!-- Email -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Email *</label>
              <input type="email" name="email" required 
                     value="{{ old('email') }}"
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="john@example.com">
            </div>

            <!-- Phone -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Phone</label>
              <input type="tel" name="phone" 
                     value="{{ old('phone') }}"
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="+1234567890">
            </div>

            <!-- Gender -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Gender</label>
              <select name="gender" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                <option value="">Select Gender</option>
                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
              </select>
            </div>

            <!-- Date of Birth -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Date of Birth</label>
              <input type="date" name="dob" 
                     value="{{ old('dob') }}"
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
            </div>

            <!-- Address -->
            <div class="md:col-span-2">
              <label class="block text-gray-700 mb-2 font-medium">Address</label>
              <textarea name="address" rows="3" 
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                        placeholder="Enter full address">{{ old('address') }}</textarea>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="mt-8 flex justify-end gap-4">
            <a href="{{ route('students.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition duration-200">
              Cancel
            </a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200 flex items-center gap-2">
              <span>➕</span>
              Add Student
            </button>
          </div>
        </form>
      </div>
@endsection