<x-layout>
    <div class="pt-20">
        <form 
        action="/notes"
        method="POST"
        class="bg-grey border-4 rounded-xl  border-black w-[400px] h-[400px]text-black flex flex-col mx-auto font-poppins p-6 mb-24 text-white">
        @csrf
        <h1 class="text-4xl font-bold text-center flex justify-center pb-8">Create Notes</h1>
            <div class="flex flex-col mx-auto mt-4">
                <label for="title" class="text-lg font-semibold">Title</label>
                <input type="text" name="title" class="border-2 border-black rounded-lg px-2 py-2 w-72 mx-auto outline-none text-black" value="{{old('title')}}">
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col mx-auto mt-4">
                <label for="urgency" class="text-lg font-semibold">Urgency</label>
                <input type="urgency" name="urgency" class="border-2 border-black rounded-lg px-2 py-2 w-72 mx-auto outline-none text-black" value="{{old('urgency')}}">
                @error('urgency')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col mx-auto mt-4">
                <label for="impact" class="text-lg font-semibold">Impact</label>
                <input type="text" name="impact" class="border-2 border-black rounded-lg px-2 py-2 w-72 mx-auto outline-none text-black" value="{{old('impact')}}">
                @error('impact')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col mx-auto mt-4">
                <label for="location" class="text-lg font-semibold">Location</label>
                <input type="location" name="location" class="border-2 border-black rounded-lg px-2 py-2 w-72 mx-auto outline-none text-black" value="{{old('location')}}">
                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col mx-auto mt-4">
                <label for="description" class="text-lg font-semibold">Description</label>
                <input type="text" name="description" class="border-2 border-black rounded-lg px-2 py-2 w-72 mx-auto outline-none text-black" value="{{old('description')}}">
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col mx-auto mt-4">
                <label for="tags" class="text-lg font-semibold">Tags</label>
                <input type="tags" name="tags" class="border-2 border-black rounded-lg px-2 py-2 w-72 mx-auto outline-none text-black" value="{{old('tags')}}">
                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            {{-- <div class="flex flex-col mx-auto mt-4">
                <label for="is_done" class="text-lg font-semibold">Is Done?</label> --}}
                <input type="is_done" name="is_done" class="border-2 border-black rounded-lg px-2 py-2 w-72 mx-auto outline-none text-black hidden" value="0" value="{{old('is_done')}}">
                {{-- @error('is_done')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div> --}}
            <div class="flex flex-col mx-auto mt-4">
                <label for="deadline_at" class="text-lg font-semibold">Deadline At</label>
                <input type="date" name="deadline_at" class="border-2 border-black rounded-lg px-2 py-2 w-72 mx-auto outline-none text-black" value="{{old('deadline_at')}}">
                @error('deadline_at')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <button class="bg-black px-4 py-2 rounded-3xl mt-7 w-32 inline text-xl font-semibold mx-auto" type="submit">Create</button>
        </form>
    </div>
</x-layout>