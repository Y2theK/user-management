<x-app-layout>
  
   

<body class="bg-white">
  
    
  <!-- Title -->
  <div class="bg-white">
    <div class="flex justify-center items-center h-60">
        <img src="https://images.unsplash.com/photo-1423592707957-3b212afa6733?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class=""/>
    </div>
  </div>
  
  <!-- Tab Menu -->
  <div class="flex flex-wrap items-center justify-between overflow-x-auto overflow-y-hidden py-10 px-10 sticky top-0 z-50 bg-white text-gray-800">

      <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg rtl:flex-row-reverse  ">
          <button class="px-5 py-2 text-xs font-medium transition-colors duration-200 bg-gray-100 sm:text-sm  ">
              View all
          </button>

          <button class="px-5 py-2 text-xs font-medium transition-colors duration-200 sm:text-sm ">
              Best Selling
          </button>

          <button class="px-5 py-2 text-xs font-medium transition-colors duration-200 sm:text-sm  ">
              Newest
          </button>
      </div>
      <div>
        <h1 class="text-center text-2xl font-bold text-gray-800 my-4 mx-auto">All Books</h1>
      </div>

      <div class="relative flex items-center mt-4 md:mt-0">
          <span class="absolute">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
              </svg>
          </span>

          <input type="text" placeholder="Search" class="block w-full py-1.5 pr-5  bg-white border border-gray-200 rounded-lg md:w-80  pl-11 rtl:pr-11 rtl:pl-5 focus:outline-none focus:border-0">
      </div>
  </div>
  
  <!-- Product List -->
  <section class="py-10 bg-gray-100">
    <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">

      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class=" mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <a class="font-semibold" href="{{ route('products.show',1) }}">
                Add to cart
            </a>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=1798&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class=" mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?q=80&w=1824&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class=" mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src=" https://images.unsplash.com/photo-1621351183012-e2f9972dd9bf?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class="mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src="https://images.unsplash.com/photo-1621827979802-6d778e161b28?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class="mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class=" mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=1798&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class=" mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?q=80&w=1824&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class="mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src=" https://images.unsplash.com/photo-1621351183012-e2f9972dd9bf?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class="mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src="https://images.unsplash.com/photo-1621827979802-6d778e161b28?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class="mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class="mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=1798&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class="mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?q=80&w=1824&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class=" mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src=" https://images.unsplash.com/photo-1621351183012-e2f9972dd9bf?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class=" mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
      <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
        <div class="flex justify-center items-center" >
          <img src="https://images.unsplash.com/photo-1621827979802-6d778e161b28?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
        </div>
        <div class="p-3">
          <div class="mt-3 font-bold">
            <p>
              How Innovation Works
            </p> 
            <p class="mt-2 font-medium">
              $115.00
            </p>
          </div>
          <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
            <button class="font-semibold text-white">
                Add to cart
            </button>
          </div>
        </div>
      </article>
     
  </section>
  
 
  </body>
</x-app-layout>