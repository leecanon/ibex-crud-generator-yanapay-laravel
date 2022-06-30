@extends('layouts.app')

@section('template_title')
    {{ $due->name ?? 'Show Due' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Due</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dues.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Num Debts Order:</strong>
                            {{ $due->num_debts_order }}
                        </div>
                        <div class="form-group">
                            <strong>Debt Amount:</strong>
                            {{ $due->debt_amount }}
                        </div>
                        <div class="form-group">
                            <strong>Debt Payment Date:</strong>
                            {{ $due->debt_payment_date }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $due->state }}
                        </div>
                        <div class="form-group">
                            <strong>Id Loans:</strong>
                            {{ $due->id_loans }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
