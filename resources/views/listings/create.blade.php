<x-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
            extend: {
                colors: {
                laravel: '#ef3b2d',
                },
            },
            },
        }
    </script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <x-card class="max-w-lg mx-auto">

    <form method="POST" action="/listings" enctype="multipart/form-data">
      @csrf

      <div class="mb-2 mt-4">
        <label for="title" class="inline-block text-lg mb-1 text-neutral-400">Tên Bài Hát</label>
        <input type="text" class="bg-purple-900 rounded-lg border border-gray-200 rounded p-2 w-full" name="title"
          placeholder="Example: Nắng Ấm Xa Dần" value="{{old('title')}}" />

        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-2">
        <label for="tags" class="inline-block text-lg mb-1 text-neutral-400">
          Thể Loại
        </label>
        <input type="text" class="bg-purple-900 rounded-lg border border-gray-200 rounded p-2 w-full" name="tags"
          placeholder="Example: Nhạc Trữ Tình, Nhạc Trẻ" value="{{old('tags')}}" />

        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-2">
        <label for="logo" class="text-neutral-400 inline-block text-lg mb-1 text-neutral-400">
          Poste
        </label>
        <input type="file" class="bg-purple-900 rounded-lg border border-gray-200 rounded p-2 w-full" name="logo" />

        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-2">
        <label for="song" class="text-neutral-400 inline-block text-lg mb-1 text-neutral-400">
          Bài Hát
        </label>
        <input type="file" class="bg-purple-900 rounded-lg border border-gray-200 rounded p-2 w-full" name="song" />

        @error('song')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-1 text-neutral-400">
         Tác giả, Nhạc Sĩ, ...
        </label>
        <textarea class="h-24 bg-purple-900 rounded-lg border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          placeholder="Ca sĩ, nhạc sĩ, ban nhạc, v.v">{{old('description')}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6 text-center">
        <button class="text-xl bg-rose-800 text-white border border-gray-200 rounded py-2 px-10 hover:bg-rose-500">
          Create
        </button>

        <a href="/" class="text-xl ml-2 text-white ml-"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
