<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $project->project_name }}
        </h2>
    </x-slot>

    <div class="w-full max-w-3xl mx-auto pt-10 mb-8">

        <!-- Project Details Section -->
        <div class="bg-white shadow-lg rounded-lg p-6">

        <iframe class="w-full mb-8" src="{{ $project->media_url }}">Sorry your browser is not supported</iframe>

            <h1 class="text-2xl font-bold mb-4">Project Name: {{ $project->project_name }}</h1>
            <p class="text-gray-700 mb-4 font-bold">Start Date: {{ $project->start_date }}</p>
            <p class="text-gray-700 mb-4 font-bold">Amount Raised: {{ $project->end_date }}</p>
            <p class="text-gray-700 mb-4 font-bold">Project Creator: {{ $project->user->name }}</p>
            <p class="text-gray-700 mb-4 font-bold">Project Description: {{ $project->description }}</p>
            
                <livewire:donation :project="$project->id" /> 
           
        </div>
    </div>



</x-app-layout>