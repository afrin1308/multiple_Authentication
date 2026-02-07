@extends('admin.layout')

@section('content')
<h2>User Details</h2>

<p><strong>Name:</strong> {{ $user->name }}</p>
<p><strong>Email:</strong> {{ $user->email }}</p>
<p><strong>Active:</strong> {{ $user->is_active ? 'Yes' : 'No' }}</p>

<a href="{{ route('admin.dashboard') }}">Back to Dashboard</a>
@endsection
