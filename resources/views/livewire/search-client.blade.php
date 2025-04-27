<div>
    @php use Carbon\Carbon; @endphp
    <form class="flex flex-row mt-2 gap-2" wire:submit="search">
        <flux:input icon="magnifying-glass" class=" flex-1" wire:model="query" placeholder=""/>
        
            <flux:button variant="primary"
                type="submit"
                class="
            
                w-1/6
                bg-blue-500 rounded-md
                hover:bg-blue-400 focus:outline-none
                focus:bg-blue-400 focus:ring 
                focus:ring-blue-300 focus:ring-opacity-50"
                >
                search
            
            </flux:button> 
        

        

    </form>
    
        @session("results")
            <div class="mt-2  rounded-lg  flex items-center justify-center bg-white/40 dark:bg-white text-red-500">
                {{ $value }}
            </div>
        @endsession
            @if ($results !== null )
            
                <p class="dark:text-white text-black"> 
                    Search Results
                </p>
                @foreach ($results as $result )  
                
                    <a href="/client/{{$result->id}}" class="flex-1 p-1 my-1 gap-1 flex flex-col rounded dark:bg-gray-50 bg-gray-200">
                        <div class="flex flex-row flex-1 ">
                            <p class="font-semibold capitalize flex-1 w-full flex flex-row ">
                                {{$result->firstname}} {{$result->secondname}}  |  {{$result->gender}}  | {{$result->contact_info}}</p>
                            </p>            
                        </div>                        
                    </a>        
                
                @endforeach
            
            @endif
        
    


</div>
