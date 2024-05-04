{{-- <h1><?php echo $heading; ?></h1>
<?php foreach($listings as $listing): ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['description']; ?></p>
<?php endforeach; ?> --}}

{{-- @php
    $variableName = 10
@endphp
{{$variableName}} // 10 --}}

{{-- @extends('layout')
@section('content') --}}

<x-layout>

@include('partials._hero')
@include('partials._search')

<div class="grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
@if(count($listings) == 0)
<p>No listing found.</p>
@endif 

@foreach($listings as $listing)
<x-listing-card :listing="$listing"/>
@endforeach
</div>
<div class="mt-6 p-4">
    {{$listings->links()}}
</div>
{{-- @endsection --}}
</x-layout>