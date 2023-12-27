@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-primary bg-opacity-30 mx-24 mb-3 rounded-xl">
        <div class="flex items-center justify-between py-10 mt-7 px-10">
            <h1 class="font-poppins text-5xl font-semibold">Create Cars</h1>
            <a href="/dashboard/posts">
                <button type="submit" class="font-semibold hover:text-white border border-red-600 bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-400 rounded-lg text-md px-14 py-2.5 mt-5 text-center me-2 mb-2 ">
                    < Back 
                </button>
            </a>
        </div>
        <div>
            <form method="post" action="/dashboard/make/{{ $make->id }}" class="mx-28" enctype="multipart/form-data">
                @method('put')
                @csrf
                {{-- make --}}
                <div class="mb-8">
                    <label for="make" class="block form-label text-2xl mb-4 font-bold">Make</label>
                    <input type="text" class="w-1/2 form-control rounded-lg" placeholder="Input Make" id="make_name" name="make_name" required autofocus value="{{ old('make_name', $make->make_name) }}">
                    @error('make')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- end make --}}

                {{-- Button --}}
                <div class="mb-4">
                    <button type="submit" class=" font-semibold text-white bg-green-500 border-2 border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-md px-5 py-2.5 text-center me-2 mb-2">
                        + Create New Make
                    </button>
                </div>
                {{-- End Button --}}
            </form>
        </div>
    </div>
</div>
@endsection
