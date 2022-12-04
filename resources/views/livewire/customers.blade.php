<div class="overflow-x-auto relative mt-10 mx-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Customer Number
                </th>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Last Name
                </th>
                <th scope="col" class="py-3 px-6">
                    First Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Phone
                </th>
                <th scope="col" class="py-3 px-6">
                    Address Line 1
                </th>
                <th scope="col" class="py-3 px-6">
                    Address Line 2
                </th>
                <th scope="col" class="py-3 px-6">
                    City
                </th>
                <th scope="col" class="py-3 px-6">
                    Country
                </th>
                <th scope="col" class="py-3 px-6">
                    Employee
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td>
                        {{ $customer->customerNumber }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $customer->customerName }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $customer->contactLastName }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $customer->contactFirstName }}
                    </td>
                    <td>
                        {{ $customer->phone }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $customer->addressLine1 }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $customer->addressLine2 }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $customer->city }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $customer->country }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $customer->employee->lastName }} {{ $customer->employee->firstName }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $customers->links() }}
</div>
