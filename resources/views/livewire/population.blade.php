<div>
    <x-slot name="header">
        <h2 class="text-center font-bold text-lg">Population</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                {{-- @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
            </div>
        </div>
    </div>
    @endif --}}
    <button wire:click="create()" class="bg-black text-white font-bold py-2 px-4 rounded my-3">Add
        Person</button>
    {{-- @if($isModalOpen)
                @include('livewire.create')
                @endif --}}
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 w-20">No.</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">National ID</th>
                <th class="px-4 py-2">Mobile</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($populations as $population)
            <tr>
                <td class="border px-4 py-2">{{ $population->id }}</td>
                <td class="border px-4 py-2">{{ $population->firstname }}</td>
                <td class="border px-4 py-2">{{ $population->nationalID}}</td>
                <td class="border px-4 py-2">{{ $population->mobile}}</td>
                <td class="border px-4 py-2">
                    <button wire:click="edit({{ $population->id }})"
                        class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Edit</button>
                    <button wire:click="delete({{ $population->id }})"
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">View</button>
                    <button wire:click="delete({{ $population->id }})"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</div>