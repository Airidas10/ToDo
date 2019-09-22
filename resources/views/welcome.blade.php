@extends('layouts.app')

@section('content')
    <div>
        <bajeriai :jokes-prop="{{ json_encode($jokes) }}"></bajeriai>
    </div>
@endsection

