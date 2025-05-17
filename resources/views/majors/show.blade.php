<x-default-layout title="Major" section_title="Major detail">
    <div class="grid grid-cols-3">
        <div
            class="flex flex-col gap-4 px-6 py-4 bg-white border border-t-4 border-zinc-300 shadow col-span-3 md:col-span-2">
            <div class="grid sm:grid-cols-2 gap-4">
                <div class="flex flex-col gap-2">
                    <div>Name</div>
                    <div class="px-3 py-2 border border-zinc-300 ">
                        {{ $major->name }}
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div>Code</div>
                    <div class="px-3 py-2 border border-zinc-300 ">
                        {{ $major->code }}
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <div>Description</div>
                <div class="px-3 py-2 border border-zinc-300 ">
                    {{ $major->description }}
                </div>
            </div>

            <div class="self-end flex gap-2 mt-4">
                <a href="{{ route('majors.index') }}"
                   class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    <span>Back</span>
                </a>
                <a href="{{ route('majors.edit', $major->id) }}"
                   class="bg-yellow-50 border border-yellow-500 text-yellow-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-note-pencil block text-yellow-500"></i>
                    <span>Edit</span>
                </a>
            </div>
        </div>
    </div>

    {{-- Optional: list of students in this major --}}
    <div class="mt-6 px-6 py-4 bg-white border border-zinc-300 shadow col-span-3">
        <h3 class="text-lg font-semibold mb-2">Students in this Major</h3>
        @if ($major->students->count())
            <ul class="list-disc list-inside space-y-1">
                @foreach ($major->students as $student)
                    <li>
                        <a href="{{ route('students.show', $student->id) }}" class="text-blue-600 hover:underline">
                            {{ $student->name }} ({{ $student->student_id_number }})
                        </a>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500">No students enrolled in this major.</p>
        @endif
    </div>
</x-default-layout>
