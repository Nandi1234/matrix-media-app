<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    protected string $paginationTheme = 'bootstrap';
    use WithPagination;
    public string $searchTerm = '';
    public function render()
    {
        return view('livewire.user-list', [
            'users' => User::where('name', 'like', '%' . $this->searchTerm . '%')->paginate(10)
        ]);
    }
}
