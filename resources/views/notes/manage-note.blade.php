<x-layout>
    
    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 text-left pt-24 text-white font-poppins">
        @foreach ($notes as $note)
            <div>
            <x-note-card :note="$note" />
            <x-card>
            <div class="mt-4 flex flex-row">
                <a href="/notes/{{$note->id}}/edit" class="flex flex-row items-center text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                    </svg>
                    Edit
                </a>

                <form action="/notes/{{$note->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button href="/" class="flex flex-row items-center text-red-500 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                        Delete
                    </button>
                </form>
            </div>
            </div>
            </x-card>
        @endforeach
    </div>
    

    </x-layout>