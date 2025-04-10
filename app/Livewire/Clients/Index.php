<?php

namespace App\Livewire\Clients;

use App\Models\Client;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $clients = Client::paginate();

        return view('livewire.client.index', compact('clients'))
            ->with('i', $this->getPage() * $clients->perPage());
    }

    public function delete(Client $client)
    {
        $client->delete();

        return $this->redirectRoute('clients.index', navigate: true);
    }
}
