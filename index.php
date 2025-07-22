<?php wp_head(); ?>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded shadow-md max-w-sm w-full text-center">
    <h1 class="text-6xl font-bold mb-4 text-blue-600">Hello Tailwind!</h1>
    <p class="text-gray-700 mb-6">
      Ovo je testni paragraf s Tailwind CSS stilovima.
    </p>
    <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
      Klikni me
    </button>
  </div>


  <div x-data="{ message: 'Pozdrav iz Alpine.js-a!', show: false }" class="p-4 bg-blue-100 border border-blue-400 text-blue-700 rounded-md max-w-sm mx-auto my-8">
    <h2 class="text-xl font-bold mb-2">Alpine.js Test</h2>

    <p x-text="message" class="mb-4"></p>

    <button @click="show = !show" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full shadow-lg transition duration-300 ease-in-out">
        <span x-text="show ? 'Sakrij poruku' : 'Prikaži poruku'"></span>
    </button>

    <div x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="mt-4 p-3 bg-blue-200 rounded-md">
        <p>Ova poruka se prikazuje/skriva pomoću Alpine.js-a!</p>
    </div>
</div>
</body>




<?php wp_footer(); ?>
