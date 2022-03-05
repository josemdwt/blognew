<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="flex flex-col items-center min-h-screen pt-6 sm:pt-0">
            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <table>
                                <thead>
                                    <tr>
                                        <td>Title</td>
                                        <td>Author</td>
                                        <td>Category</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->user->name}}</td>
                                        <td>{{$post->categories->name}}</td>
                                        <td>{{$post->publish ? 'Active' : 'Not Active'}}</td>
                                    </tr>
                                @endforeach
                            </table>

                            <div class="mt-6">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
