@extends('layouts.clean')

@section('childContent')
    @include('layouts.partials.topbar')
    @include('layouts.partials.navigation')

    @yield('content')


    @include('layouts.partials.footer')

@endsection

