@props(['number','description','icon'=>"arrow-up-right"])
<x-basic>

    <div class="flex justify-self-center items-center h-full">
        <div class="flex flex-col ">
            <div class="flex flex-row mb-6">
    <flux:text class="text-base m-4">{{$number}}</flux:text>
        <flux:separator vertical class="mx-6" />
    <flux:text class="text-base m-4">{{$description}}</flux:text>
            </div>

    <flux:button
        href="/"
        icon:trailing={{$icon}}
    >
        Go to Homepage
    </flux:button>
        </div>
    </div>
    
</x-basic>
