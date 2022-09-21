<section class="container mx-auto p-6 font-mono">
    <div class="flex justify-end w-full mb-4 p-2">
        <x-jet-button wire:click="showCreateModal" class="bg-blue-500">Create Tag</x-jet-button>
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Slug</th>
                        <th class="px-4 py-3">Manage</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($tags as $tag)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border">
                            {{ $tag->tag_name }}
                        </td>
                        <td class="px-4 py-3 text-ms font-semibold border">{{ $tag->slug }}</td>
                        <td class="px-4 py-3 text-sm border">
                            <x-jet-button wire:click="showEditModal({{ $tag->id }})"
                                class="bg-green-500 hover:bg-green-700 text-white">
                                Edit
                            </x-jet-button>
                            <x-jet-button wire:click="deleteTag({{ $tag->id }})"
                                class="bg-red-500 hover:bg-red-700 text-white">
                                Delete
                            </x-jet-button>
                        </td>
                    </tr>
                    @empty
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border">
                            Empty
                        </td>
                        <td class="px-4 py-3 text-ms font-semibold border">{{ $tag->slug }}</td>
                        <td class="px-4 py-3 text-sm border">
                            Edit/Delete
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="showTagModal">
        @if ($tagId)
        <x-slot name="title"><span class="font-bold text-indigo-600 uppercase">Update Tag</span></x-slot>
        @else
        <x-slot name="title"><span class="font-bold text-indigo-600 uppercase">Create Tag</span></x-slot>
        @endif

        <x-slot name="content">
            <form class="space-y-6">
                <div class="bg-gray-100 px-4 py-5 shadow sm:rounded-lg sm:p-6">
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="tag-name" class="block text-sm font-medium text-gray-700">Tag
                                    name</label>
                                <input wire:model="tagName" type="text" autocomplete="tag-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="tag-name">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </x-slot>
        <x-slot name="footer">
            <x-m-button wire:click="closeTagModal" class="">
                Cancel</x-m-button>
            @if ($tagId)
            <x-m-button wire:click="updateTag" class="bg-blue-600 hover:bg-blue-800 text-white">
                Update</x-m-button>
            @else
            <x-m-button wire:click="createTag" class="bg-blue-600 hover:bg-blue-800 text-white">
                Create</x-m-button>
            @endif

        </x-slot>
    </x-jet-dialog-modal>
</section>
