@extends ('layouts.app')

@section('content')
<header class="flex items-center mb-3 py-4">
    <div class="flex justify-between items-centre w-full">
    <h2 class="text-gray-600" style="font-size: 20px;">My Projects</h2>
        <a href="/projects/create" class="button">New Project</a>
    </div>
</header>

<main class="lg:flex lg:flex-wrap -mx-3">
        @forelse ($projects as $project)
        <div class="lg:w-1/3 px-2 pb-6">
            @include('projects.card')
        </div>
        @empty

         <div>No Projects Yet</div>

        @endforelse

</main>

    @endsection

