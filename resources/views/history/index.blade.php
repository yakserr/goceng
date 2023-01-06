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
                                        <th>name/th>
                                        <th>Email</th>
                                        <th>Disease</th>
                                        <th>Indications</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consults as $consult)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $consult->name }}</td>
                                        <td>{{ $consult->email }}</td>
                                        <td>{{ $consult->diseases }}</td>
                                        <td>
                                            <!-- The button to open modal -->
                                            @if($consult->count() > 0)
                                            <label for="my-modal-<?= $consult->disease_code?>"
                                                class="btn btn-sm btn-info">detail</label>
                                            @endif
                                            <!-- Put this part before </body> tag -->
                                            <input type="checkbox" id="my-modal-<?= $consult->disease_code?>"
                                                class="modal-toggle" />
                                            <label for="my-modal-<?= $consult->disease_code?>"
                                                class="modal cursor-pointer">
                                                <label
                                                    class="modal-box bg-white dark:bg-gray-800 overflow-hidden relative"
                                                    for="">
                                                    <h3 class="text-lg font-bold text-center mb-2">Detail indication of
                                                        disease {{ $consult->diseases }}
                                                    </h3>
                                                    <div class="overflow-x-auto">
                                                        <table class="table table-compact w-full">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Name</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($indication_name as $key => $value)
                                                                @foreach ($value as $val)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $val }}</td>
                                                                </tr>
                                                                @endforeach
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </label>
                                            </label>
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
    </div>

</x-app-layout>
