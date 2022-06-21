<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Book') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <div class="bg-white overflow-hidden shadow-md sm:roundedlg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <x-label for="title">Title</x-label>
                            <input type="text" name="title" class="w-full form-input rounded-md shadow-sm @error('title') border border-red-500 @enderror" placeholder="enter blog title">
                            @error('title')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <x-label for="title">Image</x-label>
                            <input type="file" name="image" class="w-full form-input rounded-md shadow-sm @error('image') border border-red-500 @enderror">
                            @error('image')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <x-label for="body">Body</x-label>
                            <textarea name="body" id="body" rows="4" class="form-input rounded-md shadow-sm w-full @error('body') border border-red-500 @enderror" placeholder="enter blog body"></textarea> 
                            @error('body')
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