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

                @if (count($cart ?? []) > 0)
                    <span
                        class="absolute -top-3 p-1 -right-1 w-2 h-2 bg-red-500 rounded-full flex text-white items-center justify-center">{{ count($cart ?? []) }}</span>
                @endif
            </label>

            <!-- Trigger Button -->
            <div class="rounded-full p-2 flex items-center justify-center bg-accent " onclick="login_modal.showModal()">
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
            <a href="{{ route('checkout') }}">
                <h5>contact</h5>
            </a>
        </li>


    </ul>
</div>

<!--header end-->


<!--components started from here -->
@livewire('cart-manager')

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
@livewire('auth.register')