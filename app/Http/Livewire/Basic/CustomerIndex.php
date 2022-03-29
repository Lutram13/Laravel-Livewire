<?php

namespace App\Http\Livewire\Basic;

use App\Models\Customer;
use Livewire\Component;

class CustomerIndex extends Component
{
    public function render()
    {
        $this->customers = Customer::all();
        return view('livewire.basic.customer-index');
    }

    public $customers, $name, $email, $mobile, $customer_id;
    public $isModalOpen = 0;

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
    private function resetCreateForm()
    {
        $this->name = '';
        $this->email = '';
        $this->mobile = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        Customer::updateOrCreate(['id' => $this->customer_id], [
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
        ]);
        session()->flash('message', $this->customer_id ? 'Customer updated.' : 'Customer created.');
        $this->closeModalPopover();
        $this->resetCreateForm();
    }
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $this->customer_id = $id;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->mobile = $customer->mobile;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        Customer::find($id)->delete();
        session()->flash('message', 'Student deleted.');
    }
}
