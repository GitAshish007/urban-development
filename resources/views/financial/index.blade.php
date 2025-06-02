{{-- Financial Index Page --}}
@extends('layouts.app-a')

@section('title', 'Financial Year 2024-25')

@section('content')
    <section class="relative overflow-auto py-16 bg-amber-50">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-6">Financial Year 2024-25</h1>
            <a href="{{ route('financial.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600 mb-4 inline-block">Add Entry</a>

            <table class="min-w-full bg-white rounded-lg shadow">
                <thead>
                <tr class="bg-gray-200 text-left text-sm text-gray-700">
                    <th class="py-3 px-4">Date</th>
                    <th class="py-3 px-4">Yojna Name</th>
                    <th class="py-3 px-4">Section</th>
                    <th class="py-3 px-4">GO Number</th>
                    <th class="py-3 px-4">Lakhs</th>
                    <th class="py-3 px-4">Subject</th>
                    <th class="py-3 px-4">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($financials as $financial)
                    <tr class="border-t text-left text-sm hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $financial->date }}</td>
                        <td class="py-3 px-4">{{ $financial->yojna_name }}</td>
                        <td class="py-3 px-4">{{ $financial->section }}</td>
                        <td class="py-3 px-4">{{ $financial->GO_number }}</td>
                        <td class="py-3 px-4">₹{{ number_format($financial->amount, 2) }}</td>
                        <td class="py-3 px-4">{{ $financial->subject }}</td>

                        <td class="py-3 px-4 flex items-center space-x-2">
                            <a href="{{ route('financial.edit', $financial) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('financial.destroy', $financial) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this entry?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
