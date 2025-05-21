<div class="flex flex-1 flex-col gap-2">
    @php use Carbon\Carbon; 
    Carbon::setLocale('en') ;
    @endphp
    @foreach ($latest_clients as $clients )
    <a href="/client/{{$clients->id}}" class="flex-1 p-2 gap-2 flex flex-col rounded dark:bg-gray-50 bg-gray-200">
        <div class="flex flex-row flex-1 justify-between">
     <p class="font-semibold capitalize flex-1 w-full flex flex-row justify-between">{{$clients->firstname}} {{$clients->secondname}}  </p>
     <p class="text-sm text-light"> created 
        @php
                             Carbon::parse($clients->created_at)->diffForHumans() ;
        @endphp
     </p>
        </div>
                            
     <div class="flex  flex-row flex-1 gap-1">
        <p class=""><strong>DOB :</strong> {{$clients->date_of_birth}}</p>
        <P><strong>Sex :</strong> {{$clients->gender}} </p>
        <p><strong>Contact :</strong> {{$clients->contact_info}}</p>
     </div>
     
     
      
        
    </a>
    

    @endforeach
</div>
