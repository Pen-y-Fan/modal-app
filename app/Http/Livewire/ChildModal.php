<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class ChildModal extends ModalComponent
{
    public string $name = 'Bob';

    public function mount(string $name): void
    {
        $this->name = $name;
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.child-modal');
    }

    /**
     * In some cases, you might not want to go to the previous modal but instead close the entire modal component.
     * You can use a helper method inside your child component to do so:
     *
     * @return void
     */
    public function someComponentMethod(): void
    {
        $this->forceClose()->closeModal();
    }

    /**
     * Called from child-modal button
     *
     * Will add 10 to the parent HelloWorld modal (with the counter)
     *
     * @return void
     */
    public function closeAndUpdateHelloWorld(): void
    {
        $this->closeModalWithEvents([
            // 'childModalEvent', // Emit global event (all Livewire components with listeners will receive)
            // HelloWorld::getName() => 'childModalEvent', // Emit event to specific Livewire component
            HelloWorld::getName() => ['childModalEvent', [10]], // Emit event to specific Livewire component with a parameter
            ]);
    }
}
