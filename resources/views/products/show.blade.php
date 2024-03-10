<x-app-layout>
  <style>
    @layer utilities {
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  }
  </style>

  <div class="bg-white">
    <div class="flex justify-start items-center p-5 flex-col md:flex-row">
        <img src="https://images.unsplash.com/photo-1621827979802-6d778e161b28?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="" width="300px" height="400px"/>

        <div class="flex  border-gray-100 flex-col p-10">
          <div>
            <h1 class="mb-8 font-bold text-3xl">
              The subtle art of not giving a fuck
            </h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet reprehenderit in pariatur iure possimus cumque neque voluptate aspernatur eos fugit, excepturi qui a doloremque culpa quasi non? Nemo, fugiat velit.
            </p>
          </div>
          <div class="mt-8">
            <div class="mb-4 text-xl">
              300.2 $
            </div>
            <div>
              <span class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50"> - </span>
              <input class="h-8 w-8 border bg-white text-center text-xs outline-none" type="number" value="2" min="1" />
              <span class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50"> + </span>
            </div>
            
          </div>
          
          {{-- <div class=""> --}}
            <a class="text-center font-semibold bg-gray-800 p-2 mt-5 rounded-md text-white " href="{{ route('products.show',1) }}">
                Add to cart
            </a>
          {{-- </div> --}}

        </div>
    </div>
  </div>

 <!-- Related Product List -->
 <section class="py-10 bg-gray-100">
  <h1 class="font-semibold px-3 text-center py-4 text-2xl">
    Related Products
  </h1>
  <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
   

    <article class="bg-white-400 rounded-xl shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300">
      <div class="flex justify-center items-center" >
        <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel Photo" class="rounded-md w-full h-60"/>
      </div>
      <div class="p-3">
        <div class=" mt-3 font-bold">
          <p>
            How Innovation Works
          </p> 
          <p class="mt-2">
            $115.00
          </p>
        </div>
        <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
          <button class="font-semibold text-white">
              Add to Cart
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
          <p class="mt-2">
            $115.00
          </p>
        </div>
        <div class="text-center bg-gray-800 p-2 mt-5 rounded-md">
          <button class="font-semibold text-white">
              Add to Cart
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
          <p class="mt-2">
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
          <p class="mt-2">
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
   
</x-app-layout>  