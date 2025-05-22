<!--header-->
<div>
    <ul class=" py-4 px-12 flex justify-between items-center ">
        <li>
            <a class="cursor-pointer" href="{{ route('home') }}">
                <h4>AcqaNest</h4>
            </a>
        </li>

        <li x-data="searchBox()" class="w-[400px] border border-[var(--color-primary)] rounded-md relative">
            <div class="flex justify-between">
                <div>
                    <input type="search" placeholder="Search here..." x-model="query" @input="filterResults"
                        @focus="open = true" @click.away="open = false" @keydown.enter.prevent="handleEnter"
                        class="outline-none p-3 w-[350px]" />

                </div>
                <div class="bg-primary flex justify-center items-center p-3 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#ffffff" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>

                </div>
            </div>

            <!-- Dropdown suggestions -->
            <ul x-show="open && filtered.length > 0"
                class="absolute z-10 mt-1 bg-white shadow-md rounded-md w-full max-h-60 overflow-y-auto">
                <template x-for="item in filtered" :key="item.name">

                    <li @click="selectItem(item)" class="p-2 hover:bg-gray-100 cursor-pointer" x-text="item.name"></li>
                </template>
            </ul>

            <!-- Not found message -->
            <p x-show="open && query && filtered.length === 0"
                class="text-red-500 p-2 absolute bg-white w-full rounded shadow">Not found</p>
        </li>


        <li class="flex gap-3 items-center ">
                <label for="my-drawer-4"
                class="rounded-full p-2 flex items-center justify-center bg-[var(--color-accent)] relative cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="#ffffff" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>

            </label>
            <!-- Trigger Button -->
                <div class="rounded-full p-2 flex items-center justify-center bg-accent "
                    onclick="login_modal.showModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#ffffff" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </div>
             
           
        </li>
    </ul>

    <ul class="border-t border-gray-200 py-2 flex gap-6 px-12 items-center">
        <li>
            <div class="dropdown">
                <div class="mbtn flex gap-1 items-center" tabindex="0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#ffffff" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <div class="text-white capitalize">shop by category</div>
                </div>
                <ul class="dropdown-content menu bg-base-100 rounded-box w-52 p-2 shadow-md mt-2 z-50">
                    <template x-for="cat in $store.app.categories" :key="cat.id">
                        <li>
                            <a href="/allproduct.html"
                                @click.prevent="
                            $store.app.selectCategory(cat.id); 
                            window.location.href = '/allproduct.html';
                        "
                                x-text="cat.name" class="capitalize"></a>
                        </li>
                    </template>
                </ul>
            </div>
        </li>
        <li>
            <a href="{{ route('home') }}">
                <h5>Home</h5>
            </a>
        </li>
        <li>
            <h5><a href="{{ route('products') }}">all products</a></h5>
        </li>

        <li>
            <a href="{{ route('contacts') }}">
                <h5>contact</h5>
            </a>
        </li>


    </ul>
</div>

<!--header end-->


<!--components started from here -->

<!--card modal -->
<div class="drawer drawer-end">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-side z-100">
        <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
        <div class="bg-white w-[30%] p-5 h-screen">
            <div class="flex justify-between items-center">
                <div class="flex gap-2 items-center">
                    <label for="my-drawer-4" class="cursor-pointer">
                        <span x-hugeicon:left class="w-8 h-8 text-black"></span>
                    </label>
                    <h5>My Cart <mark class="text-[var(--text-primary)] bg-[var(--color-neutral)]">(1)</mark></h5>
                </div>
                <div class="flex gap-2 items-center" x-show="$store.app.cart.length >0" @click="$store.app.clearCart()">
                    <span x-hugeicon:delete class="w-6 h-6 text-red-500"></span>
                    <h5>clear</h5>
                </div>
            </div>
            <div x-show="$store.app.cart.length === 0" class="flex justify-center items-center pt-24">
                <div>
                    <div class="w-[200px] h-[200px]"><img
                            src="https://shop.nmc.coop.np/images/illustrations/emptycart.png"
                            class="w-full h-full object-cover"></div>
                    <p class="text-center">Your <strong>Cart</strong> is empty</p>
                    <a href="allproduct.html" class="flex justify-center">
                        <div
                            class="flex justify-center gap-2  py-2 px-4 w-fit my-4 rounded-full transition-all capitalize text-[14px] font-semibold border border-primary text-primary font-[var(--font-poppins) ]">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" color="currentColor">
                                <path
                                    d="M12 22C11.1818 22 10.4002 21.6698 8.83693 21.0095C4.94564 19.3657 3 18.5438 3 17.1613C3 16.7742 3 10.0645 3 7M12 22C12.8182 22 13.5998 21.6698 15.1631 21.0095C19.0544 19.3657 21 18.5438 21 17.1613V7M12 22L12 11.3548"
                                    stroke="currentColor"></path>
                                <path
                                    d="M8.32592 9.69138L5.40472 8.27785C3.80157 7.5021 3 7.11423 3 6.5C3 5.88577 3.80157 5.4979 5.40472 4.72215L8.32592 3.30862C10.1288 2.43621 11.0303 2 12 2C12.9697 2 13.8712 2.4362 15.6741 3.30862L18.5953 4.72215C20.1984 5.4979 21 5.88577 21 6.5C21 7.11423 20.1984 7.5021 18.5953 8.27785L15.6741 9.69138C13.8712 10.5638 12.9697 11 12 11C11.0303 11 10.1288 10.5638 8.32592 9.69138Z"
                                    stroke="currentColor"></path>
                                <path d="M6 12L8 13" stroke="currentColor"></path>
                                <path d="M17 4L7 9" stroke="currentColor"></path>
                            </svg>
                            <button class="outline-none">Add Products</button>
                        </div>
                    </a>
                </div>
            </div>
            <!-- product cart-->
            <div class="py-4 flex-col overflow-y-auto scrollbar-hide max-h-[calc(100vh-150px)]">
                <div x-show="$store.app.cart.length >0">
                    <template x-for="(item,index) in $store.app.cart" :key="item.id">
                        <div class="grid grid-cols-4 gap-4 py-4 border-b border-gray-200">
                            <div class="col-span-3  ">
                                <div class="flex gap-4">
                                    <div class="rounded-xl overflow-hidden w-[150px] h-[100px]">
                                        <img :src="item.image" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <div>
                                            <span class="font-semibold" x-text="item.name"></span>
                                        </div>
                                        <div
                                            class="border border-gray-200 rounded-md p-1 grid grid-cols-3 gap-1 mt-4 w-[100px]">
                                            <div class="p-1 rounded-md bg-gray-200  flex items-center justify-center"
                                                @click="$store.app.decreaseQuantity(index)">
                                                <span x-hugeicon:minus class="w-5 h-5 "></span>

                                            </div>
                                            <div class="flex items-center justify-center">
                                                <span x-text="item.quantity||1"></span>
                                            </div>
                                            <div class="p-1 rounded-md bg-gray-200  flex items-center justify-center"
                                                @click="$store.app.increaseQuantity(index)">
                                                <span x-hugeicon:plus class="w-5 h-5 "></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid  justify-end">
                                <span x-hugeicon:delete class="w-6 h-6 text-red-500 cursor-pointer"
                                    @click="$store.app.removeFromCart(index)"></span>
                                <h5 class="self-end text-primary" x-text="$store.app.calculatePrice(item)">
                                </h5>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="flex justify-between mt-4 items-center" x-show="$store.app.cart.length>0">
                    <h5>Total</h5>
                    <h4 x-text="$store.app.calculateTotalPrice()"></h4>

                </div>
            </div>


            <a href="checkout.html">
                <div class="absolute bottom-5 left-5 right-5">
                    <div class="mbtn flex gap-2 justify-center items-center">
                        <h5>Proceed</h5>
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>

<!--cart end-->
<!-- Login Modal -->
<dialog id="login_modal" class="modal">
    <div class="modal-box p-8">
        <form method="dialog">
            <button class="outline-none  absolute right-5 top-5 ">✕</button>
        </form>

        <div class="text-center">
            <h4 class="font-bold text-lg">Agent Login</h4>
            <span class="text-gray-500  text-center">Welcome back! Please enter your details to access your account.
                </p>
        </div>

        <form class="space-y-4">
            <!-- Email -->
            <input type="email" placeholder="Enter Email"
                class="w-full p-2 border border-gray-200 dark:border-gray-700 rounded-md pr-10 outline-none" required />

            <!-- Password -->
            <div class="flex w-full  flex-col gap-1 text-on-surface dark:text-on-surface-dark">
                <label for="passwordInput" class="w-fit pl-0.5 text-sm"></label>
                <div x-data="{ showPassword: false }" class="relative">
                    <input x-bind:type="showPassword ? 'text' : 'password'" id="passwordInput"
                        class="w-full p-2 border border-gray-200 dark:border-gray-700 rounded-md pr-10 outline-none"
                        name="password" autocomplete="current-password" placeholder="Enter your password" />
                    <button type="button" x-on:click="showPassword = !showPassword"
                        class="absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface dark:text-on-surface-dark"
                        aria-label="Show password">
                        <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                    </button>
                </div>
            </div>


            <span>Forgot Password?</span>
            <button type="submit" class="mbtn w-full mt-4">Sign In</button>

            <div class="divider">OR</div>

            <!-- Social Buttons -->
            <div class="grid grid-cols-3 gap-2">
                <div class="border border-gray-200 rounded-md px-3 py-2 flex justify-center items-center gap-2">
                    <span x-hugeicon:google class="w-5 h-5"></span>
                    <span class="text-sm font-semibold">Google</span>
                </div>
                <div class="border border-gray-200 rounded-md px-3 py-2 flex justify-center items-center gap-2">
                    <span x-hugeicon:facebook class="w-5 h-5"></span>
                    <span class="text-sm font-semibold">Facebook</span>
                </div>
                <div class="border border-gray-200 rounded-md px-3 py-2 flex justify-center items-center gap-2">
                    <span x-hugeicon:apple class="w-5 h-5"></span>
                    <span class="text-sm font-semibold">Apple</span>
                </div>
            </div>

            <div class="flex items-center text-center justify-center text-gray-500">
                <span>
                    Don't have an account?
                    <a onclick="login_modal.close(); signup_modal.showModal()" class="link font-semibold">Sign up</a>
                </span>
            </div>
        </form>
    </div>

    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>

<!-- Signup Modal -->
<dialog id="signup_modal" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class=" outline-none  absolute right-5 top-5">✕</button>
        </form>

        <div class="text-center">
            <h4>Create Account</h4>
            <span class="text-gray-500">Join us! Enter your details to create an account.</span>
        </div>

        <form class="space-y-4 mt-8">
            <!-- Email -->
            <input type="email" placeholder="Enter Email"
                class="w-full p-2 border border-gray-200 dark:border-gray-700 rounded-md pr-10 outline-none"
                required />
            <!-- email end-->
            <!-- Password -->
            <div class="flex w-full  flex-col gap-1 text-on-surface dark:text-on-surface-dark">
                <label for="passwordInput1" class="w-fit pl-0.5 text-sm"></label>
                <div x-data="{ showPassword: false }" class="relative">
                    <input x-bind:type="showPassword ? 'text' : 'password'" id="passwordInput1"
                        class="w-full p-2 border border-gray-200 dark:border-gray-700 rounded-md pr-10 outline-none"
                        name="password" autocomplete="current-password" placeholder="Enter your password" />
                    <button type="button" x-on:click="showPassword = !showPassword"
                        class="absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface dark:text-on-surface-dark"
                        aria-label="Show password">
                        <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="flex w-full  flex-col gap-1 text-on-surface dark:text-on-surface-dark">
                <label for="confirmpasswordInput" class="w-fit pl-0.5 text-sm"></label>
                <div x-data="{ showconfirmPassword: false }" class="relative">
                    <input x-bind:type="showconfirmPassword ? 'text' : 'confirmpassword'" id="confirmpasswordInput"
                        class="w-full p-2 border border-gray-200 dark:border-gray-700 rounded-md pr-10 outline-none"
                        name="password" autocomplete="current-password" placeholder=" Confirm your password" />
                    <button type="button" x-on:click="showconfirmPassword = !showconfirmPassword"
                        class="absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface dark:text-on-surface-dark"
                        aria-label="Show password">
                        <svg x-show="!showconfirmPassword" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <svg x-show="showconfirmPassword" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                    </button>
                </div>
            </div>

            <button type="submit" class="mbtn  w-full mt-4">Signup</button>

            <div class="divider">OR</div>

            <!-- Social Buttons -->
            <div class="grid grid-cols-3 gap-2">
                <div class="border border-gray-200 rounded-md px-3 py-2 flex justify-center items-center gap-2">
                    <span x-hugeicon:google class="w-5 h-5"></span>
                    <span class="text-sm font-semibold">Google</span>
                </div>
                <div class="border border-gray-200 rounded-md px-3 py-2 flex justify-center items-center gap-2">
                    <span x-hugeicon:facebook class="w-5 h-5"></span>
                    <span class="text-sm font-semibold">Facebook</span>
                </div>
                <div class="border border-gray-200 rounded-md px-3 py-2 flex justify-center items-center gap-2">
                    <span x-hugeicon:apple class="w-5 h-5"></span>
                    <span class="text-sm font-semibold">Apple</span>
                </div>
            </div>

            <div class="flex items-center text-center justify-center text-gray-500">
                <span>
                    Already have an account?
                    <a onclick="signup_modal.close(); login_modal.showModal()" class="link font-semibold">Log in</a>
                </span>
            </div>
        </form>
    </div>

    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
<!--signup modal end-->
