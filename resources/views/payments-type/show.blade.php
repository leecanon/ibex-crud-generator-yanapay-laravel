@extends('layouts.app')

@section('template_title')
    {{ $paymentsType->name ?? 'Show Payments Type' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Payments Type</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('payments-types.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Value:</strong>
                            {{ $paymentsType->value }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $paymentsType->description }}
                        </div>
                        <div class="form-group">
                            <strong>Apply Days:</strong>
                            {{ $paymentsType->apply_days }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
