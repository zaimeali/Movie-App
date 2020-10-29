@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Popular Movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12">
                @foreach ($popularMovies as $popularMovie)
                    <x-movie-card :movie="$popularMovie" :genres="$genres" />
                @endforeach
            </div>
        </div>
    </div>

    {{-- Now Playing --}}
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Now Playing
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 pb-12">
                @foreach ($nowPlaying as $playing)
                    <x-movie-card :movie="$playing" :genres="$genres" />
                @endforeach
            </div>
        </div>
    </div>
    {{-- End Now Playing --}}
@endsection