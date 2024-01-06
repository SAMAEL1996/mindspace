<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Item;

class CustomersPage extends Component
{
    public $customers;
    public $passes;
    
    public $currentTime;

    public $client;
    public $itemId;
    public $timeIn;

    public function save() {
        $this->validate([
            'timeIn' => 'required',
        ]);

        Customer::create([
            'client' => $this->client,
            'item_id' => $this->itemId,
            'time_in' => \Carbon\Carbon::parse($this->timeIn),
        ]);

        $this->customers = Customer::all();
        $this->reset(['client', 'itemId', 'timeIn']);
    }

    public function updatedStay($customerId)
    {
        $customer = Customer::find($customerId);
        $this->emit('updateStay', ['customerId' => $customerId, 'stay' => \Carbon\Carbon::parse($customer->time_in)->diffForHumans()]);
    }

    public function mount() {
        $this->currentTime = \Carbon\Carbon::now();
        $this->customers = Customer::all();
        $this->passes = Item::where('type', 'pass')->get();
    }

    public function render()
    {
        return view('livewire.customers-page');
    }
}
