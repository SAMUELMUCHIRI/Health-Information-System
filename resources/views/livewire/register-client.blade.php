
    <form wire:submit="register_client " class="p-2"> 
            <flux:heading size="xl" class="pb-4">Register a client </flux:heading>
        
            <div class="flex flex-row gap-4 justify-stretch">
                <div class="flex-1">
            <flux:input size="sm" type="text"  id="firstname" label="firstname" wire:model="firstname" />  
                </div>
                <div class="flex-1">
            <flux:input size="sm" type="text" id="secondname" label="secondname" wire:model="secondname" />  
                </div>
            </div> 
            <div class="flex flex-row gap-2 justify-stretch "> 
                <div class="flex-1">
            <flux:input type="date" max="2999-12-31" label="Date" id="date" wire:model="date"/>
        </div>
            <div class="flex-1">
            <flux:select wire:model="gender" label="Gender" id="gender"  placeholder="Choose Gender...">
                <flux:select.option>Male</flux:select.option>
                <flux:select.option>Female</flux:select.option>
                <flux:select.option>Other</flux:select.option>
            </flux:select>
        </div>
            </div>
            <div class="flex flex-row gap-2 justify-stretch ">
                <div class="flex-1">
            <flux:input size="sm" type="number"  id="nationalid"  class="flex-1" label="national id" wire:model="nationalid" />  
                </div>
            <div class="flex-1">
            <flux:input size="sm" type="number" id="phonenumber" class="flex-1"  label="phonenumber" wire:model="phonenumber" />  
            </div>
            </div>   
               
            <div class="flex flex-row mt-2 gap-8">
            
        <flux:button variant="primary"
        type="submit"
            class="
            flex-1
             bg-blue-500 rounded-md
            hover:bg-blue-400 focus:outline-none
            focus:bg-blue-400 focus:ring 
            focus:ring-blue-300 focus:ring-opacity-50"
            >
            Register
        </flux:button> 
        <flux:button variant="danger" class="flex-1" type="reset">Cancel</flux:button> 
            </div>  
            @session('client_status')
                <div class="p-4 mt-2 bg-green-100 rounded-lg ">
                    {{ $value }}
                </div>
            @endsession
    
    
        </form>
    

