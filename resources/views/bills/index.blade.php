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
        <a href="{{ url('bills/'.$bill->id.'/edit') }}">Edit</a>
        <form action="{{ url('bills/'.$bill->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach