<x-layout>
    <div class="pt-48">
        <form 
        action="/users"
        method="POST"
        class="bg-grey border-4 rounded-xl  border-black w-[400px] h-[400px]text-black flex flex-col mx-auto font-poppins p-6 mb-24 text-white">
        @csrf    
        <h1 class="text-4xl font-bold text-center flex justify-center pb-8">Register</h1>
            <div class="flex flex-col mx-auto">
                <label for="name" class="text-lg font-semibold">Full Name</label>
                <input type="text" name="name" class="border-2 border-black rounded-lg px-2 py-2 w-72 mx-auto text-black outline-none" value="{{old('name')}}">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col mx-auto mt-4">
                <label for="email" class="text-lg font-semibold">Email</label>
                <input type="text" name="email" class="border-2 border-black rounded-lg px-2 py-2 w-72 mx-auto text-black outline-none" value="{{old('email')}}">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col mx-auto mt-4">
                <label for="password" class="text-lg font-semibold">Password</label>
                <input type="password" name="password" class="border-2 border-black rounded-lg px-2 py-2 w-72 mx-auto text-black outline-none" value="{{old('password')}}">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col mx-auto mt-4">
                <label for="password_confirmation" class="text-lg font-semibold">Password Confirmation</label>
                <input type="password" name="password_confirmation" class="border-2 border-black rounded-lg px-2 py-2 w-72 mx-auto text-black outline-none" value="{{old('password_confirmation')}}">
                @error('password_confirmation')
                <p class="text- xs mt-1">{{$message}}</p>
                @enderror
            </div>
                
            <button class="bg-black px-4 py-2 rounded-3xl mt-7 w-32 inline text-xl font-semibold mx-auto" type="submit">Sign Up</button>
        </form>
    </div>
</x-layout>