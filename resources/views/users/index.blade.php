@extends('layouts.app')
@section('style')
@livewireStyles
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">User List</div>

                <div class="card-body">

                    <livewire:user-list />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@livewireScripts
@endsection