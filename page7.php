<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Checkout</title>
    <link rel="stylesheet" href="css/output.css">
  </head>
  <body class="bg-white">
    <!--- mon enête  -->
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
            <a href="page7.php" class="disable font-bold">Shop </a>
          </li>
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="">About </a>
          </li>
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="page9.php">Contact </a>
          </li>
        </ol>
      </div>
      <div class="flex gap-10 w">
        <img src="asset/Vector (4).png" alt="" class="w-5" />
        <img src="asset/Vector (3).png" alt="" class="w-5" />
        <img src="asset/Vector (2).png" alt="" class="w-5" />
        <img src="asset/Vector (5).png" alt="" class="w-5 mr-10" />
      </div>
    </nav>

    <div
      class="relative flex mx-auto justify-center text-center min-h-auto items-center"
    >
      <div class="w-full h-80">
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
            <li class="items-center">
              <a
                href=""
                class="text-1xl duration-500 hover:text-blue-400 hover:text-2xl"
                >Hom</a
              >
             <span class="font-bold text-xl"> ></span>
            </li>
            <li>
              <a
                href=""
                class="text-1xl duration-500 hover:text-blue-400 hover:text-2xl"
                >Checkout</a
              >
            </li>
          </div>
        </ol>
      </div>
    </div>

<!--- fin de mon enête  -->


<section class="max-w-7xl mx-auto py-16 px-6">
      <div class="grid grid-cols-2 gap-20">
        <div>
          <h2 class="text-3xl font-bold mb-10">Billing details</h2>

          <form class="space-y-6">
            <div class="grid grid-cols-2 gap-5">
              <div>
                <label class="font-medium">First Name</label>
                <input
                  type="text"
                  class="w-full mt-2 border rounded-lg h-12 px-4"
                />
              </div>

              <div>
                <label class="font-medium">Last Name</label>
                <input
                  type="text"
                  class="w-full mt-2 border rounded-lg h-12 px-4"
                />
              </div>
            </div>

            <div>
              <label class="font-medium"> Company name optional </label>

              <input
                type="text"
                class="w-full mt-2 border rounded-lg h-12 px-4"
              />
            </div>

            <div>
              <label class=""> Country / Region </label>

              <select class="w-full mt-3 border rounded-lg h-12 px-4 b">
                <option>1</option>
                <option>1</option>
                <option>1</option>
                <option>1</option>
                <option>1</option>
              </select>
            </div>

            <div>
              <label class="font-medium"> Street address </label>

              <input
                type="text"
                class="w-full mt-2 border rounded-lg h-12 px-4"
              />
            </div>

            <div>
              <label class="font-medium"> Town/City </label>

              <input
                type="text"
                class="w-full mt-2 border rounded-lg h-12 px-4"
              />
            </div>

            <div>
              <label class="font-medium"> Province </label>

              <select class="w-full mt-2 border rounded-lg h-12 px-4">
                <option>1</option>

                <option>1</option>
                <option>1</option>
                <option>1</option>
                <option>1</option>
                <option>1</option>
              </select>
            </div>

            <div>
              <label class=""> ZIP code </label>

              <input
                type="text"
                class="w-full mt-2 border rounded-lg h-12 px-4"
              />
            </div>

            <div>
              <label class=""> Phone </label>

              <input
                type="text"
                class="w-full mt-2 border rounded-lg h-12 px-4"
              />
            </div>

            <div>
              <label class=""> Email address </label>

              <input
                type="email"
                class="w-full mt-2 border rounded-lg h-12 px-4"
              />
            </div>

            <div>
              <input
                type="text"
                placeholder="Additional information"
                class="w-full border rounded-lg h-12 px-4"
              />
            </div>
          </form>
        </div>

        <div>
          <div class="flex justify-between border-b pb-5">
            <div>
              <h3 class="font-semibold text-xl">Product</h3>

              <div class="mt-5 space-y-4">
                <p>Asgaard sofa × 1</p>

                <p>Subtotal</p>

                <p class="font-semibold text-black">Total</p>
              </div>
            </div>

            <div class="text-right">
              <h3 class="font-semibold text-xl">Subtotal</h3>

              <div class="mt-5 space-y-4">
                <p>Rs.250000.00</p>

                <p>Rs.250000.00</p>

                <p class="text-2xl font-bold text-yellow-700">Rs. 250,000.00</p>
              </div>
            </div>
          </div>

          <div class="mt-8 space-y-5">
            <div>
              <label class="flex items-center gap-3">
                <input type="radio" name="type" />

                <span class="font-medium"> Direct Bank Transfer </span>
              </label>

              <p class="text-gray-500 text-sm mt-3 leading-7">
                Make your payment directly into our bank account. Please use
                your Order ID as the payment reference.
              </p>
            </div>

            <div>
              <label class="flex items-center gap-3">
                <input type="radio" name="type" />

                Cash On Delivery
              </label>
            </div>

            <p class="text-sm leading-7 text-gray-600">
              Your personal data will be used to support your experience
              throughout this website.
            </p>

            <button
              class="mt-8 border border-black rounded-xl px-16 py-4"
            >
              Place order
            </button>
          </div>
        </div>
      </div>
</section>


<div>
  <?php 
    include("pied_de_page.php")
  ?>
</div>










  </body>
</html>
