@extends('layouts.app')

@section('template_title')
    {{ $loan->name ?? 'Show Loan' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Loan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('loans.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Clients:</strong>
                            {{ $loan->id_clients }}
                        </div>
                        <div class="form-group">
                            <strong>Loan Amount:</strong>
                            {{ $loan->loan_amount }}
                        </div>
                        <div class="form-group">
                            <strong>Interest:</strong>
                            {{ $loan->interest }}
                        </div>
                        <div class="form-group">
                            <strong>Total Interest:</strong>
                            {{ $loan->total_interest }}
                        </div>
                        <div class="form-group">
                            <strong>Expenses:</strong>
                            {{ $loan->expenses }}
                        </div>
                        <div class="form-group">
                            <strong>Number Debts:</strong>
                            {{ $loan->number_debts }}
                        </div>
                        <div class="form-group">
                            <strong>Currency:</strong>
                            {{ $loan->currency }}
                        </div>
                        <div class="form-group">
                            <strong>Start Date:</strong>
                            {{ $loan->start_date }}
                        </div>
                        <div class="form-group">
                            <strong>Total Pay:</strong>
                            {{ $loan->total_pay }}
                        </div>
                        <div class="form-group">
                            <strong>Clause:</strong>
                            {{ $loan->clause }}
                        </div>
                        <div class="form-group">
                            <strong>Id Payments Types:</strong>
                            {{ $loan->id_payments_types }}
                        </div>
                        <div class="form-group">
                            <strong>Id Investments:</strong>
                            {{ $loan->id_investments }}
                        </div>
                        <div class="form-group">
                            <strong>Late Payment:</strong>
                            {{ $loan->late_payment }}
                        </div>
                        <div class="form-group">
                            <strong>Total Late Payment:</strong>
                            {{ $loan->total_late_payment }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
