@props(['note'])

<x-card>
    <a href="/notes/{{$note->id}}">
        @if($note->is_done == 0)
        <h1 class="text-xl font-semibold text-center pb-3">{{$note->title}}</h1>
        <h2 class="">Urgency: {{$note->urgency}}</h2>
        <h2 class="">Impact: {{$note->impact}}</h2>
        <h2 class="">Location: {{$note->location}}</h2>
        <h2 class="">Tags: {{$note->tags}}</h2>
        <h2 class="mt-1">Deadline: {{$note->deadline_at}}</h2>
        <h1 class="text-red-500">Not Done</h1>
        @else
        <s>
        <h1 class="text-xl font-semibold text-center pb-3 flex flex-row items-center">{{$note->title}}
            <form action="/notes/{{$note->id}}" method="POST" class="ml-auto">
                @csrf
                @method('DELETE')
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        </h1>
        <h2 class="">Urgency: {{$note->urgency}}</h2>
        <h2 class="">Impact: {{$note->impact}}</h2>
        <h2 class="">Location: {{$note->location}}</h2>
        <h2 class="">Tags: {{$note->tags}}</h2>
        <h2 class="mt-1">Deadline: {{$note->deadline_at}}</h2>
        </s>
        <h1 class="text-green-500">Done</h1>
        @endif
    </a>
</x-card>