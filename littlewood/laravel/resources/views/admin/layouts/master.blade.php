@extends('admin.layouts.app')

@section('main-container')
<style>
    .alert-warning {
    --bs-alert-color: var(--bs-warning-text-emphasis);
    --bs-alert-bg: var(--bs-warning-bg-subtle);
    --bs-alert-border-color: var(--bs-warning-border-subtle);
    --bs-alert-link-color: var(--bs-warning-text-emphasis);
}
.alert-dismissible {
    padding-right: 3rem;
}
.alert {
    --bs-alert-padding-x: 1rem;
    --bs-alert-padding-y: 1rem;
    --bs-alert-margin-bottom: 1rem;
    --bs-alert-color: inherit;
    --bs-alert-border-color: transparent;
    --bs-alert-border: var(--bs-border-width) solid var(--bs-alert-border-color);
    --bs-alert-border-radius: var(--bs-border-radius);
    --bs-alert-link-color: inherit;
    position: relative;
    padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
    margin-bottom: var(--bs-alert-margin-bottom);
    color: var(--bs-alert-color);
    background-color: var(--bs-alert-bg);
    border: var(--bs-alert-border);
    border-radius: var(--bs-alert-border-radius);
}
.fade {
    transition: opacity .15s linear;
}
.alert-dismissible .btn-close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    padding: 1.25rem 1rem;
}
</style>
<div id="app">
    <div class="wrapper">
       @include('admin.layouts.siderbar')

        <div class="main">
            @include('admin.layouts.navbar')

            
            <main class="content">
                @yield('main-content')
            </main>

            
        </div>
    </div>   
</div>
@endsection
