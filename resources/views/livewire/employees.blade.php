<div class="overflow-x-auto relative mt-10 mx-5">
    <h3>Employees</h3>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Number
                </th>
                <th scope="col" class="py-3 px-6">
                    Last Name
                </th>
                <th scope="col" class="py-3 px-6">
                    First Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Extension
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Office
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td>
                        {{ $employee->employeeNumber }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $employee->lastName }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $employee->firstName }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $employee->extension }}
                    </td>
                    <td>
                        {{ $employee->email }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $employee->office->city }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
