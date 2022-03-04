<x-modal>
    <x-slot name="title">
        Hi! 👋 {{ $name }}
    </x-slot>

    <x-slot name="content">
        You are looking at a child component
    </x-slot>

    <x-slot name="buttons">
        <button class="bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring focus:ring-orange-300 active:bg-orange-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white" wire:click="$emit('closeModal')" type="button">Close Modal</button>
        {{--  If you want to close a modal with a button instead of a method in your modal component, you can use the
        $emit helper again, as we did earlier, to close our first modal. This time we will pass a second parameter that
        indicates we want to force close:--}}
        <button class="mx-2 bg-red-500 hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-300 active:bg-red-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white" wire:click="$emit('closeModal', true)">Force Close all Modals</button>

        {{-- How to emit events while closing modals (calls closeAndUpdateHelloWorld() method in ChildModal() --}}
        <button class="bg-violet-500 hover:bg-violet-600 focus:outline-none focus:ring focus:ring-violet-300 active:bg-violet-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white" wire:click="closeAndUpdateHelloWorld">Close Modal and make count 10!</button>
    </x-slot>
</x-modal>
