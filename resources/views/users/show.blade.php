@extends("layout")

@section("title")
Posts
@endsection

@section("content")
<main class="mx-36 my-12">
    <h1 class="text-3xl">User Page</h1>
    <h3>{{ $user->name }}</h3>
    <p>{{ $user->email }}</p>
</main>
@endsection

