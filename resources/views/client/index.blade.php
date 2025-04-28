<x-basic>
    <flux:header container class="bg-zinc-100 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">  
       <div class="lg:block hidden">    
        <flux:brand href="/" logo="/images/logo.webp" name="Health Information System" />
    </div>
    <flux:brand href="/" logo="/images/logo.webp" class="lg:hidden block" />
       

       <flux:navbar class="-mb-px max-lg:hidden">
           <flux:navbar.item icon="home" href="/" >Home</flux:navbar.item>                
           <flux:navbar.item icon="document-text" href="/program">Programs</flux:navbar.item>
           <flux:navbar.item icon="numbered-list" current href="/client">Client</flux:navbar.item>
           
                          
                      
            

       </flux:navbar>
       <flux:navbar class="-mb-px block lg:hidden ">
           <flux:navbar.item icon="home" href="/" class="block lg:hidden" />                
           <flux:navbar.item icon="document-text" href="/program" class="block lg:hidden" />     
           <flux:navbar.item icon="numbered-list" href="/client" current  class="block lg:hidden" />  
       </flux:navbar>

       <flux:spacer />

       <flux:navbar class="me-4">                  
           <div class="hidden lg:block">
               <flux:switch x-data x-model="$flux.dark" label="Dark mode"  />
           </div>
           <flux:dropdown position="top" align="start">
               <livewire:name>
               

               <flux:menu>
                   <flux:menu.radio.group>                    
                       <div class="block lg:hidden"><flux:switch x-data x-model="$flux.dark" label="Dark mode"  /></div>                    
                   </flux:menu.radio.group>
                   <flux:menu.separator />
                   <livewire:logout>
               </flux:menu>
           </flux:dropdown>
       </flux:navbar>
   </flux:header>

  
   <section id="main_content" class="grid grid-cols-1 lg:grid-cols-2 gap-4  h-2/3 mx-auto px-6 lg:px-8 container">
       <div class="rounded-lg flex  flex-col justify-items-stretch gap-4 grid-cols-1  order-first lg:order-last">
        <section id="appointment" class="bg-inherit flex-1 xl:flex-2 rounded-lg  ">
            <flux:heading>Search For a client </flux:heading>
            <livewire:search-client> 
        </section>
        <section id="appointment" class="bg-inherit flex-1 xl:flex-2 rounded-lg  ">
            <livewire:register-client>
        </section>
           
           
           
       </div>
       <div class="rounded-lg  flex  flex-col justify-items-stretch gap-4 grid-cols-1  order-first lg:order-last">
        <section id="register-client" class=" flex-1 rounded-lg  p-1"> 
            
            <h1 class="text-black dark:text-white uppercase text-xl font-bold h-auto">Client Registered</h1>  
            <div>
                <div class="flex flex-1 flex-col gap-2">
                    @foreach ($registered as $client)
                    <a href="/client/{{$client->id}}" class="flex-1 p-2  flex flex-col rounded dark:bg-gray-50 bg-gray-200  ">
                        <div class="flex flex-row flex-1 justify-between">
                            <p class="font-semibold capitalize flex-1 w-full flex flex-row justify-between">
                                {{$client->firstname}} {{$client->secondname}}
                            </p>
                            <p class="text-sm text-light">created {{ \Carbon\Carbon::parse($client->created_at)->diffForHumans() }}</p>
                        </div>
            
                        <div class="flex flex-row flex-1 gap-1">
                            <p><strong>DOB:</strong> {{ \Carbon\Carbon::parse($client->date_of_birth)->format('M d, Y') }}</p>
                            <p><strong>Sex:</strong> {{$client->gender}}</p>
                            <p><strong>Contact:</strong> {{$client->contact_info}}</p>
                        </div>
                        <p class="flex-1">Programs:</p>
                    </a>
                    @endforeach
                </div>
            
                <!-- Pagination Links -->
                <div class="mt-4">
                    {{ $registered->links() }}
                </div>
            </div>
           
               
                       
            
            
            
        </section>

       </div>
   </section >
</x-basic>