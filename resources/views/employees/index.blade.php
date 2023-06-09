<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div>
                        @if (session()->has('success'))
                            <p>{{ session('success') }}</p>
                        @endif
                    </div>
                    <br/>

                    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="{{ route('employees.create') }}">Add new employee</a>

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">

                                    <table class="w-full text-left text-sm font-light">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">ID</th>
                                            <th scope="col" class="px-6 py-4">Name</th>
                                            <th scope="col" class="px-6 py-4">Surname</th>
                                            <th scope="col" class="px-6 py-4">E-mail</th>
                                            <th scope="col" class="px-6 py-4">Edit</th>
                                            <th scope="col" class="px-6 py-4">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employees as $employee)
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $employee->id }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $employee->name }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $employee->surname }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $employee->email }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="{{ route('employees.edit', ['employee' => $employee]) }}">Edit</a>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <form method="post" action="{{ route('employees.delete', ['employee' => $employee]) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded" type="submit">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>