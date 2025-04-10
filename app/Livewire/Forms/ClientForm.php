<?php

namespace App\Livewire\Forms;

use App\Models\Client;
use Livewire\Form;

class ClientForm extends Form
{
    public ?Client $clientModel;
    
    public $name = '';
    public $type = '';

    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'type' => 'required',
        ];
    }

    public function setClientModel(Client $clientModel): void
    {
        $this->clientModel = $clientModel;
        
        $this->name = $this->clientModel->name;
        $this->type = $this->clientModel->type;
    }

    public function store(): void
    {
        $this->clientModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->clientModel->update($this->validate());

        $this->reset();
    }
}
