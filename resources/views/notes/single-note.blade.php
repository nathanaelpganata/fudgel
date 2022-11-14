<x-layout>
    <div class="pt-24">
        <x-card class="text-white font-poppins">
            <h1 class="text-xl font-semibold text-center pb-3">{{$note->title}}</h1>
            <h2 class="">Urgency: {{$note->urgency}}</h2>
            <h2 class="">Impact: {{$note->impact}}</h2>
            <h2 class="">Location: {{$note->location}}</h2>
            <h2 class="">Tags: {{$note->tags}}</h2>
            <h2 class="mt-2 text-justify">{{$note->description}}</h2>
            <h2 class="mt-1">Deadline: {{$note->deadline_at}}</h2>
            @if($note->is_done == 1)
            <h1 class="text-green-500">Done</h1>
            @else
            <h1 class="text-red-500">Not Done</h1>
            @endif

        </x-card>
    </div>

</x-layout>