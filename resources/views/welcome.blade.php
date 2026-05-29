<x-layout title="Home">
    {{-- @dd($tasks) --}}

    {{-- <h1>Hello</h1> --}}

    {{-- @if (count($tasks))
        <p>Yes, we have some tasks. How many? <?= count($tasks) ?> tasks, in fact!</p>
    @endif --}}

    @forelse ($tasks as $task)
        <li>{{ $task }}</li>
    @empty
        <p>There are no active tasks</p>
    @endforelse
</x-layout>
