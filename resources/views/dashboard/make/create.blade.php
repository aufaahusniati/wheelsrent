@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-primary bg-opacity-30 mx-24 mb-3 rounded-xl">
        <div class="flex items-center justify-between py-10 mt-7 px-10">
            <h1 class="font-poppins text-5xl font-semibold">Create Car</h1>

            <a href="/dashboard/make">
                <button type="submit" class="font-semibold hover:text-white border border-red-600 bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-400 rounded-lg text-md px-14 py-2.5 mt-5 text-center me-2 mb-2 ">
                    < Back 
                </button>
            </a>
        </div>

        <div class="flex flex-wrap items-center">
            <form method="post" action="{{ route('posts.store') }}" class="pl-72 mx-28" enctype="multipart/form-data">
                @csrf
                {{-- tipe --}}
                <div class="mb-4 ">
                    <label for="title" class="form-label text-2xl">Make </label>
                    <input type="text" class="form-control ml-[93px] rounded-lg" placeholder="Honda" id="title"
                        name="title" required autofocus value="">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- end tipe --}}

                {{-- jenis mobil --}}
                <div class="mb-4 ">
                    <label for="title" class="form-label text-2xl">Model</label>
                    <input type="text" class="form-control ml-[89px] rounded-lg" placeholder="civic" id="title"
                        name="title" required autofocus value="">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End Jenis Mobil  --}}

                {{-- Tahun --}}
                <div class="mb-4">
                    <label for="title" class="form-label text-2xl">Years</label>
                    <input type="text" class="form-control  rounded-lg ml-24 first-letter:rounded-l" placeholder="2019"
                        id="title" name="title" required autofocus value="">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End Tahun --}}

                {{-- Transmision --}}
                <div class="mb-3">
                    <label for="trany" class="form-label text-2xl">Transmission</label>
                    <input type="text" class="form-control rounded-lg ml-4" placeholder="Automatic" id="trany"
                        name="trany" required autofocus value="">
                    @error('trany')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End Transmission --}}

                {{-- Bahan Bakar --}}
                <div class="mb-4 ">
                    <label for="title" class="form-label text-2xl">Fuel</label>
                    <input type="text" class="form-control ml-28 rounded-lg" placeholder="Disel.." id="title"
                        name="title" required autofocus value="">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End Bahan Bakar --}}

                {{-- Hrga --}}
                <div class="mb-4 ">
                    <label for="title" class="form-label text-2xl">Price</label>
                    <input type="text" class="form-control ml-[103px] rounded-lg" placeholder="Rp. ..." id="title"
                        name="title" required autofocus value="">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End Harga --}}

                {{-- image --}}
                <div class="mb-4 ">
                    <label for="image" class="form-label text-2xl">Image</label>
                    <input type="file" class="form-control ml-[81px] rounded-lg border-2 border-black" id="image"
                        name="image" onchange="previewImage()">
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                </div>
                {{-- end image --}}

                {{-- Button --}}
                <div class="mb-4">
                    <a href="/dashboard/posts/create">
                        <button type="submit"
                            class=" font-semibold text-white bg-green-500 border-2 border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-md px-5 py-2.5 text-center me-2 mb-2 ">+
                            Create New Data
                        </button>
                    </a>
                </div>
                {{-- End Button --}}
            </form>
        </div>






    </div>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
