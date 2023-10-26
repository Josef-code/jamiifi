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


                    <div class="grid grid-cols-4 gap-4">
                        <div class="card bg-white shadow-md rounded-md p-4">
                            <h2 class="text-center text-2xl font-bold">Total Donations</h2>

                            @if($numberOfContributions > 0)
                            <p class="text-center text-gray-500">{{ $numberOfContributions }}</p>
                            @endif
                        </div>
                        <div class="card bg-white shadow-md rounded-md p-4">
                            <h2 class="text-center text-2xl font-bold">Total amount</h2>
                            <p class="text-center text-gray-500">N1,000,000</p>
                        </div>
                        <div class="card bg-white shadow-md rounded-md p-4">
                            <h2 class="text-center text-2xl font-bold">Number of Donors</h2>
                            <p class="text-center text-gray-500">1000</p>
                        </div>
                    </div>

                    <h3 class="mt-10 text-xl font-bold text-center">Trending Projects</h3>

                    @if(count($projects) > 0 )

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-8">
                         <!-- Card -->
                         @foreach ( $projects as $project )
                        <div class="bg-white rounded-lg shadow-lg p-5">
                            
                            <h2 class="text-lg font-bold pb-3">{{ $project->project_name }}</h2>
                            <p class="text-gray-500 text-base">Start Date: {{ $project->start_date }}</p>
                            <p class="text-gray-500 text-base">Amount Raised: {{ $project->current_funds_raised }}</p>
                            <a href='{{ url("/view-project/$project->id") }}' class="mt-4 block bg-[#035939] hover:bg-black text-white font-base py-2 px-4 rounded">
                                Learn More
                            </a>
                        </div>
                        @endforeach
                    </div>
                  
                    

                    @else 

                        {{ "oops, no projects yet" }}

                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>