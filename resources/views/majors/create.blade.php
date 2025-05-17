<x-default-layout title="Major" section_title="Add new major">
    <div class="grid grid-cols-3">
        <form action="{{ route('majors.store') }}" method="POST"
            class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-100 shadow col-span-3 md:col-span-2">
            @csrf
            @method("POST")
            <div class="grid sm:grid-cols-2 gap-4">
                <div class="flex flex-col gap-2">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="Major Name">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="code">Code</label>
                    <input type="text" id="code" name="code" class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="Major Code (e.g., TI)">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="description">Description</label>
                    <textarea id="description" name="description"
                        class="px-3 py-2 border border-zinc-300 bg-slate-50" placeholder="Description"></textarea>
                </div>
            </div>
            <button type="submit"
                class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">Save</button>
        </form>
    </div>
</x-default-layout>