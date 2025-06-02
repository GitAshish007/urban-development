@extends('layouts.app-a')

@section('title', 'Contact')

@section('content')
    <div class="w-full text-sm px-96">
        <section class="relative overflow-auto py-16 bg-white px-16">
            <div class="container  mx-auto">
                <h1 class="text-2xl font-bold mb-6">{{ isset($contact) ? 'Edit' : 'Add' }} Contact</h1>
                <form action="{{ isset($contact) ? route('contacts.update', $contact) : route('contacts.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow">
                    @csrf
                    @isset($contact) @method('PUT') @endisset

                    <div class="mb-6 w-1/2">
                        <label for="name" class="block text-gray-700 pb-2">First Name</label>
                        <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 size-10 px-3" value="{{ $contact->name ?? old('name') }}" required>
                    </div>

                    <div class="mb-6 ">
                        <label for="name" class="block text-gray-700 pb-2">Last Name</label>
                        <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 size-10 px-3" value="{{ $contact->name ?? old('name') }}" required>
                    </div>

                    <div class="mb-6">
                        <label for="designation" class="block text-gray-700 pb-2">Designation</label>
                        <input type="text" name="designation" id="designation" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 size-10 px-3" value="{{ $contact->designation ?? old('designation') }}">
                    </div>

                    <div class="mb-6">
                        <label for="phone" class="block text-gray-700 pb-2">Phone</label>
                        <input type="text" name="phone" id="phone" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 size-10 px-3" value="{{ $contact->phone ?? old('phone') }}" required>
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 pb-2">Email</label>
                        <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 size-10 px-3" value="{{ $contact->email ?? old('email') }}">
                    </div>

                    <div class="mb-6">
                        <label for="address" class="block text-gray-700 pb-2">Address</label>
                        <input type="text" name="address" id="address" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 size-10 px-3" value="{{ $contact->address ?? old('address') }}">
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600">
                        {{ isset($contact) ? 'Update' : 'Save' }}
                    </button>
                </form>

            </div>
        </section>
    </div>



@endsection



