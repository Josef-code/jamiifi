<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("List of projects") }}

                    <a class="btn bg-[#035939] text-white p-3 rounded mb-2 hover:bg-black float-right" href="{{ url('/create-project') }}">Start a Project</a>
                </div>

                @if( Session::has('project_created') )

                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg" role="alert">
                        <span class="font-medium"> {{ Session::get('project_created') }} </span> 
                    </div>

                @endif
            </div>


<div class="relative overflow-x-auto">

    @if(count($projects) > 0 )

    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-black uppercase bg-gray-300">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Project name
                </th>
                <th scope="col" class="px-6 py-3">
                    Funding goal
                </th>
                <th scope="col" class="px-6 py-3">
                    Funds raised
                </th>
                <th scope="col" class="px-6 py-3">
                    Start date
                </th>
                    <th scope="col" class="px-6 py-3">
                    End date
                </th>
                </th>
                    <th scope="col" class="px-6 py-3">
                    Status
                </th>
            </tr>
        </thead>
        <tbody> 
            <tr class="bg-white border-b">

            @foreach ($projects as $project)
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $project->project_name }}
                </th>
                <td class="px-6 py-4">
                    ₦{{ number_format($project->funding_goal, 0, '', ',') }}
                </td>
                <td class="px-6 py-4">
                    ₦{{ number_format($project->current_funds_raised, 0, '', ',') }}
                </td>
                <td class="px-6 py-4">
                    {{ $project->start_date  }}
                </td>
                <td class="px-6 py-4">
                    {{ $project->end_date  }}
                </td>
                <td class="px-6 py-4">
                    {{ $project->project_status  }}
                </td>
            @endforeach

            </tr>
        </tbody>
    </table>

    @else 

        <h2>Sorry no projects yet</h2>

    @endif
</div>

        </div>
    </div>
</x-app-layout>
