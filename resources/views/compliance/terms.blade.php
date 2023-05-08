{{-- resources\views\compliance\privacy.blade.php --}}
@extends('layouts.app')

@section('pageMeta')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="index, follow">
@endsection

@section('metaTitle', 'Terms of Use - ')

@section('pageStyles')
    {{-- CSS Styles go here --}}
@endsection

@section('pageFonts')
    {{-- Page Specific Fonts go here --}}
@endsection

@section('headScripts')
    {{-- Page Specific Scripts that need to be in the head go here --}}
@endsection

@section('bodyClasses', '')
@section('bodyStyles', '')

@section('pageTitle')
    <h1>Terms of Use</h1>
    <span>This in that</span>
@endsection

@section('content')
    {{-- Page Content goes here --}}
    <div class="container">
        <p><strong>theWORX</strong> Terms of Use.</p>
        <p>Content goes here.</p>
    </div>
@stop

@push('footerScripts')
    {{-- Page Specific Scripts that need to be below the footer go here --}}
@endpush
