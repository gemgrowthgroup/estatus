@extends('layouts.sudo')


@section('sudo-content')

    <div class="row">
        <div class="col-md-10 py-5">
            
            @if ( $searchResults-> isEmpty())
                <h2>Sorry, no results found for the term <b>"{{ $searchterm }}"</b>.</h2>
            @else
                <h2>There are {{ $searchResults->count() }} results for the term <b>"{{ $searchterm }}"</b></h2>
                <hr />
                @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                   <h2>{{ ucwords($type) }}</h2>
 
                   @foreach($modelSearchResults as $searchResult)
                       <ul>
                            <a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a>
                       </ul>
                   @endforeach
                @endforeach
            @endif
        </div>
    </div>

@endsection