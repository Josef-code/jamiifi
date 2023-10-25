<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create project') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">

        @if($errors->any())
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
            <span class="font-medium">{{ $errors }}</span>
            </div>
        @endif

          <form method="POST" action="{{ url('/store-project') }}">
          @csrf
            <div class="mb-6">
              <label for="project name" class="block mb-2 text-sm font-medium text-gray-900">Project name</label>
              <input type="text" id="project_name" name="project_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Laptop for a child" required>
            </div>

            <div class="mb-6">
              <label for="project description" class="block mb-2 text-sm font-medium text-gray-900">Project description</label>
              <textarea id="project_description" name="project_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
            </div>

            <div class="mb-6">
              <label for="funding goal" class="block mb-2 text-sm font-medium text-gray-900">Funding goal</label>
              <input type="number" id="funding_goal" name="funding_goal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>

            <div class="mb-6 flex flex-row flex-nowrap gap-1">
              <label for="start date" class="mb-2 text-sm font-medium text-gray-900">Start date</label>
              <input type="date" id="start_date" name="start_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5" required>
              <label for="start date" class="block mb-2 text-sm font-medium text-gray-900">End date</label>
              <input type="date" id="end_date" name="end_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5">
            </div>

            <div class="mb-6">
              <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category:</label>
              <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="education">Education</option>
                <option value="health">Health</option>
              </select>
            </div>

            <div class="mb-6">
              <label for="media url" class="block mb-2 text-sm font-medium text-gray-900">Media URL</label>
              <input type="url" id="media_url" name="media_url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="image or youtube link" required>
            </div>

            <x-primary-button class="ml-3">
                {{ __('Create project') }}
            </x-primary-button>
          </form>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>