<div class="flex justify-center">
    <div class="py-12 w-[70%]">
        <div class="flex justify-between pt-24">
            <h3>Your <strong class="text-primary">Order</strong> has been <strong class="text-primary">Placed</strong>
            </h3>
            <div class="flex gap-x-4">
                <a href="{{ route('products') }}">
                    <div class=" flex gap-2 items-center mbtn  ">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" color="currentColor">
                            <path
                                d="M11 22C10.1818 22 9.40019 21.6698
                        7.83693 21.0095C3.94564 19.3657 2 18.5438 2 17.1613C2 16.7742 2 10.0645 2 7M11 22L11 11.3548M11 22C11.6167 22 12.12 21.8124 13 21.4372M20 7V12"
                                stroke="currentColor"></path>
                            <path d="M16 15L19 18M19 18L22 21M19 18L16 21M19 18L22 15" stroke="currentColor"></path>
                            <path
                                d="M7.32592 9.69138L4.40472 8.27785C2.80157 7.5021 2 7.11423 2 6.5C2 5.88577 2.80157 5.4979 4.40472 4.72215L7.32592 3.30862C9.12883 2.43621 10.0303 2 11 2C11.9697 2 12.8712 2.4362 14.6741 3.30862L17.5953 4.72215C19.1984 5.4979 20 5.88577 20 6.5C20 7.11423 19.1984 7.5021 17.5953 8.27785L14.6741 9.69138C12.8712 10.5638 11.9697 11 11 11C10.0303 11 9.12883 10.5638 7.32592 9.69138Z"
                                stroke="currentColor"></path>
                            <path d="M5 12L7 13" stroke="currentColor"></path>
                            <path d="M16 4L6 9" stroke="currentColor"></path>
                        </svg>
                        <button class="outline-none capitalize" type="button">
                            Go back shopping
                        </button>
                    </div>
                </a>
                <a href="order-history.html">
                    <div class=" flex gap-2 items-center modalbtn   ">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" color="currentColor">
                            <path
                                d="M4 18.6458V8.05426C4 5.20025 4 3.77325 4.87868 2.88663C5.75736 2 7.17157 2 10 2H14C16.8284 2 18.2426 2 19.1213 2.88663C20 3.77325 20 5.20025 20 8.05426V18.6458C20 20.1575 20 20.9133 19.538 21.2108C18.7831 21.6971 17.6161 20.6774 17.0291 20.3073C16.5441 20.0014 16.3017 19.8485 16.0325 19.8397C15.7417 19.8301 15.4949 19.9768 14.9709 20.3073L13.06 21.5124C12.5445 21.8374 12.2868 22 12 22C11.7132 22 11.4555 21.8374 10.94 21.5124L9.02913 20.3073C8.54415 20.0014 8.30166 19.8485 8.03253 19.8397C7.74172 19.8301 7.49493 19.9768 6.97087 20.3073C6.38395 20.6774 5.21687 21.6971 4.46195 21.2108C4 20.9133 4 20.1575 4 18.6458Z"
                                stroke="currentColor"></path>
                            <path d="M11 11H8" stroke="currentColor"></path>
                            <path d="M14 7L8 7" stroke="currentColor"></path>
                        </svg>
                        <button class="outline-none capitalize" type="button">
                            view orders
                        </button>
                    </div>
                </a>
            </div>
        </div>



        <div class="py-12 grid grid-cols-2">
            <div class="w-[400px] rounded-xl p-5  shadow-sm h-fit">
                <h4 class="text-primary">Customer Details</h4>
                <div class="grid grid-cols-2 py-4 gap-12">
                    <div>
                        <h5>Name</h5>
                        <p>{{ auth()->user()->name }}</p>
                    </div>
                    <div>
                        <h5>Phone Number</h5>
                        <p>{{ $order->address->phone }}</p>
                    </div>
                    <div class="col-span-2">
                        <h5>Delivery Address</h5>
                        <p>{{ $order->address->street_address }}
                        <p>{{ $order->address->city }}
                        </p>
                    </div>

                </div>
            </div>

            <div class="w-[400px] rounded-xl p-5  shadow-sm h-fit ">
                <h4 class="text-primary">Payment Details</h4>
                <div class="grid grid-cols-2 py-4 gap-12">
                    <div>
                        <h5>Payment method</h5>
                        <p>{{ $order->payment_method }}</p>
                    </div>
                    <div>
                        <h5>Shipping Amount</h5>
                        <p>{{ $order->shipping_amount }}</p>
                    </div>
                    <div>
                        <h5>Total Amount</h5>
                        <p>{{ $order->grand_total }}</p>
                    </div>

                    <div>
                        <h5>Date</h5>
                        <p>{{ $order->created_at->format('d,m,Y') }}</p>
                    </div>
                </div>
            </div>

        </div>


    </div>

</div>
</div>

<!--order history end-->
