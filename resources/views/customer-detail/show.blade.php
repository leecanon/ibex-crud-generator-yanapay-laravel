@extends('layouts.app')

@section('template_title')
    {{ $customerDetail->name ?? 'Show Customer Detail' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Customer Detail</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('customer-details.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Job:</strong>
                            {{ $customerDetail->job }}
                        </div>
                        <div class="form-group">
                            <strong>Job Address:</strong>
                            {{ $customerDetail->job_address }}
                        </div>
                        <div class="form-group">
                            <strong>Business:</strong>
                            {{ $customerDetail->business }}
                        </div>
                        <div class="form-group">
                            <strong>Business Address:</strong>
                            {{ $customerDetail->business_address }}
                        </div>
                        <div class="form-group">
                            <strong>Id Clients:</strong>
                            {{ $customerDetail->id_clients }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
