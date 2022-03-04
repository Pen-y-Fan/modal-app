<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class HelloWorld extends ModalComponent
{
    public int $counter = 0;

    // Create a listener for childModalEvent and call the setCounterValue() method
    public $listeners = [
        'childModalEvent' => 'setCounterValue',
    ];

    public function update(): void
    {
        $this->counter++;

        // Close the modal on update()
        // $this->closeModal();
    }

    /**
     * By default, the modal will close when you hit the escape key. If you want to disable this behavior, add the
     * closeModalOnEscape method to your modal component and return false.
     */
    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    /**
     * Set the size of the modal
     *
     * @return string
     */
    public static function modalMaxWidth(): string
    {
        // return 'sm';
        return 'md';
        // return 'lg';
        // return 'xl';
        // return '2xl';
        // return '3xl';
        // return '4xl';
        // return '5xl';
        // return '6xl';
        // return '7xl';
    }

    /**
     * When the childModalEvent is emitted the setCounterValue method will be called (see public $listeners above)
     *
     * @param int $count
     * @return void
     */
    public function setCounterValue(int $count): void
    {
        $this->counter = $count;
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        // resources/views/livewire/hello-world.blade.php
        return view('livewire.hello-world');
    }
}
