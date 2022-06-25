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
  <x-card class="max-w-sm mx-auto cus" >
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-2 mt-4">
        <label for="title" class="inline-block text-xl mb-1 text-neutral-400 ">Tên Bài Hát</label>
        <input type="text" class="bg-purple-900 rounded-lg border border-gray-200 rounded p-2 w-full  text-neutral-400" name="title"
          placeholder="Example: Senior Laravel Developer" value="{{$listing->title}}" />
        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <!-- tags -->
      <div class="mb-2">
        <label for="tags" class="inline-block text-xl mb-1 text-neutral-400">
          Thể Loại
        </label>
        <input type="text" class="bg-purple-900 rounded-lg border border-gray-200 rounded p-2 w-full text-neutral-400" name="tags"
          placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$listing->tags}}" />
        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <!--description  -->
      <div class="mb-2">
        <label for="tags" class="inline-block text-xl mb-1 text-neutral-400">
          Mô Tả
        </label>
        <input type="text" class="bg-purple-900 rounded-lg border border-gray-200 rounded p-2 w-full text-neutral-400" name="description"
          placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$listing->description}}" />
        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <!-- song -->
      <div class="mb-1 text-neutral-400">
        <label for="song" class="inline-block text-xl mb-1 text-neutral-400">
        Bài Hát
        </label>
        <input type="file" class="bg-purple-900 rounded-lg border border-gray-200 rounded p-2 w-full" name="song" />
        @error('song')
        <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
        @enderror
      </div>
      <!-- logo -->
      <div class="mb-6 text-neutral-400">
        <label for="logo" class="inline-block text-xl mb-1 text-neutral-400">
        POSTER
        </label>
        <input type="file" class="bg-purple-900 rounded-lg border border-gray-200 rounded p-2 w-full" name="logo" />
        <img class="w-48 border border-gray-200 rounded" style="display: block; margin: 10px auto;"
          src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />

        @error('logo')
        <p class="text-red-500 text-xs mt-1 ">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="text-xl bg-rose-700 text-white border border-gray-200 rounded py-2 px-6 hover:bg-black">
          Update
        </button>

        <a href="/" class="text-xl  text-white ml-4"> Back </a>
      </div>
    </form>
    <style>
      .main__bottom{
        display: none;
      }

    </style>
  </x-card>
</x-layout>
