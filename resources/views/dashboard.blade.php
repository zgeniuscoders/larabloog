<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class="container mx-auto px-10">
        <div class="grid grid-cols-3 gap-2 py-4">
          <!-- cards  -->
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
                <small class="text-red-500">Le 12/03/2022</small>
                <h3 class="bg-red-500 rounded px-2 py-1 text-white">
                  <a href="">zgenius</a>
                </h3>
              </div>
              <h3 class="font-bold my-2">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Suscipit, architecto.
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Recusandae veniam iusto beatae earum a, officia qui eligendi in
                consectetur asperiores tempore nulla quod rerum...
              </p>
            </div>
  
            <h4 class="font-semibold text-red-500 px-4 pb-4">
              <a href="">Lire plus</a>
            </h4>
          </div>
          <div class="bg-white">
            <img src="./img/2.jpg" alt="" />
  
            <div class="flex flex-col mt-2 p-4">
              <div class="flex items-center gap-2 font-semibold">
                <a href="" class="text-red-500">PHP</a>
                <a href="" class="text-red-500">JAVASCRIPT</a>
                <a href="" class="text-red-500">PHP</a>
              </div>
              <div class="flex items-center justify-between mt-2">
                <small class="text-red-500">Le 12/03/2022</small>
                <h3 class="bg-red-500 rounded px-2 py-1 text-white">
                  <a href="">zgenius</a>
                </h3>
              </div>
              <h3 class="font-bold my-2">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Suscipit, architecto.
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Recusandae veniam iusto beatae earum a, officia qui eligendi in
                consectetur asperiores tempore nulla quod rerum...
              </p>
            </div>
  
            <h4 class="font-semibold text-red-500 px-4 pb-4">
              <a href="">Lire plus</a>
            </h4>
          </div>
          <div class="bg-white">
            <img src="./img/3.png" alt="" />
  
            <div class="flex flex-col mt-2 p-4">
              <div class="flex items-center gap-2 font-semibold">
                <a href="" class="text-red-500">PHP</a>
                <a href="" class="text-red-500">JAVASCRIPT</a>
                <a href="" class="text-red-500">PHP</a>
              </div>
              <div class="flex items-center justify-between mt-2">
                <small class="text-red-500">Le 12/03/2022</small>
                <h3 class="bg-red-500 rounded px-2 py-1 text-white">
                  <a href="">zgenius</a>
                </h3>
              </div>
              <h3 class="font-bold my-2">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Suscipit, architecto.
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Recusandae veniam iusto beatae earum a, officia qui eligendi in
                consectetur asperiores tempore nulla quod rerum...
              </p>
            </div>
  
            <h4 class="font-semibold text-red-500 px-4 pb-4">
              <a href="">Lire plus</a>
            </h4>
          </div>
          <div class="bg-white">
            <img src="./img/4.jpg" alt="" />
  
            <div class="flex flex-col mt-2 p-4">
              <div class="flex items-center gap-2 font-semibold">
                <a href="" class="text-red-500">PHP</a>
                <a href="" class="text-red-500">JAVASCRIPT</a>
                <a href="" class="text-red-500">PHP</a>
              </div>
              <div class="flex items-center justify-between mt-2">
                <small class="text-red-500">Le 12/03/2022</small>
                <h3 class="bg-red-500 rounded px-2 py-1 text-white">
                  <a href="">zgenius coders</a>
                </h3>
              </div>
              <h3 class="font-bold my-2">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Suscipit, architecto.
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Recusandae veniam iusto beatae earum a, officia qui eligendi in
                consectetur asperiores tempore nulla quod rerum...
              </p>
            </div>
  
            <h4 class="font-semibold text-red-500 px-4 pb-4">
              <a href="">Lire plus</a>
            </h4>
          </div>
        </div>
      </main>
</x-app-layout>
