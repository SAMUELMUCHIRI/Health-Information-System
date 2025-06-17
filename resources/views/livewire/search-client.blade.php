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
    @error('query')
                <div class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </div>                
            @enderror
        
    
        @session("results")
            <div class="mt-2  rounded-lg  flex items-center justify-center bg-white/40 dark:bg-white text-red-500">
                {{ $value }}
            </div>
        @endsession
            @if ($results !== null )
            
                <p class="dark:text-white text-black"> 
                    Search Results
                </p>

                   <table class="min-w-full table-auto text-left">
        <thead class="bg-gray-100 dark:bg-gray-700">
            <tr>
                <th class="px-4 py-2">First Name</th>
                <th class="px-4 py-2">Second Name</th>
                <
                <th class="px-4 py-2 hidden lg:block">Contact</th>
                <th class="px-4 py-2">Check</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result ) 
           
                <tr class="bg-gray-200 dark:bg-gray-50 border-b border-gray-300 dark:border-gray-600 hover:bg-gray-300 transition-all flex-1">
                    <td class="px-4 py-2 font-semibold capitalize">{{$result->firstname}} </td>
                    <td class="px-4 py-2"> {{$result->secondname}}  </td>
                    
                    <td class="px-4 py-2 hidden lg:block">{{$result->contact_info}}</td>
                  
                    <td class="px-4 py-2 text-blue-600 hover:underline cursor-pointer"> <a href="/client/{{$result->id}}" >Check</a></td>
                </tr>
               
            @endforeach
        </tbody>
    </table>



              
            
            @endif
        
    


</div>
