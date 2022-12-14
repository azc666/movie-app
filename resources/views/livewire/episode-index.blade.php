<!-- component -->
<section class="container mx-auto p-6 font-mono">
    <div class="flex justify-end w-full mb-4 p-2">
        <x-jet-button>Create Episode</x-jet-button>
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
</section>
