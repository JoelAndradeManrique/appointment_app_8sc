<x-admin-layout :breadcrumbs="[
    [
    'name' => 'Dashboard',
    'href' => route('admin.dashboard'),
    ],

    ['name' => 'roles'],
]">
    @livewire('admin.datatables.role-table')
</x-admin-layout>