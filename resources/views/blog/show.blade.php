<x-app-layout>
    <main class="container mx-auto px-40 pt-8">
        <section class="mt-4">
          <div class="flex items-center justify-between my-2">
            <small class="text-red-500">Le {{ $post->created_at->format("d/m/Y") }}</small>
            <h3 class="bg-red-500 rounded px-2 py-1 text-white">
              <a href="">{{ $post->user->name }}</a>
            </h3>
          </div>
          <h1 class="font-bold text-red-500 text-3xl">{{ $post->name }}</h1>
          <!-- tags  -->
          <div class="flex items-center gap-2 font-semibold">
            <a href="" class="text-red-500">PHP</a>
            <a href="" class="text-red-500">JAVASCRIPT</a>
            <a href="" class="text-red-500">PHP</a>
          </div>
          <p class="text-gray-800 my-4">{{ $post->content }}</p>
        </section>
      </main>
</x-app-layout>       