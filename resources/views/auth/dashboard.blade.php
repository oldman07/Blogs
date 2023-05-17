
@extends('layouts.auth')
@section('main-section')

  <nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
        </div>
        <div class="flex items-center">
          <a href="/logout" class="text-sm font-medium text-gray-500 hover:text-gray-900">Logout</a>
        </div>
      </div>
    </div>
  </nav>
  <main class="mt-10 sm:mt-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-lg leading-6 font-medium text-gray-900">
        Welcome to your dashboard
      </h2>
      <div class="mt-5">
        <!-- Your dashboard content goes here -->
      </div>
    </div>
  </main>

  @endsection

