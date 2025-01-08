<form action="{{ url('bills') }}" method="POST">
    @csrf
    <input type="text" name="description" placeholder="Description" required>
    <input type="number" name="amount" placeholder="Bill amount" required>
    <input type="date" name="expiration_date"required>
    <button type="submit">Create bill</button>
</form>