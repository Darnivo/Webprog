<h1>All Students</h1>
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
<ul>
@forelse ($students as $student)
    <li>{{ $student }}</li>
@empty
    <li>No students registered yet.</li>
@endforelse
</ul>
<a href="{{ url('/') }}">Back to Home</a>