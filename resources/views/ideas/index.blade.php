<x-layout>
    @if ($ideas->count())
        <div class="mt-6">
            <h2 class="font-bold">Your Ideas</h2>

            <ul class="mt-6">
                {{-- This is an object from collection --}}
                @forelse ($ideas as $idea)
                    <li>
                        <a href="/ideas/{{ $idea->id }}" class="text-sm">{{ $idea->description }}</a>
                    </li>
                @empty
                    <p>No ideas</p>
                @endforelse
            </ul>
        </div>
    @else
        <p>No ideas yet. <a href="ideas/create" class="underline">Create a new one</a></p>
    @endif

</x-layout>
