@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-primary bg-opacity-30 mx-24 mb-3 rounded-xl">
        <div class="flex items-center justify-between py-10 mt-7 px-10">
            <h1 class="text-3xl font-semibold">Create Cars</h1>
            <a href="/dashboard/car">
                <button type="submit" class="font-semibold hover:text-white border border-red-600 bg-red-500 hover:bg-red-500 rounded-lg text-md px-14 py-2.5 mt-5 text-center me-2 mb-2 ">
                    < Back 
                </button>
            </a>
        </div>
        <div class="flex flex-wrap justify-center">
            <form method="post" action="/dashboard/car/{{ $car->id }}" class="mx-28" enctype="multipart/form-data">
              @method('put')
                @csrf
                {{-- make --}}
                <div class="mb-4">
                    <label for="make" class="form-label text-xl">Make</label>
                    <select id="make_id" name="make_id" class="justify-end w-1/2 ml-[93px] rounded-lg bg-gray-50 border border-gray-300 text-gray-600 text-sm">
                        @foreach ( $makes as $make)
                                <option value="" disabled selected hidden>Select Make</option>
                                <option value="{{ $make->id }}">{{ $make->make_name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- end make --}}

                {{-- Model --}}
                <div class="mb-4 ">
                    <label for="title" class="form-label text-xl">Model</label>
                    <input id="model" name="model" type="text" class="w-1/2 form-control ml-[89px] rounded-lg" placeholder="civic"  required autofocus value="{{ old('model', $car->model) }}">
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
                    <input id="year" name="year" type="text" class="w-1/2 form-control  rounded-lg ml-24 first-letter:rounded-l" placeholder="2019" required autofocus value="{{ old('year', $car->year) }}">
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
                    <input id="transmission" name="transmission" type="text" class="w-1/2 form-control ml-5 rounded-lg" placeholder="Automatic" required autofocus value="{{ old('transmission', $car->transmission) }}">
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
                    <input id="fuel" name="fuel" type="text" class="w-1/2 form-control ml-28 rounded-lg" placeholder="Disel.." required autofocus value="{{ old('fuel', $car->fuel) }}">
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
                    <input id="price" name="price" type="text" class="w-1/2 form-control ml-[103px] rounded-lg" placeholder="Rp...."  required autofocus value="{{ old('price', $car->price) }}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End Price --}}

                {{-- image --}}
                <div class="mb-8 mt-4">
                    <label for="image" class="form-label text-xl">Image</label>
                    <input id="image" name="image" type="file" class="w-1/2 form-control ml-[81px] rounded-lg border-2 border-black">
                    <img src="{{ asset('storage/' . $car->image) }}" class="img-preview img-fluid mb-3 col-sm-5 w-28 h-28 mx-auto mt-6">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- end image --}}

                {{-- Button --}}
                <div class="mb-4 bg-amber-500 hover:bg-amber-400 w-1/3 rounded-lg px-2 py-2 text-sm text-center">
                    <button type="submit" class="text-white font-semibold hover:opacity-95 rounded-lg  ">
                        Update New Data
                    </button>
                </div>
                {{-- End Button --}}
            </form>
        </div>
    </div>
</div>
@endsection
