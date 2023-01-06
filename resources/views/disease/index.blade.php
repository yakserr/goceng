<x-app-layout>
    <!--Open modal if there error in form -->
    @if ($errors->any())
    <script>
        window.addEventListener('DOMContentLoaded', () => {
    document.getElementById('btn-add').click();
    })
    </script>
    @endif

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Diseases') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--BEGIN: Content-->
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <!--BEGIN: Action-->
                        <div class="flex justify-between mb-4">
                            <!-- The button to open modal -->
                            <label for="my-modal-6" id="btn-add" class="btn">Add Data</label>
                            <div class="form-control">
                                <div class="input-group">
                                    <input type="text" placeholder="Search…" class="input input-bordered" />
                                    <button class="btn btn-square">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--END: Action-->

                        <!--BEGIN: Table-->
                        <div class="overflow-x-auto">
                            <table class="table w-full">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Code</th>
                                        <th>Disease name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diseases as $disease)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $disease->disease_code }}</td>
                                        <td>{{ $disease->disease_name }}</td>
                                        <td>
                                            <div class="flex space-x-4">
                                                <a href="{{ route('disease.edit', $disease->id) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('disease.destroy', $disease) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-error">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--END: Table-->

                    </div>
                    <!--END: Content-->
                </div>
            </div>
        </div>
        <!--Toast notification-->
        @if (session('success'))
        <div class="toast toast-end">
            <div class="alert alert-info">
                <div>
                    <span class="font-bold">{{ session('success') }}</span>
                </div>
            </div>
        </div>
        @endif

        @if (session('error'))
        <div class="toast toast-end">
            <div class="alert alert-error">
                <div>
                    <span class="font-bold">{{ session('error') }}</span>
                </div>
            </div>
        </div>
        @endif
        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="my-modal-6" class="modal-toggle" />
        <div class="modal modal-bottom sm:modal-middle">
            <div class="modal-box">
                <form method="POST" action="{{ route('disease.store') }}">
                    @csrf
                    <h3 class="font-bold text-lg text-center">Add Data Disease</h3>
                    <div class="my-2 px-6">
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">
                                    Disease Code
                                    <span class="label-text-alt text-red-600">*</span>
                                </span>

                            </label>
                            <input type="text" placeholder="Disease Code" name="disease_code"
                                class="input input-bordered max-w" required />
                            @error('disease_code')
                            <span class="mt-1 text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2 px-6">
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">
                                    Disease Name
                                    <span class="label-text-alt text-red-600">*</span>
                                </span>

                            </label>
                            <input type="text" placeholder="Disease Name" name="disease_name"
                                class="input input-bordered max-w" required />
                            @error('disease_name')
                            <span class="mt-1 text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-action flex justify-end">
                        <label for="my-modal-6" class="btn btn-sm btn-error text-white">Cancel</label>
                        <button type="submit" class="btn btn-sm btn-info text-white">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // if toast notification is exist, set time out 3 second
        if (document.querySelector('.toast')) {
            setTimeout(() => {
                document.querySelector('.toast').classList.add('hidden');
            }, 3000);
        }
    </script>
</x-app-layout>
