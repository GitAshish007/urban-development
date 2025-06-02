@extends('layouts.app-a')

@section('title', 'Financial Year 2024-25')

@section('content')
    <section class="relative overflow-auto py-8 bg-amber-50 px-96 mb-32 ">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-6">{{ isset($financial) ? 'Edit' : 'Add' }} Financial Entry</h1>
            <form action="{{ isset($financial) ? route('financial.update', $financial) : route('financial.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow">
                @csrf
                @isset($financial) @method('PUT')@endisset

                <div class="text-sm">
                    <div class="mb-6">
                        <label for="date" class="block text-gray-700 pb-2">Date</label>
                        <input type="date" name="date" id="date" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 size-10 px-3" value="{{ $financial->date ?? old('date') }}" required>
                        @error('date')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="yojna_name" class="block text-gray-700 pb-2">Yojna Name</label>
                        <input type="text" name="yojna_name" id="yojna_name" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 size-10 px-3" value="{{ $financial->yojna_name ?? old('yojna_name') }}">
                        @error('yojna_name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="section" class="block text-gray-700 pb-2">Section</label>
                        <input type="text" name="section" id="section" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 size-10 px-3" value="{{ $financial->section ?? old('section') }}" required>
                        @error('section')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="GO_number" class="block text-gray-700 pb-2">GO Number</label>
                        <input type="text" name="GO_number" id="GO_number" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 size-10 px-3" value="{{ $financial->GO_number ?? old('GO_number') }}">
                        @error('GO_number')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="amount" class="block text-gray-700 pb-2">Amount in Lakhs</label>
                        <input type="number" name="amount" id="amount" step="0.01" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 size-10 px-3" value="{{ $financial->amount ?? old('amount') }}">
                        @error('amount')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="subject" class="block text-gray-700 pb-2">Subject</label>
                        <input type="text" name="subject" id="subject" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 size-10 px-3" value="{{ $financial->subject ?? old('subject') }}">
                        @error('subject')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600">
                    {{ isset($financial) ? 'Update' : 'Save' }}
                </button>
            </form>
        </div>
    </section>
@endsection
