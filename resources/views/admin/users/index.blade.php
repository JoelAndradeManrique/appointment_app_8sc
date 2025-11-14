<x-admin-layout :breadcrumbs="[
    ['name' => 'Dashboard', 'href' => route('admin.dashboard')],
    ['name' => 'Users'],
]">

    <x-slot name="actions">
        <x-wire-button href="{{ route('admin.users.create') }}" blue>
            <i class="fa-solid fa-plus mr-2"></i>
            Nuevo Usuario
        </x-wire-button>
    </x-slot>

</x-admin-layout>
