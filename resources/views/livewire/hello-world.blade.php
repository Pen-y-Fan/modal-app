<x-modal formAction="update">
    <x-slot name="title">
        Hello World
    </x-slot>

    <x-slot name="content">
        Hi! 👋 {{ $counter }}
    </x-slot>

    <x-slot name="buttons">
        <button class="bg-violet-500 hover:bg-violet-600 focus:outline-none focus:ring focus:ring-violet-300 active:bg-violet-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white" type="submit">Start counting</button>
        <button class="mx-2 bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300 active:bg-blue-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white" wire:click='$emit("openModal", "child-modal", @json(["name" => "Philo"]))' type="button">Open Child</button>
        <button class="bg-red-500 hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-300 active:bg-red-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white" wire:click="$emit('closeModal')" type="button">Close Modal</button>
    </x-slot>
</x-modal>
