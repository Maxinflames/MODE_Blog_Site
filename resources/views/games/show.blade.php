@extends ('layout')


@section('header')
    <!-- Title of website -->
    <title>Assignment 1 Page</title>
@endsection

@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">

                <!-- Content title-->
                <h1 class="fw-light">Assignment 1 Page</h1>

                <!-- descriptive paragraph of content -->
                <p class="lead text-body-secondary">Some of the game I am currently playing, as well as their prices, general ratings and along with my own.
                </p>

                <p>
                    <!-- links to other parts of the site -->
                    <a href="/" class="btn btn-primary my-2">Home</a>
                    <a href="./posts" class="btn btn-secondary my-2">Posts</a>
                    <a href="./tasks" class="btn btn-secondary my-2">Tasks</a>
                </p>
            </div>
            <!-- Table creation, and class assignment -->
            <table class="table table-striped table-dark">
                <!-- Table column headers -->
                <tr>
                    <th>Game Name</th>
                    <th>Game Description</th>
                    <th>Game Price</th>
                    <th>Game Rating</th>
                    <th>Personal Rating</th>
                    <th>Release Date</th>
                </tr>
                <!-- loop through database data and display for each entry -->
                @foreach ($games as $game)
                    <tr>
                        <td class="text-center">{{ $game->title }}</td >
                        <td class="text-center" style="width:60%">{{ $game->body }}</td>
                        <td class="text-center">${{ $game->price }}</td>
                        <td class="text-center">{{ $game->rating }}</td>
                        <td class="text-center">{{ $game->personal_rating }}</td>
                        <td class="text-center">{{ $game->release_date }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
    
@endsection
@section('footer')
    <h3>Example footer</h3>
@endsection
