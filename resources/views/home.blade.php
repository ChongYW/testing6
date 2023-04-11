@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User info') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="p-2">
                        <h4>User ID</h4>
                        {{$user -> id}}
                    </div>

                    <div class="p-2">
                        <h4>User Name</h4>
                        {{$user -> name}}
                    </div>

                    <div class="p-2">
                        <h4>User Email</h4>
                        {{$user -> email}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
