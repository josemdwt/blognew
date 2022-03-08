<x-guest-margin>

    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('Lista de  Post') }}
    </h2>

    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="border-b">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                Author
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr class="border-b">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    {{ $post->id }}</td>
                                <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                    {{ $post->title }}
                                </td>
                                <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                    {{ $post->user->name }}
                                </td>
                                <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                    {{ $post->categories->name }}
                                </td>
                                <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                    {{ $post->publish ? 'Active' : 'Not Active' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-guest-margin>
