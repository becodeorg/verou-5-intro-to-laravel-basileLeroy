@extends("layout")

@section("title")
Users
@endsection

@section("content")
<main class="mx-36 my-12">
    <h1 class="text-3xl">Users Page</h1>
    <ul>
        @foreach ($users as $user)
        <li><a href="{{ route("showUser", ["id" => $user->id]) }}">{{ $user->name }}</a></li>
        @endforeach
    </ul>
</main>
@endsection

