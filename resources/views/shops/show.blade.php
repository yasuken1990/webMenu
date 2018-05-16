@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-warning">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/shops/' . $shop->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" name="name" value="{{ $shop->name }}">
                            <input type="submit" value="UPDATE" class="btn btn-primary">
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
