{{--Contact Page--}}

@extends('layouts.app-a')

@section('title', 'Contact')

@section('content')
<section class="relative overflow-auto py-16 bg-amber-50">
    <div class="container mx-auto h-screen">
        <h1 class="text-2xl font-bold mb-6">Contacts</h1>
        <a href="{{ route('contacts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600 mb-4 inline-block">Add Contact</a>
        <table class="min-w-full bg-white rounded-lg shadow">
            <thead>
            <tr class="bg-gray-200 text-left text-sm uppercase text-gray-700">
                <th class="py-3 px-4">Name</th>
                <th class="py-3 px-4">Designation</th>
                <th class="py-3 px-4">Phone</th>
                <th class="py-3 px-4">Email</th>
                <th class="py-3 px-4">Address</th>
                <th class="py-3 px-4">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr class="border-t hover:bg-gray-50">
                    <td class="py-3 px-4">{{ $contact->name }}</td>
                    <td class="py-3 px-4">{{ $contact->designation }}</td>
                    <td class="py-3 px-4">{{ $contact->phone }}</td>
                    <td class="py-3 px-4">{{ $contact->email }}</td>
                    <td class="py-3 px-4">{{ $contact->address }}</td>
                    <td class="py-3 px-4">
                        <a href="{{ route('contacts.edit', $contact) }}" class="text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:underline ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</section>


@endsection



