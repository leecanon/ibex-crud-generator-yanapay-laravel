@extends('layouts.app')

@section('template_title')
    {{ $investment->name ?? 'Show Investment' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Investment</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('investments.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Partner Name:</strong>
                            {{ $investment->partner_name }}
                        </div>
                        <div class="form-group">
                            <strong>Investment Amount:</strong>
                            {{ $investment->investment_amount }}
                        </div>
                        <div class="form-group">
                            <strong>Currency:</strong>
                            {{ $investment->currency }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
