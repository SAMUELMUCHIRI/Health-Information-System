
<div class="justify-self-center h-full w-full ">
    
    <form wire:submit="register " class="h-1/2"> 
        
    <div class="flex flex-row gap-4">
    <flux:input size="sm" type="text"  id="firstname" label="firstname" wire:model="firstname" />  
    <flux:input size="sm" type="text" id="secondname" label="secondname" wire:model="secondname" />  
    </div>      
    <flux:input size="sm" type="email" id="email" label="Email" wire:model="email" />
    <flux:input size="sm" type="text" id="text" label="phonenumber" wire:model="phonenumber" /> 
    <div class="flex flex-row gap-4">
    <flux:input size="sm" type="password" id="password" viewable label="Password" wire:model="password" />
    <flux:input size="sm" type="password"  viewable id="password_confirmation" label="password confirmation" wire:model="password_confirmation" /> 
    </div>   
       

 

    <flux:button variant="primary"
    type="submit"
        class="
        w-full 
        mt-2 bg-blue-500 rounded-md
        hover:bg-blue-400 focus:outline-none
        focus:bg-blue-400 focus:ring 
        focus:ring-blue-300 focus:ring-opacity-50"
        >
        Sign In
    </flux:button>    


    </form>


    <p class="mt-6 text-sm text-center text-gray-400">Not new here  ? <a href="/login" class="text-blue-500 focus:outline-none focus:underline hover:underline">Login</a>.</p>
    
</div>

