@extends('Backend.master')

@section('title', 'Add Teacher - ACHS')

@section('content')
      <div class="flex justify-between mb-8">
        <h2 class="text-3xl font-semibold">Add New Teacher</h2>
        <div class="flex items-center gap-4">
          <a href="{{ route('teachers.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition duration-200">
            ← Back to Teachers
          </a>
        </div>
      </div>

      <!-- Success Message -->
      @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
          {{ session('success') }}
        </div>
      @endif

      <!-- Add Teacher Form -->
      <div class="bg-white p-6 rounded-xl shadow">
        <form action="{{ route('teachers.store') }}" method="POST">
          @csrf
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Teacher Code -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Teacher Code</label>
              <input type="text" name="teacher_code" required 
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="TCH001">
            </div>

            <!-- First Name -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">First Name</label>
              <input type="text" name="first_name" required 
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="John">
            </div>

            <!-- Last Name -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Last Name</label>
              <input type="text" name="last_name" required 
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="Doe">
            </div>

            <!-- Email -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Email</label>
              <input type="email" name="email" required 
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="john@example.com">
            </div>

            <!-- Phone -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Phone</label>
              <input type="tel" name="phone" required 
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="+1234567890">
            </div>

            <!-- Qualification -->
            <div>
              <label class="block text-gray-700 mb-2 font-medium">Qualification</label>
              <input type="text" name="qualification" required 
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                     placeholder="M.Sc. in Computer Science">
            </div>

            <!-- Address -->
            <div class="md:col-span-2">
              <label class="block text-gray-700 mb-2 font-medium">Address</label>
              <textarea name="address" required rows="3" 
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                        placeholder="Enter full address"></textarea>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="mt-8 flex justify-end gap-4">
            <a href="{{ route('teachers.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition duration-200">
              Cancel
            </a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
              Add Teacher
            </button>
          </div>
        </form>
      </div>
@endsection