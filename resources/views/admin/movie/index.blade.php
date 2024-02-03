@extends('layouts.app')

@section('main-content')
    <h1>
        Movies
    </h1>
    <div class="d-flex flex-wrap">
    @forelse ($movies as $movie )
        <div class="col-3 mb-2">
            <div id="card-tuning" class="card bg-ice" style="width: 18rem;">
                <div class="card-body">
                    <h3>
                        {{ $movie->title }}
                    </h3>
                    <hr>
                    <h4 class="card-text">
                        {{ $movie->original_title }}
                    </h4>
                    <p>
                        <span class="text-success">
                            Language:
                        </span>
                            {{ $movie->nationality }}
                    </p>
                    <p>
                        Relese:
                        {{ $movie->date }}
                    </p>
                    <p>
                        Vote:
                        {{ $movie->vote }}
                    </p>
                </div>
            </div>
        </div>
    @empty
        <h1>  
            There are no Movies Avible
        </h1>  
    @endforelse
</div>
@endsection
