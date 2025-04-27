<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AllPrograms extends Component
{
    use WithPagination;
    

    public function render()
    {
        return view('livewire.all-programs',[
            'programs'=>DB::table('programs')
            ->where('user_id',Auth::id())
            ->paginate(6),
        ]);
    }
}
