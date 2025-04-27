
<form wire:submit="register_program " class="p-2"> 
    <flux:heading size="xl" class="pb-4">Register a Program </flux:heading>

    <div class="flex flex-col gap-4 justify-stretch">
        <div class="flex-1">
    <flux:input size="sm" type="text"  id="name" label="Name" wire:model="name" />  
        </div>
        <div class="flex-1">
            <flux:input size="sm" type="number"  id="program_number" label="Program Number" wire:model="program_number" />  
        </div>
        <div class="flex-1">
    <flux:textarea
    id="description"
    label="Description"
    resize="none"
    placeholder="Program Description..."
    wire:model="description"
/> 
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
    @session('program_status')
        <div class="p-4 mt-2 bg-green-100 rounded-lg ">
            {{ $value }}
        </div>
    @endsession


</form>


