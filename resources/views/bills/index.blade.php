@extends('layouts.base')
@section('content')
    <button type="button" class="bg-teal-500 hover:bg-teal-700 text-gray-100 font-bold py-2 px-4 rounded m-4">Add bill</button>
    @foreach($bills as $bill)
        <div>
            <h3>{{ $bill->description }}</h3>
            <p>{{ $bill->amount }}</p>
            <p>{{ $bill->expiration_date }}</p>
            @if ($bill->is_paid == false)
                <p>Unpaid</p>
            @endif
            @if ($bill->is_paid == true)
                <p>Paid</p>
            @endif
            <button type="button" class="px-4 py-2 text-gray-700 font-semibold bg-sky-300 hover:bg-sky-500 rounded">
                <a href="{{ url('bills/'.$bill->id.'/edit') }}">Edit</a>
            </button>
            <form action="{{ url('bills/'.$bill->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 text-black-700 font-semibold bg-red-500 hover:bg-red-700 rounded">Delete</button>
            </form>
            <hr>
        </div>
    @endforeach
@endsection
