<x-app-layout>
    <main class="container mx-auto px-10">
        <div class="grid grid-cols-3 gap-2 py-4">
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
    </main>
</x-app-layout>
