<x-app-layout>

  <div style="margin-top: 150px">
    <aside class="mt-4 fixed h-screen container mx-auto pl-10" style="width: 300px">
      <form action="" method="get" class="flex flex-col bg-white p-4 w-full">
        <input
          type="search"
          name="q"
          placeholder="Recherche..."
          class="outline-none p-2 border-2 border-solid border-gray-300"
        />

        <div class="my-4">
          <h3 class="font-semibold text-2xl text-red-500 mb-2">Tags</h3>
          <div class="flex items-center">
            <input type="checkbox" name="tags[]" id="" />
            <label for="" class="px-2 block">Php</label>
          </div>
          <div class="flex items-center">
            <input type="checkbox" name="tags[]" id="" />
            <label for="" class="px-2 block">JavaScript</label>
          </div>
          <div class="flex items-center">
            <input type="checkbox" name="tags[]" id="" />
            <label for="" class="px-2 block">Python</label>
          </div>
          <div class="flex items-center">
            <input type="checkbox" name="tags[]" id="" />
            <label for="" class="px-2 block">Flutter</label>
          </div>
          <div class="flex items-center">
            <input type="checkbox" name="tags[]" id="" />
            <label for="" class="px-2 block">MySql</label>
          </div>
        </div>

        <button type="submit" class="bg-red-500 text-white p-2">
          Filtrer
        </button>
      </form>
    </aside>

    <main class="container mx-auto px-10 absolute" style="width: calc(100% - 300px); left: 300px">
      <div class="grid grid-cols-2 gap-2 py-4">
        <!-- cards  -->
        @foreach ($posts as $post)
          <div class="bg-white">
            <img src="./img/1.jpg" alt="" />
  
            <div class="flex flex-col mt-2 p-4">
              <!-- tags  -->
              <div class="flex items-center gap-2 font-semibold">
                <a href="" class="text-red-500">PHP</a>
                <a href="" class="text-red-500">JAVASCRIPT</a>
                <a href="" class="text-red-500">PHP</a>
              </div>
              <div class="flex items-center justify-between mt-2">
                <small class="text-red-500">Le {{ $post->created_at->format("d/m/Y") }}</small>
                <h3 class="bg-red-500 rounded px-2 py-1 text-white">
                  <a href="">{{ $post->user->name }}</a>
                </h3>
              </div>
              <h3 class="font-bold my-2">{{ $post->name }}</h3>
              <p>{{ $post->content }}</p>
            </div>
  
            <h4 class="font-semibold text-red-500 px-4 pb-4">
              <a href="{{ route("blog.show",$post->slug) }}">Lire plus</a>
            </h4>
          </div>
          @endforeach
      </div>

      <div class="my-4">
        {{-- {{ $posts->links() }} --}}
      </div>

    </main>
  </div>
</x-app-layout>
