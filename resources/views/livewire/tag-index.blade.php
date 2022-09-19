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
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Rating</th>
                        <th class="px-4 py-3">Public</th>
                        <th class="px-4 py-3">Manage</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border">
                            Title here
                        </td>
                        <td class="px-4 py-3 text-ms font-semibold border">Date here</td>
                        <td class="px-4 py-3 text-xs border">
                            Rating here
                        </td>
                        <td class="px-4 py-3 text-sm border">Public</td>
                        <td class="px-4 py-3 text-sm border">
                            Edit/Delete
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="showTagModal">
        <x-slot name="title"><span class="font-bold text-indigo-600 uppercase">Create Tag</span></x-slot>

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
            <button wire:click="closeTagModal"
                class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-red-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Cancel</button>
            <button wire:click="createTag"
                class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Create</button>
        </x-slot>
    </x-jet-dialog-modal>
</section>
