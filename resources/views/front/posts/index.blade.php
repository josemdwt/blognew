<x-guest-layout>
{{--     <div class="pt-4 bg-gray-100">
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
    </div> --}}

    <div class="flex flex-col items-center min-h-screen pt-6 sm:pt-0">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full">
                <thead class="border-b">
                  <tr>
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
                @foreach($posts as $post)
                  <tr class="border-b">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">1</td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                        {{$post->title}}
                    </td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                        {{$post->user->name}}
                    </td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                        {{$post->categories->name}}
                    </td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                        {{$post->publish ? 'Active' : 'Not Active'}}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</x-guest-layout>
