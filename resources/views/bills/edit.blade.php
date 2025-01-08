<form action="{{ url('bills/'. $bills->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="description" placeholder="Description" value="{{ $bills->description}}" required>
    <input type="number" name="amount" placeholder="Bill amount" value="{{ $bills->amount}}" required>
    <input type="date" name="expiration_date"value="{{ $bills->expiration_date}}" required>
    <button type="submit">Update bill</button>
</form>