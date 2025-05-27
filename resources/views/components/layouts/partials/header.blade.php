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


        <li class="flex gap-5 items-center ">
            <label for="my-drawer-4" class="cursor-pointer flex gap-1 items-center">
                <h5>Cart</h5>
                <h5 class="text-blue-900">(0)</h5>
            </label>
            @guest
                <!-- Trigger Button -->
                <div class="flex gap-2 items-center cursor-pointer">
                    <div class="rounded-full p-2 flex items-center justify-center bg-gray-200 "
                        onclick="login_modal.showModal()">
                        <button onclick="window.dispatchEvent(new CustomEvent('open-login'))" class="outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#000000" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg></button>
                    </div>
                    <div>
                        <h5>Account</h5>
                        <div>
                            <span class="text-primary cursor-pointer" onclick="window.dispatchEvent(new CustomEvent('open-login'))">sign in/</span>
                            <span class="text-primary" onclick="window.dispatchEvent(new CustomEvent('open-register'))">create</span>
                        </div>
                    </div>
                </div>

            @endguest

            @auth
                <div class="dropdown">
                    <div class="gap-2 flex items-center">
                        <div tabindex="0" class="userbtn m-1">
                            {{ substr(auth()->user()->name, 0, 1) }}
                        </div>
                        <div>
                            <h5>Account</h5>
                            <span class="text-primary">{{ auth()->user()->name }}</span>
                        </div>
                    </div>
                    <ul tabindex="0" class="dropdown-content menu bg-white  rounded-box z-10 w-56 p-2 shadow-sm">
                        <li><a>My Accounts</a></li>
                        <li><a>My Orders</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
            @endauth


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
@livewire('auth.login')
@livewire('auth.register')
