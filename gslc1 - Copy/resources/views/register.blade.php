<h1>Register for our course</h1>
<form method="POST" action="{{ url('/register') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required><br>
    <button type="submit">Register</button>
</form>