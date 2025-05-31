<!--header-->
<div class="sticky top-0 z-50 bg-white">
    <ul class=" py-4 px-12 flex justify-between items-center ">
        <li>
            <a class="cursor-pointer" href="{{ route('home') }}">
                <h4>AcqaNest</h4>
            </a>
        </li>



        <li class="flex gap-5 items-center ">
            <label for="my-drawer-4" class="cursor-pointer flex gap-1 items-center">

                @php
                    $cart = \App\Helpers\CartManagement::get();
                @endphp
                <h5>Cart</h5>
                <h5 class="text-accent">({{ count($cart) }})</h5>
            </label>
            @guest
                <!-- Trigger Button -->
                <div class="flex gap-2 items-center cursor-pointer">
                    <div class="rounded-full p-2 flex items-center justify-center bg-gray-200 ">
                        <a href="{{ route('login') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#000000" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg></a>
                    </div>
                    <div>
                        <h5>Account</h5>
                        <div>
                            <a href="{{ route('login') }}"><span class="text-primary cursor-pointer">sign in/</span></a>
                            <a href="{{ route('register') }}"><span class="text-primary">create</span></a>
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

                        <li><a href="{{ route('myorder') }}">My Orders</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
            @endauth


        </li>
    </ul>
</div>
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
                    @foreach ($categories as $cat)
                        <li>
                            <a href="/products?selected_categories[0]={{ $cat->id }}"
                                wire:key="{{ $cat->id }}"
                                class="capitalize {{ request('category') == $cat->id ? 'bg-primary text-white' : '' }}">
                                {{ $cat->name }}
                            </a>
                        </li>
                    @endforeach
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

       

    </ul>


<!--header end-->


<!--components started from here -->
@livewire('cart-manager')


