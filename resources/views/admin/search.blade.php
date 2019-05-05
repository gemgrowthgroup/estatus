@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10">
        
        @if ( $searchResults-> isEmpty())
            <h5>Sorry, no results found for the term <b>"{{ $searchterm }}"</b>.</h5>
        @else
            <h5>There are {{ $searchResults->count() }} results for the term <b>"{{ $searchterm }}"</b></h5>
            <hr />
            @foreach($searchResults->groupByType() as $type => $modelSearchResults)
               <h5>{{ ucwords($type) }}</h5>

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