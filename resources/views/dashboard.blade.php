<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}


                        <div class="grid grid-cols-4 gap-4">
                          <div class="card bg-white shadow-md rounded-md p-4">
                            <h2 class="text-center text-2xl font-bold">Total Donations</h2>
                            <p class="text-center text-gray-500">N10,000,000</p>
                          </div>
                          <div class="card bg-white shadow-md rounded-md p-4">
                            <h2 class="text-center text-2xl font-bold">Donations Today</h2>
                            <p class="text-center text-gray-500">N1,000,000</p>
                          </div>
                          <div class="card bg-white shadow-md rounded-md p-4">
                            <h2 class="text-center text-2xl font-bold">Average Donation</h2>
                            <p class="text-center text-gray-500">N10,000</p>
                          </div>
                          <div class="card bg-white shadow-md rounded-md p-4">
                            <h2 class="text-center text-2xl font-bold">Number of Donors</h2>
                            <p class="text-center text-gray-500">1000</p>
                          </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
