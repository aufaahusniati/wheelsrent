@extends('dashboard.layouts.main')

@section('container')
<div class="flex items-center justify-between py-10 mt-7 px-10">
    <h1 class="font-poppins text-5xl font-semibold">Edit Car</h1>

    <a href="/dashboard/posts" >
      <button type="submit" class="font-semibold hover:text-white border border-primary hover:bg-red-400 focus:ring-4 focus:outline-none
      focus:ring-red-400 rounded-lg text-md px-14 py-2.5 mt-5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white
      dark:hover:bg-blue-500 dark:focus:ring-blue-800"> < Back</button>
    </a>
  </div>
</div>

<div class="flex flex-wrap items-center mt-5">
    <form method="post" action="/dashboard/posts" class="pl-72 mx-28" enctype="multipart/form-data">
        @csrf
        {{-- tipe --}}
        <div class="mb-4 ">
          <label for="title" class="form-label text-2xl">Make </label>
          <input type="text" class="form-control ml-[93px] rounded-lg shadow-lg shadow-gray-700 
          @error('title') is-invalid @enderror" 
          id="title" name="title" required autofocus value="">
          @error('title')
                <div class="invalid-feedback">
                  {{ $message}}
                </div>
            @enderror
        </div>
        {{-- end tipe --}}

        {{-- jenis mobil --}}
        <div class="mb-4 ">
          <label for="title" class="form-label text-2xl">Model</label>
          <input type="text" class="form-control ml-[89px] rounded-lg shadow-lg shadow-gray-700 
          @error('title') is-invalid @enderror" 
          id="title" name="title" required autofocus value="">
          @error('title')
                <div class="invalid-feedback">
                  {{ $message}}
                </div>
            @enderror
        </div>
        {{--End Jenis Mobil  --}}

        {{-- Tahun --}}
        <div class="mb-4">
          <label for="title" class="form-label text-2xl">Years</label>
          <input type="text" class="form-control  rounded-lg ml-24 first-letter:rounded-lg shadow-lg shadow-gray-700 
          @error('title') is-invalid @enderror" 
          id="title" name="title" required autofocus value="">
          @error('title')
                <div class="invalid-feedback">
                  {{ $message}}
                </div>
            @enderror
        </div>
        {{--End Tahun --}}

        {{-- Transmision --}}
        <div class="mb-3">
            <label for="title" class="form-label text-2xl">Tansmission</label>
            <select class="form-select rounded-lg shadow-lg shadow-gray-700 ml-4" name="category_id">
                {{-- @foreach ($categories as $category)
                @if (old('category_id') == $category->id)     
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>                     
                @endif
                @endforeach --}}
            </select>
        </div>
          {{-- End Transmission --}}

          {{-- Bahan Bakar --}}
          <div class="mb-4 ">
            <label for="title" class="form-label text-2xl">Flue</label>
            <input type="text" class="form-control ml-28 rounded-lg shadow-lg shadow-gray-700 
            @error('title') is-invalid @enderror" 
            id="title" name="title" required autofocus value="">
            @error('title')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
              @enderror
          </div>
          {{-- End Bahan Bakar --}}

          {{-- Hrga --}}
          <div class="mb-4 ">
            <label for="title" class="form-label text-2xl">Price</label>
            <input type="text" class="form-control ml-[103px] rounded-lg shadow-lg shadow-gray-700 
            @error('title') is-invalid @enderror" 
            id="title" name="title" required autofocus value="">
            @error('title')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
              @enderror
          </div>
          {{-- End Harga --}}

          {{-- Button --}}
          <div class="">
            <a href="/dashboard/posts/create">
              <button type="submit" class="font-semibold hover:text-white border border-primary hover:bg-primary focus:ring-4 focus:outline-none
              focus:ring-blue-300 rounded-lg text-md px-14 py-2.5 mt-5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white
              dark:hover:bg-blue-500 dark:focus:ring-blue-800">Update</button>
            </a>

            

          {{-- End Button --}}
    </form>
    
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