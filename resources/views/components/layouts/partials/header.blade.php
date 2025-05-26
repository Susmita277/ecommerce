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
                <button onclick="window.dispatchEvent(new CustomEvent('open-login'))" class="outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="#ffffff" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg></button>
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
@livewire('auth.login')
@livewire('auth.register')


