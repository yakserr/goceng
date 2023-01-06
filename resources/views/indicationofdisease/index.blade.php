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
                                        <th>Disease name</th>
                                        <th>Indications</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($indicationOfDiseases as $iod)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $iod->disease_name }}</td>
                                        <td>
                                            <!-- The button to open modal -->
                                            @if($iod->indications->count() > 0)
                                            <label for="my-modal-<?= $iod->disease_code?>"
                                                class="btn btn-sm btn-info">detail</label>
                                            @endif
                                            <!-- Put this part before </body> tag -->
                                            <input type="checkbox" id="my-modal-<?= $iod->disease_code?>"
                                                class="modal-toggle" />
                                            <label for="my-modal-<?= $iod->disease_code?>" class="modal cursor-pointer">
                                                <label
                                                    class="modal-box bg-white dark:bg-gray-800 overflow-hidden relative"
                                                    for="">
                                                    <h3 class="text-lg font-bold text-center mb-2">Detail indication of
                                                        disease {{ $iod->disease_name }}
                                                    </h3>
                                                    <div class="overflow-x-auto">
                                                        <table class="table table-compact w-full">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Code</th>
                                                                    <th>Name</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($iod->indications as $indication)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $indication->indication_code }}</td>
                                                                    <td>{{ $indication->indication_name }}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </label>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="flex space-x-4">
                                                <a href="{{ route('indicationofdisease.edit', $iod->id) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('indicationofdisease.destroy', $iod->id) }}"
                                                    method="POST">
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
                    <div class="mb-2 px-6">
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">
                                    Disease Name
                                    <span class="label-text-alt text-red-600">*</span>
                                </span>

                            </label>
                            <!--Show Disease list-->
                            <select name="disease_name" class="select select-bordered w-full max-w">
                                <option value="">Select Disease</option>
                                @foreach ($diseases as $disease)
                                <option value="{{ $disease->disease_name }}">{{ $disease->disease_name }}</option>
                                @endforeach
                            </select>
                            @error('disease_name')
                            <span class="mt-1 text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="my-2 px-6">
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">
                                    Disease Code
                                    <span class="label-text-alt text-red-600">*</span>
                                </span>

                            </label>
                            <!-- Show Indication list and multiple select -->
                            <select name="disease_code[]" class="chosen-select select select-bordered w-full max-w"
                                multiple>
                                <option value="">Select Indication</option>
                                @foreach ($indications as $indication)
                                <option value="{{ $indication->indication_code }}">{{ $indication->indication_name }}
                                </option>
                                @endforeach
                            </select>
                            @error('disease_code')
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

</x-app-layout>
