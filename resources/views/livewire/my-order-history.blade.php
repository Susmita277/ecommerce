<div class=" flex justify-center py-24">
    <!--order-history-->
    <div class="w-[70%]">
        <h4>Your Orders</h4>
        <div class="py-8 grid grid-cols-1 gap-8">
            <div class="overflow-x-auto rounded-lg shadow ">
                @if ($orders->count() > 0)
                    <table class="min-w-full text-left text-sm text-gray-700">
                        <thead class="bg-gray-100 text-xs uppercase text-gray-600 font-poppins">
                            <tr>
                                <th class="px-6 py-3">Order</th>
                                <th class="px-6 py-3">Date</th>
                                <th class="px-6 py-3">Order Status</th>
                                <th class="px-6 py-3">Payment Status</th>
                                <th class="px-6 py-3">Order Amount</th>
                                <th class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        @foreach ($orders as $order)
                            @php
                                $status = '';
                                $payment_status = '';
                                if ($order->status == 'new') {
                                    $status = '<span class="bg-blue-500 statusbtn">New</span>';
                                }
                                if ($order->status == 'processing') {
                                    $status = '<span class="bg-yellow-500 statusbtn">Processing</span>';
                                }
                                if ($order->status == 'shipped') {
                                    $status = '<span class="bg-green-500 statusbtn">Shipped</span>';
                                }
                                if ($order->status == 'delivered') {
                                    $status = '<span class="bg-green-700 statusbtn">Delivered</span>';
                                }
                                if ($order->status == 'cancelled') {
                                    $status = '<span class="bg-red-700 statusbtn">Cancelled</span>';
                                }

                                if ($order->payment_status == 'pending') {
                                    $payment_status = '<span class="statusbtn bg-blue-500 ">Pending</span>';
                                }
                                if ($order->payment_status == 'paid') {
                                    $payment_status = '<span class="statusbtn bg-green-600 ">Paid</span>';
                                }
                                if ($order->payment_status == 'failed') {
                                    $payment_status = '<span class="statusbtn bg-red-600 ">Failed</span>';
                                }

                            @endphp
                            <tbody class="divide-y divide-gray-200 font-inter">
                                <tr class="bg-white hover:bg-gray-50">
                                    <td class="px-6 py-4">{{ $order->id }}</td>
                                    <td class="px-6 py-4">{{ $order->created_at->format('d-m-Y') }}</td>
                                    <td class="px-6 py-4">
                                        {!! $status !!}
                                    </td>
                                    <td class="px-6 py-4">
                                        {!! $payment_status !!}
                                    </td>
                                    <td class="px-6 py-4">{{ $order->grand_total }}</td>
                                    <td class="px-6 py-4">
                                        <a href="/my-orders/{{ $order->id }}" class="mbtn">View Details</a>
                                    </td>
                                </tr>
                                <!-- Repeat <tr> block for each order -->
                            </tbody>
                        @endforeach
                    </table>
                    @else
                    <p class="text-center">No Order History <em class="text-primary">Please Order First</em></p>
                @endif
            </div>

        </div>
        {{ $orders->links() }}
        <!--order-history end-->
    </div>
</div>
