<div wire:poll="up">
    @foreach($programs as $program)
    <flux:badge>{{$program}}</flux:badge>
    @endforeach
</div>
