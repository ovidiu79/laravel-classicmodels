<div class="overflow-x-auto relative mt-10 mx-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Code
                </th>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Product Line
                </th>
                <th scope="col" class="py-3 px-6">
                    Product Scale
                </th>
                <th scope="col" class="py-3 px-6">
                    Vendor
                </th>
                <th scope="col" class="py-3 px-6">
                    Description
                </th>
                <th scope="col" class="py-3 px-6">
                    Stock
                </th>
                <th scope="col" class="py-3 px-6">
                    Price
                </th>
                <th scope="col" class="py-3 px-6">
                    MSRP
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td>
                        {{ $product->productCode }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $product->productName }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $product->productLine }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $product->productScale }}
                    </td>
                    <td>
                        {{ $product->productVendor }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $product->productDescription }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $product->quantityInStock }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $product->buyPrice }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $product->MSRP }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
</div>
