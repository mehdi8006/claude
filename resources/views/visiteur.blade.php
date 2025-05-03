@extends('layouts.master')
@section('nav')
<x-nav/>
@endsection
@section('footer')
<x-footer/>
@endsection
@section('main')
<x-main/>

@endsection
@section('appelpage')
<x-auth/>
<x-search/>
<x-detail/>
@endsection