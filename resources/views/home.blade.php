@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('لوحة التحكم') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('لقد تم تسجيل دخولك') }}
                    <a href="{{ route('Dash.admin') }}" class="btn btn-primary"> انتقل على لوحة التحكم</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
