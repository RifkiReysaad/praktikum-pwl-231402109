@extends('layouts.layout')

@section('contect')
    {{-- content --}}
    <div class="flex justify-center mt-10 flex-col gap-10">
        {{-- search bar --}}
        <form action="/" method="POST">
            @csrf
            <label class="form-control w-full max-w-lg mx-auto">
                <div class="label">
                    <span class="label-text text-emerald-600">Task Baru</span>
                </div>
                <input name="task" type="text" placeholder="Type here" class="input input-bordered input-success w-full max-w-lg" />
                <div class="label">
                </div>
                {{-- @error('task')
                 <p class="text-red-500">{{ $massage }}</p>
                @enderror --}}
                {{-- button add --}}
                <button type="submit" class="btn btn-success w-36 self-center">Add</button>
                {{-- akhir button add --}}
            </label>
        {{-- akhir search bar --}}
        </form>
        {{-- task --}}
        <div class="flex flex-col gap-3 mb-10">
            {{-- task 1 --}}
            @foreach ($tasks as $task)
            <div role="alert" class="alert max-w-4xl mx-auto">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="flex flex-col">
                    <span class="text-sm text-slate-400">{{ $task->tanggal }}</span>
                    <span class="text-xl font-bold">{{ $task->task }}</span>
                </div>
                <div>
                    <div class="tooltip" data-tip="Detail">
                        <button class="btn btn-sm shadow-lg bg-base-200">View</button>
                    </div>
                    <div class="tooltip" data-tip="Edit">
                        <button class="btn btn-sm shadow-lg bg-yellow-500">Edit</button>
                    </div>
                    <div class="tooltip" data-tip="Selesai">
                        <form id="deleteForm{{ $task->id }}" action="{{ route('hapus', ['task' => $task->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-success" onclick="return confirm('Are You Sure?')">Done</button>
                        </form>
                        <script>
                            function submitForm(id) {
                                if (confirm('Are You Sure?')) {
                                    document.getElementById('deleteForm' + id).submit();
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
            {{-- akhir task 1 --}}
            @endforeach
        </div>
        {{-- akhir task --}}
    </div>
    {{-- akhir content --}}
@endsection
