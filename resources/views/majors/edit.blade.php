<x-default-layout title="Edit Major" section_title="Edit Major: {{ $major->name }}">
    <form action="{{ route('majors.update', $major->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $major->name) }}"
                   class="w-full border px-3 py-2 @error('name') border-red-500 @enderror">
            @error('name')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>

        <div>
            <label for="code">Code</label>
            <input type="text" name="code" id="code" value="{{ old('code', $major->code) }}"
                   class="w-full border px-3 py-2 @error('code') border-red-500 @enderror">
            @error('code')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4"
                      class="w-full border px-3 py-2 @error('description') border-red-500 @enderror">{{ old('description', $major->description) }}</textarea>
            @error('description')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Update</button>
    </form>
</x-default-layout>
