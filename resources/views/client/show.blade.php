<x-basic>
    

    <flux:header container class="bg-zinc-100 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">  
       <div class="lg:block hidden">    
       <flux:brand href="/" logo="{{Vite::asset('resources/images/logo.webp')}}" name="Health Information System" />
       </div>
       <flux:brand href="/" logo="{{Vite::asset('resources/images/logo.webp')}}" class="lg:hidden block" />
       

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
            
                <livewire:edit-client id="{{$id}}"/>
                <div  class="h-auto">
            
                    <h1 class="text-black dark:text-white uppercase text-xl font-bold h-auto">Enrolled Programs</h1>  
                    <div class="p-2">
                        <livewire:enrolled-programs id="{{$id}}"> 
                        
                    </div>
        
        
                    </div>
        </section>
           
           
           
       </div>
       <div class="rounded-lg  flex  flex-col justify-items-stretch gap-4 grid-cols-1  order-first lg:order-last">
        <section id="register-client" class="flex flex-1 flex-col rounded-lg  p-1"> 
            
            <div  class="flex-1">

            <h1 class="text-black dark:text-white uppercase text-xl font-bold h-auto">Available Programs</h1>  

            <livewire:available-programs id="{{$id}}" >

            </div>
         
           
               
                       
            
            
            
        </section>

       </div>
   </section >
</x-basic>