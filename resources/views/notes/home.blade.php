<x-layout>

{{-- @unless(count($notes) ==0) --}}

<div class="grid grid-cols-2 md:grid-cols-3 gap-6 text-left pt-24 text-white font-poppins">
    @foreach ($notes as $note)
        <x-note-card :note="$note" />
    @endforeach
</div>

{{-- @else
<div class="h-screen flex justify-center text-white font-semibold text-4xl items-center">
    <h1>No Notes Found, <a href="/">Create Notes?</a></h1>
</div>
@endunless --}}
</x-layout>