<div class="p-4">
    <!-- Search Input -->
    <input wire:model.debounce.300ms="search" type="text" placeholder="Search Contact Lists..."
           class="border border-gray-300 rounded-md py-2 px-4 mb-4">

    <!-- Create New Contact List Form -->
    <form wire:submit.prevent="create" class="mb-4">
        <input wire:model="name" type="text" placeholder="Enter Contact List Name"
               class="border border-gray-300 rounded-md py-2 px-4 mr-2">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Create New</button>
        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
    </form>

    <!-- Contact Lists Table -->
    <table class="w-full">
        <thead>
        <tr>
            <th class="px-4 py-2 text-gray-700 dark:text-gray-300"">#</th>
            <th class="px-4 py-2 text-gray-700 dark:text-gray-300"">Name</th>
            <th class="px-4 py-2 text-gray-700 dark:text-gray-300"">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($contactlists as $index => $contactlist)
            <tr>
                <td class="border px-4 py-2 text-gray-700 dark:text-gray-300"">{{ $index + 1 }}</td>
                <td class="border px-4 py-2 text-gray-700 dark:text-gray-300"">{{ $contactlist->name }}</td>
                <td class="border px-4 py-2 text-gray-700 dark:text-gray-300"">
                    <button wire:click="delete({{ $contactlist->id }})"
                            class="bg-red-500 text-white py-1 px-2 rounded-md">Delete</button>
                    <!-- Add Edit Button and Functionality if Needed -->
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $contactlists->links() }}
    </div>
</div>
