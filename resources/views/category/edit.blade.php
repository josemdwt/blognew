<x-app-margin>

    <h2 class="text-xl mt-10 font-semibold leading-tight text-gray-800">
        {{ __('Editar Categoría') }}
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

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <label class="text-sm font-bold uppercase opacity-70">Name</label>
                <input type="text" name="name" value="{{ $category->name }}"
                    class="w-full p-3 mt-2 mb-4 border-2 rounded bg-slate-200 border-slate-200 focus:border-slate-600 focus:outline-none">
                <label class="text-sm font-bold uppercase opacity-70">Description</label>
                <input type="text" name="description" value="{{ $category->description }}" class="w-full p-3 mt-2 mb-4 rounded bg-slate-200">
                <label class="text-sm font-bold uppercase opacity-70">Main Category</label>
                <select name="parent_id" value="{{ $category->parent_id }}"
                    class="w-full p-3 mt-2 mb-4 border-2 rounded bg-slate-200 border-slate-200 focus:border-slate-600 focus:outline-none">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <label class="text-sm font-bold uppercase opacity-70">Image</label>
                <input type="file" name="image_url" class="w-full p-3 mt-2 mb-4 rounded bg-slate-200">
                <input type="submit"
                    class="px-6 py-3 my-2 font-medium text-white duration-300 ease-in-out rounded cursor-pointer bg-emerald-500 hover:bg-indigo-500"
                    value="Send">
            </form>
        </div>
    </div>
</x-app-margin>
