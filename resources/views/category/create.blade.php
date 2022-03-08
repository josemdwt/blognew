<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Crear Post') }}
        </h2>
    </x-slot>

    <div>

        <x-app-layout>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <form action="post">

                    @csrf

                    <label class="text-sm font-bold uppercase opacity-70">Name</label>
                    <input type="text"
                        class="w-full p-3 mt-2 mb-4 border-2 rounded bg-slate-200 border-slate-200 focus:border-slate-600 focus:outline-none">
                    <label class="text-sm font-bold uppercase opacity-70">Email</label>
                    <input type="text" class="w-full p-3 mt-2 mb-4 rounded bg-slate-200">
                    <label class="text-sm font-bold uppercase opacity-70">Language</label>
                    <select
                        class="w-full p-3 mt-2 mb-4 border-2 rounded bg-slate-200 border-slate-200 focus:border-slate-600 focus:outline-none">
                        <option value="">Javascript</option>
                        <option value="">Ruby</option>
                        <option value="">Python</option>
                        <option value="">PHP</option>
                        <option value="">Java</option>
                    </select>
                    <div class="my-2 font-medium opacity-70">
                        <input type="checkbox">
                        Subscribe and follow company updates.
                    </div>
                    <input type="submit"
                        class="px-6 py-3 my-2 font-medium text-white duration-300 ease-in-out rounded cursor-pointer bg-emerald-500 hover:bg-indigo-500"
                        value="Send">
                </form>
            </div>
    </div>
</x-app-layout>
