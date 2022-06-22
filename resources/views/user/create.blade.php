<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Category') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <div class="bg-white overflow-hidden shadow-md sm:roundedlg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <x-label for="name">Name</x-label>
                            <input type="text" name="name" class="w-full form-input rounded-md shadow-sm @error('title') border border-red-500 @enderror" placeholder="enter category name">
                            @error('name')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <x-label for="slug">Slug</x-label>
                            <textarea name="slug" id="slug" rows="4" class="form-input rounded-md shadow-sm w-full @error('slug') border border-red-500 @enderror" placeholder="enter category slug"></textarea> 
                            @error('slug')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-button type="submit">Save</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>