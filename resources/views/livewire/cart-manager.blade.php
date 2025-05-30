<!--cart modal-->
<div class="drawer drawer-end">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-side z-100">
        <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
        <div class="bg-white w-[30%] p-5 h-screen">
            <div class="flex justify-between items-center">
                <div class="flex gap-2 items-center">
                    <label for="my-drawer-4" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>

                    </label>
                    <h5>My Cart </h5>
                </div>
                @if (count($cart) > 0)
                    <div class="flex gap-2 items-center cursor-pointer" wire:click="clearCart">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#f44336"
                            class="cursor-pointer w-5 h-5">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                        <h5>clear</h5>
                    </div>
                @endif
            </div>

            @if (count($cart) === 0)
                <div class="flex justify-center items-center pt-24">
                    <div>
                        <div class="w-[200px] h-[200px]">
                            <img src="https://shop.nmc.coop.np/images/illustrations/emptycart.png"
                                class="w-full h-full object-cover">
                        </div>
                        <p class="text-center">Your <strong>Cart</strong> is empty</p>
                        <a href="{{route('products')}}" class="flex justify-center">
                            <div
                                class="flex justify-center gap-2 py-2 px-4 my-4 rounded-full border border-primary text-primary font-semibold">
                                <svg class="h-5 w-5" ...></svg>
                                <button>Add Products</button>
                            </div>
                        </a>
                    </div>
                </div>
            @else
                <div class="py-8 overflow-y-auto max-h-[calc(100vh-150px)]">
                    @foreach ($cart as $index => $item)
                        <div class="grid grid-cols-4 py-4 border-b border-gray-200">
                            <div class="col-span-3">
                                <div class="flex gap-4">
                                    <div class="rounded-xl overflow-hidden w-[150px] h-[100px]">
                                        <img src="{{ asset('storage/' . $item['image']) }}" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <span class="font-medium">{{ $item['name'] }}</span>
                                        <div
                                            class="border border-gray-200 rounded-md p-1 grid grid-cols-3 gap-1 mt-4 w-[100px]">
                                            <div class="p-1 bg-gray-200 flex items-center justify-center cursor-pointer rounded-md"
                                                wire:click="decreaseQuantity({{ $index }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                                </svg>

                                            </div>
                                            <div class="flex items-center justify-center">
                                                <span>{{ $item['quantity'] }}</span>
                                            </div>
                                            <div class="p-1 bg-gray-200 flex items-center justify-center cursor-pointer"
                                                wire:click="increaseQuantity({{ $index }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 4.5v15m7.5-7.5h-15" />
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid justify-items-end col-span-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="#f44336" class="cursor-pointer w-6 h-6"
                                    wire:click="removeFromCart({{ $index }})">
                                    <path strokeLinecap="round" strokeLinejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                                <span class="self-end text-primary ">{{ $this->calculatePrice($item) }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-between mt-4 items-center">
                    <h5>Total</h5>
                    <h4>{{ $this->calculateTotalPrice() }}</h4>
                </div>

                <a href="/checkout">
                    <div class="absolute bottom-5 left-5 right-5">
                        <div class="mbtn flex gap-2 justify-center items-center">
                            <h5>Proceed</h5>
                        </div>
                    </div>
                </a>
            @endif
        </div>
    </div>
</div>
