<div class="justify-self-center  w-full">
    <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
        <flux:radio value="light" icon="sun">Light</flux:radio>
        <flux:radio value="dark" icon="moon">Dark</flux:radio>
        <flux:radio value="system" icon="computer-desktop">System</flux:radio>
    </flux:radio.group>
    <form wire:submit="submit"> 

    <flux:input type="email" id="email" label="Email" wire:model.live.debounce.200m="email" />

    <flux:input type="password" id="password" label="Password" wire:model.live.debounce.50ms="password" />
    
    <a href="#" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot password?</a>

    <flux:button type="submit" variant="primary" class="w-full mt-2 bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">Sign In</flux:button>
    
     
           
       

        

    </form>
 

    <p class="mt-6 text-sm text-center dark:text-white text-gray-700">Don&#x27;t have an account yet? <a href="/register" class="text-blue-600 focus:outline-none focus:underline hover:underline">Sign up</a>.</p>
    
    {{-- The Master doesn't talk, he acts. --}}
</div>
