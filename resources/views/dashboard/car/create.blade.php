@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-primary bg-opacity-30 mx-24 mb-3 rounded-xl">
        <div class="flex items-center justify-between py-10 mt-7 px-10">
            <h1 class="text-3xl font-semibold">Create Cars</h1>
            <a href="/dashboard/car">
                <button type="submit" class="font-semibold hover:text-white border bg-red-600  border-red-600 hover:bg-red-500 rounded-lg text-md px-14 py-2.5 mt-5 text-center me-2 mb-2 ">
                    < Back 
                </button>
            </a>
        </div>
        <div class="flex flex-wrap justify-center">
            <form method="post" action="/dashboard/car" class="mx-28" enctype="multipart/form-data">
                @csrf
                {{-- make --}}
                <div class="mb-4">
                    <label for="make" class="form-label text-xl">Make</label>
                    <select id="make_id" name="make_id" class="justify-end w-1/2 ml-[93px] rounded-lg bg-gray-50 border border-gray-300 text-gray-600 text-sm ">
                        @foreach ( $makes as $make)
                                <option disabled selected hidden>Select make</option>
                                <option value="{{ $make->id }}">{{ $make->make_name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- end make --}}

                {{-- Model --}}
                <div class="mb-4 ">
                    <label for="title" class="form-label text-xl">Model</label>
                    <input id="model" name="model" type="text" class="w-1/2 form-control ml-[89px] rounded-lg" placeholder="Input model"  required autofocus value="{{ old('model') }}">
                    @error('model')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End Model  --}}

                {{-- Year --}}
                <div class="mb-4">
                    <label for="year" class="form-label text-xl">Years</label>
                    <input id="year" name="year" type="text" class="w-1/2 form-control  rounded-lg ml-24 first-letter:rounded-l" placeholder="Input year" required autofocus value="{{ old('year') }}">
                    @error('year')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End Year --}}

                {{-- Transmission --}}
                <div class="mb-3">
                    <label for="transmission" class="form-label text-xl">Transmission</label>
                    <input id="transmission" name="transmission" type="text" class="w-1/2 form-control ml-5 rounded-lg" placeholder="Input transmission" required autofocus value="{{ old('year') }}">
                    @error('transmission')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End Transmission --}}

                {{-- Fuel --}}
                <div class="mb-4 ">
                    <label for="fuel" class="form-label text-xl">Fuel</label>
                    <input id="fuel" name="fuel" type="text" class="w-1/2 form-control ml-28 rounded-lg" placeholder="Input fuel" required autofocus value="{{ old('fuel') }}">
                    @error('fuel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End Fuel --}}

                {{-- Price --}}
                <div class="mb-4 ">
                    <label for="price" class="form-label text-xl">Price</label>
                    <input id="price" name="price" type="text" class="w-1/2 form-control ml-[103px] rounded-lg" placeholder="Input price"  required autofocus value="{{ old('price') }}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End Price --}}

                {{-- image --}}
                <div class="mb-4 ">
                    <label for="image" class="form-label text-xl">Image</label>
                    <input id="image" name="image" type="file" class="w-1/2 form-control ml-[81px] rounded-lg border-2 border-black">
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- end image --}}

                {{-- Button --}}
                <div class="mb-4">
                    <button type="submit" class=" font-semibold text-white hover:bg-green-800 bg-green-600 rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">
                        + Create New Data
                    </button>
                </div>
                {{-- End Button --}}
            </form>
        </div>
    </div>
</div>
@endsection