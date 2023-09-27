@extends ('layout')


@section('header')
    <title>My Home Page</title>
@endsection

@section('content')
    <div class="py-5 text-center container">
        <h1>This is thoroughly incomplete.</h1>

        @foreach ($tasks as $task)
            <div>
                <h3> {{ $task->body }} </h3>
                @if ($task->completed == 0)
                    <p>Incomplete</p>
                @else
                    <p>Complete</p>
                @endif
            </div>
        @endforeach
    </div>
@endsection

@section('footer')
    <h3>Example footer</h3>
@endsection
