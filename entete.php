  <nav class="bg-white items-center flex gap-3.5 mb-4 mt-4 justify-between">
      <div class="flex items-center">
        <img src="asset/logo.png" alt="mon LOGO" class="w-10 ml-10" />
        <h1 class="font-bold text-3xl">Funiro</h1>
      </div>

      <div>
        <ol class="flex gap-10">
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="index.php">Home </a>
          </li>
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="page9.php">Shop </a>
          </li>
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="">About </a>
          </li>
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="page7.php" class="disable font-bold">Contact</a>
          </li>
        </ol>
      </div>
      <div class="flex gap-10 items-center">
        <img src="asset/Vector (4).png" alt="" class="w-6" />

        <div class="flex gap-1.5 relative w-45 items-center justify-end">
            <form action="page_de_recherche.php" method="GET" class=" text-center  flex justify-end">
                <input type="text" class="bg-gray-300 required w-full h-10 p-1 rounded-xl  pr-10" name="search" >
                <div class="absolute mt-3">
                    <button type="submit" class=" hover: cursor-pointer"><img src="asset/Vector (3).png" alt="" class="w-5 z-10   mr-3 " /> </button>
                </div>
                
            </form>
        </div>
        
        <img src="asset/Vector (2).png" alt="" class="w-5" />
        <img src="asset/Vector (5).png" alt="" class="w-5 mr-10" />
      </div>
    </nav>

    <div
      class="relative flex mx-auto justify-center text-center min-h-auto items-center"
    >
      <div class="w-full h-72 m-2">
        <img src="asset/baniere.png" alt="" />
      </div>

      <div class="absolute justify-center text-center">
        <img src="asset/logo.png" alt="" class="w-14 mx-auto" />
        <ol>
          <div>
            <li>
              <h1 class="text-5xl text-black font-bold">Checkout <br /></h1>
            </li>
          </div>

          <div class="flex mt-3 justify-center items-center">
            <li class="flex" >
              <a
                href=""
                class="text-1xl duration-500  hover:text-blue-400 hover:text-2xl"
                >Hom </a
              >
             <img src="asset/dashicons_arrow-down-alt2.png" alt="" class="w-4 mt-1" > 
            </li>
            <li>
              <a
                href=""
                class="text-1xl duration-500 hover:text-blue-400 hover:text-2xl"
                >Contact</a
              >
            </li>
          </div>
        </ol>
      </div>
    </div>
