<div wire:poll.2s>
    <div class="flex flex-1 flex-col gap-2 ">
        @foreach ($programs as $program)
        <a href="/program/{{$program->id}}" class="flex-1 p-2  flex flex-col rounded dark:bg-gray-50 bg-gray-200  ">
            <div class="flex flex-row flex-1 justify-between">
                <p class="font-semibold capitalize flex-1 w-full flex flex-row justify-between">
                    {{$program->name}} 
                </p>
                <p class="text-sm text-light">created {{ \Carbon\Carbon::parse($program->created_at)->diffForHumans() }}</p>
            </div>

            <div class="flex flex-row flex-1 gap-1">
                
                <p>Program Number</p>
                <p> {{$program->program_number}}</p>
            </div>
            
        </a>
        @endforeach
    </div>

    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $programs->links() }}
    </div>
</div>