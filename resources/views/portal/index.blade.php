<x-basic>
         <flux:header container class="bg-zinc-100 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">  
            <div class="lg:block hidden">    
            <flux:brand href="/" logo="/images/logo.webp" name="Health Information System" />
            </div>
            <flux:brand href="/" logo="/images/logo.webp" class="lg:hidden block" />
            

            <flux:navbar class="-mb-px max-lg:hidden">
                <flux:navbar.item icon="home" href="/" current>Home</flux:navbar.item>                
                <flux:navbar.item icon="document-text" href="/program">Programs</flux:navbar.item>
                <flux:navbar.item icon="numbered-list"  href="/client">Client</flux:navbar.item>
                               
                           
                 

            </flux:navbar>
            <flux:navbar class="-mb-px block lg:hidden ">
                <flux:navbar.item icon="home" href="/" current class="block lg:hidden" />                
                <flux:navbar.item icon="document-text" href="/program" class="block lg:hidden" />   
                <flux:navbar.item icon="numbered-list" href="/client"   class="block lg:hidden" />    
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

        <div class="h-auto mx-auto py-2 lg:py-4 px-6 lg:px-8 flex flex-col lg:flex-row justify-between container  gap-4 lg:gap-8">
            <livewire:greetings>              
        </div>
        <section id="main_content" class="grid grid-cols-1 lg:grid-cols-2 gap-4  h-2/3 mx-auto px-6 lg:px-8 container">
            <div class="rounded-lg flex  flex-col justify-items-stretch gap-4 grid-cols-1  order-first lg:order-last">
                <section id="enrolled-clients" class=" bg-inherit  rounded-lg flex  flex-col justify-items-stretch  grid-cols-1 ">
                <livewire:enrolled-clients>  
                   
                </section>
                <p class="dark:text-white/70 font-semibold">Latest Registered Clients</p>
                <flux:separator />  
                <section id="latest-client" class="flex flex-col gap-2 flex-1 rounded-lg  ">                
                <livewire:latest-clients>
                </section>
                
            </div>
            <div class="rounded-lg  flex  flex-col justify-items-stretch gap-4 grid-cols-1  order-first lg:order-last">
                <section id="create" class="bg-inherit flex-1  rounded-lg flex  flex-col justify-items-stretch  grid-cols-1 ">
                    
                    
                    <flux:callout  class="flex-1 flex items-center">
                        <flux:callout.heading class="text-xl">Create a Client </flux:callout.heading>

                        <flux:callout.text>
                            Create and manage your clients with ease.
                            <flux:callout.link href="/clients">Click Here</flux:callout.link>
                        </flux:callout.text>
                    </flux:callout>
                            
                </section>
                
                <section id="create_program" class="bg-inherit flex-1  rounded-lg flex  flex-col justify-items-stretch  grid-cols-1 ">
                    
                    <flux:callout  class="flex-1 flex items-center">
                        <flux:callout.heading class="text-xl">Create Programs </flux:callout.heading>

                        <flux:callout.text>
                            Create and manage your programs to add the to your clients.
                            <flux:callout.link href="/program">Click Here</flux:callout.link>
                        </flux:callout.text>
                    </flux:callout>

                </section>

            </div>
        </section >
</x-basic>