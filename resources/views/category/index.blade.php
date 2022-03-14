<x-app-margin>

    <h2 class="text-xl mt-10 font-semibold leading-tight text-gray-800">
        {{ __('Listar Categoría') }}
    </h2>

    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Please check the form below for errors
        </div>
    @endif


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
                                Name
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                edit
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="border-b">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    {{ $category->id }}</td>
                                <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                    {{ $category->name }}
                                </td>
                                <td class="px-6 py-4 text-sm font-light text-gray-900 ">
                                    {{ $category->description }}
                                </td>
                                <td class="px-6 py-4 text-sm font-light text-gray-900 ">
                                    <a href="{{ route('categories.update', $category->id) }}"
                                        class="text-amber-600 px-1.5 hover:text-amber-900">editar</a>
                                </td>
                                <td class="px-6 py-4 text-sm font-light text-gray-900 ">
                                    <form method="POST" action="{{ route('categories.delete', $category->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit"
                                        class="px-6 py-3 my-2 font-medium text-white duration-300 ease-in-out rounded cursor-pointer bg-emerald-500 hover:bg-indigo-500"
                                        value="Borrar">
                                </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-margin>
