<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Consult') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <form action="{{ route('consult.store') }}" method="POST">
                    @csrf
                    <div class="form-control w-full max-w-xs ">
                        <label class="label">
                            <span class="label-text">
                                What is your cat name?
                                <span class="label-text-alt text-red-600">*</span>
                            </span>

                        </label>
                        <input type="text" placeholder="Type Name" name="name"
                            class="input input-bordered w-full max-w-xs" required />
                        <label class="label">
                        </label>
                        <label class="label">
                            <span class="label-text">
                                Your Email
                                <span class="label-text-alt text-red-600">*</span>
                            </span>

                        </label>
                        <input type="text" placeholder="Type Email" name="email"
                            class="input input-bordered w-full max-w-xs" required />
                        <label class="label">
                        </label>
                    </div>
                    <div class="grid grid-cols-3 gap-4 mt-4">
                        @foreach ($indications as $indication)
                        <label class="cursor-pointer ">
                            <input type="checkbox" value="{{ $indication->id }}" name="indications[]"
                                class="checkbox checkbox-accent" />
                            <span class="label-text">{{ $indication->indication_name }}</span>
                        </label>
                        @endforeach
                    </div>
                    <div class="flex justify-center my-6">
                        <button type="submit" class="btn btn-sm btn-info ">Check</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
