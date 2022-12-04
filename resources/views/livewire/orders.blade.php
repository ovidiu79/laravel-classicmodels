<div class="overflow-x-auto relative mt-10 mx-5">
    <h3>Orders</h3>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Number
                </th>
                <th scope="col" class="py-3 px-6">
                    Order Date
                </th>
                <th scope="col" class="py-3 px-6">
                    Required Date
                </th>
                <th scope="col" class="py-3 px-6">
                    Shipped Date
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Comments
                </th>
                <th scope="col" class="py-3 px-6">
                    Customer
                </th>
                <th scope="col" class="py-3 px-6">
                    Details
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td>
                        {{ $order->orderNumber }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $order->orderDate }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $order->requiredDate }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $order->shippedDate }}
                    </td>
                    <td>
                        {{ $order->status }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $order->comments }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $order->customer->customerName }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $order->buyPrice }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $order->MSRP }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $orders->links() }}
</div>
