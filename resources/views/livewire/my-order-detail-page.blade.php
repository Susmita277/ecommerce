<div class="flex justify-center">
    <div class="py-12 w-[80%]">
        <div class="flex justify-between pt-24">
            <h3>Your Order Details </h3>
        </div>

        <div class="py-12 flex justify-between gap-10">

            <div class="w-[400px] rounded-xl p-5  shadow-md  h-fit">
                <h4 class="text-primary">Customer Details</h4>
                <div class="grid grid-cols-2 py-4 gap-12">
                    <div>
                        <h5>Name</h5>
                        <p>{{ auth()->user()->name }}</p>
                    </div>
                    <div>
                        <h5>Phone Number</h5>
                        <p>{{$address->phone}}</p>
                    </div>
                    <div>
                        <h5>Delivery Address</h5>
                        <p>{{$address->city}}
                            {{$address->street_address}}
                        </p>
                    </div>
                    <div>
                        <h5>Order Status</h5>
                        <p>{{ $order->status }}</p>
                    </div>

                </div>
            </div>

            <div class="w-[600px] rounded-xl p-5  shadow-sm h-fit ">
                <h4 class="text-primary">Payment Details</h4>
                <div class="grid grid-cols-3 py-4 gap-12">
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
                        <h5>Payment Status</h5>
                        <p>{{ $order->payment_status }}</p>
                    </div>
                    <div>
                        <h5>Date</h5>
                        <p>{{ $order_items[0]->created_at->format('d,m,Y') }}</p>
                    </div>
                </div>
            </div>

        </div>
        <div class=" my-24 shadow-md bg-white col-span-2 px-5">
            <div class="border-b pb-2 grid grid-cols-6 w-full border-gray-200 gap-4 items-center">
                <h4 class="col-span-3 text-gray-500  pb-2">Name</h4>
                <h4 class=" text-gray-500  pb-2 ">Qty</h4>
                <h4 class="text-gray-500  pb-2 ">Unit Amount</h4>
                <h4 class="text-gray-500  pb-2 ">Total Amount</h4>
            </div>

            @foreach ($order_items as $item)
                <div class=" border-b pb-2 my-2 grid grid-cols-6 w-full gap-4 items-center border-gray-100"
                    wire:key="{{ $item->id }}">
                    <!-- Item Row -->
                    <span class="col-span-3 py-3">{{ $item->product->name }}</span>
                    <span class="  py-3 ">{{ $item->quantity }}</span>
                    <span class="  py-3 "><em class="font-bold text-primary">Rs.</em>{{ $item->unit_amount }}</span>
                    <span class="  py-3 "><em class="font-bold text-primary">Rs.</em>{{ $item->total_amount }}</span>
                </div>
            @endforeach

        </div>




    </div>

</div>
</div>

<!--order history end-->
