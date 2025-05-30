<!--checkout start-->
<form wire:submit.prevent='placeorder'>
    <div class="py-24 px-24 grid grid-cols-3 justify-center ">
        <div class="col-span-2  p-5 sticky top-0 h-fit">
            <div class="flex gap-x-2 items-center">
                <span x-hugeicon:left class="w-10 h-10"></span>
                <h3>Checkout</h3>
            </div>
            <div class="py-3">
                <h5 class="text-gray-900 pb-4">Delivery Address</h5>
                <div
                    class="relative flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark my-2 ">
                    <label for="city"
                        class="w-fit text-gray-500 font-medium text-md font-[var(--font-poppins)] mb-2">City/District</label>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="absolute pointer-events-none right-0 top-11 size-5">
                        <path fill-rule="evenodd"
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                    <select id="city" name="city" wire:model='city'
                        class="w-[350px] text-gray-400 appearance-none rounded-radius border border-gray-200 rounded-md bg-surface-alt px-4 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark ">
                        <option class="text-gray-500" selected value="Birtamode">Birtamod</option>
                        <option value="Ilam">Ilam</option>
                        <option value="Phidim">Phidim</option>
                        <option value="Kathmandu">Kathmandu</option>
                        <option value="Biratnagar">Biratnagar</option>
                        <option value="Birgunj">Birgunj</option>
                    </select>
                    @error('city')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="my-6 flex-col">
                    <div class="mb-2"> <label for="street_address"
                            class="w-fit text-gray-500 font-medium text-md font-[var(--font-poppins)] ">Address</label>
                    </div>
                    <div>
                        <input type="text" placeholder="Muktichowk" wire:model ='street_address'
                            class="w-[350px] text-gray-500 appearance-none rounded-radius border border-gray-200 rounded-md bg-surface-alt px-4 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark">
                    </div>
                    @error('street_address')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-6 flex-col">
                    <div class="mb-2"> <label for="phone"
                            class="w-fit text-gray-500 font-medium text-md font-[var(--font-poppins)] ">Phone Number</label>
                    </div>
                    <div>
                        <input type="phone" placeholder="9800000000" wire:model ='phone'
                            class="w-[350px] text-gray-500 appearance-none rounded-radius border border-gray-200 rounded-md bg-surface-alt px-4 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark">
                    </div>
                    @error('phone')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="py-3">
                <h5 class="text-gray-900 pb-4">Payment Methods</h5>

                <input type="radio" value="cash on delivery" wire:model="payment_method" class="hidden peer" id="payment-cash"
                    checked>

                <label for="payment-cash"
                    class="rounded-xl p-5 justify-center flex items-center gap-2 shadow-sm w-[150px] h-[100px]
               border border-gray-300 peer-checked:border-[var(--color-primary)] hover:border-2
               transition-all cursor-pointer">
                    <div class="w-[80px] h-[80px]">
                        <img src="https://csadmin.nmc.coop.np/cash.png" class="w-full h-full object-contain">
                    </div>
                </label>

                <h5 class="pl-8 pt-2">Cash</h5>

                @error('payment_method')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

        </div>

        <div class="shadow-sm rounded-xl p-5 w-[450px]  ">
            <div class=" pb-2">
                <div class="border-b pb-2 grid grid-cols-5 w-full border-gray-200 gap-4 items-center">
                    <h4 class="col-span-3 text-gray-500  pb-2">Name</h4>
                    <h4 class="col-span-1 text-gray-500  pb-2 ">Qty</h4>
                    <h4 class="text-gray-500  pb-2 ">Total</h4>
                </div>

                @foreach ($cart_items as $item)
                    <div class=" border-b pb-2 my-2 grid grid-cols-5 w-full gap-4 items-center border-gray-100"
                        wire:key='{{ $item['product_id'] }}'>
                        <!-- Item Row -->
                        <span class="col-span-3 py-3">{{ $item['name'] }}</span>
                        <span class="  py-3 ">{{ $item['quantity'] }}</span>
                        <span class="  py-3 "><em class="font-bold">{{ $item['total_amount'] }}</em></span>
                    </div>
                @endforeach
            </div>
            <div class="modalbtn w-fit">
                <button class="outline-none" type="button">Shop More</button>
                <span x-hugeicon:cart class="w-5 h-5"></span>
            </div>

            <div class="py-2 border-b border-gray-100">
                <div class="flex justify-between py-1">
                    <p class="text-gray-500">Subtotal</p>
                    <p class="text-gray-500">Rs.<em class="font-bold text-black">{{ $grand_total }}</em></p>
                </div>
                <div class="flex justify-between py-1">
                    <p class="text-gray-500">Delivery Charge</p>
                    <p class="text-gray-500">{{ Number::currency(0, 'Rs.') }}</p>
                </div>
            </div>
            <div class="py-2 flex justify-between items-center">
                <h3>Total</h3>
                <h4 class="text-gray-500"><em class="font-bold text-black">{{ $grand_total }}</em></h4>
            </div>
            <button class="mbtn flex gap-2 justify-center my-2 w-full" type="submit">
                <h5>Place Order</h5>
                <span x-hugeicon:right class="w-5 h-5"></span>
            </button>

        </div>


    </div>
</form>
<!--checkout end-->
