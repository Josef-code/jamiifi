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
            <!-- Payment Form Section -->
            <form class="mb-4">
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-semibold mb-2">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" placeholder="Enter your phone number" required>
                </div>

                <div class="mb-4">
                    <label for="amount" class="block text-gray-700 text-sm font-semibold mb-2">Amount to Pay:</label>
                    <input type="number" id="amount" name="amount" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" placeholder="Enter the amount to pay" required>
                </div>

                <button type="submit" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600">Pay with MoMo Pay</button>
            </form>
        </div>
    </div>



</x-app-layout>