<x-basic >


    <div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen  w-full ">
            <div class="hidden  lg:block lg:w-2/3 h-full flex items-end relative " >
                <img src="/images/register.webp" alt="doctor.webp" loading="eager" class="dark:brightness-50 brightness-70 h-full object-cover object-top-right w-full absolute z-0">                   
                <div class="absolute z-10  p-16  rounded-lg h-auto   top-1/2 w-5/6 justify-self-center ">
                    <h2 class=" block text-5xl dark  font-bold text-white ">Health Information System</h2>                         

                    <p class="  text-white/80 dark:text-gray-300 text-lg mt-2 font-semibold my-8">A portal where doctors can manage clients and programs</p>
                                        

                    
                </div>
              
            </div>

            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">
                        <flux:heading size="xl">Doctor Registration</flux:heading>     
                        <div class="p-2">
                        <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
                            <flux:radio value="light" icon="sun">Light</flux:radio>
                            <flux:radio value="dark" icon="moon">Dark</flux:radio>
                            <flux:radio value="system" icon="computer-desktop">System</flux:radio>
                        </flux:radio.group>                   
                        </div>
                        
                    </div>

                    <div class="">
                        <livewire:register>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-basic >
