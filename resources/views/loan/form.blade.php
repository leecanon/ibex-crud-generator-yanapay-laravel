<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_clients') }}
            {{ Form::text('id_clients', $loan->id_clients, ['class' => 'form-control' . ($errors->has('id_clients') ? ' is-invalid' : ''), 'placeholder' => 'Id Clients']) }}
            {!! $errors->first('id_clients', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('loan_amount') }}
            {{ Form::text('loan_amount', $loan->loan_amount, ['class' => 'form-control' . ($errors->has('loan_amount') ? ' is-invalid' : ''), 'placeholder' => 'Loan Amount']) }}
            {!! $errors->first('loan_amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('interest') }}
            {{ Form::text('interest', $loan->interest, ['class' => 'form-control' . ($errors->has('interest') ? ' is-invalid' : ''), 'placeholder' => 'Interest']) }}
            {!! $errors->first('interest', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_interest') }}
            {{ Form::text('total_interest', $loan->total_interest, ['class' => 'form-control' . ($errors->has('total_interest') ? ' is-invalid' : ''), 'placeholder' => 'Total Interest']) }}
            {!! $errors->first('total_interest', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('expenses') }}
            {{ Form::text('expenses', $loan->expenses, ['class' => 'form-control' . ($errors->has('expenses') ? ' is-invalid' : ''), 'placeholder' => 'Expenses']) }}
            {!! $errors->first('expenses', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number_debts') }}
            {{ Form::text('number_debts', $loan->number_debts, ['class' => 'form-control' . ($errors->has('number_debts') ? ' is-invalid' : ''), 'placeholder' => 'Number Debts']) }}
            {!! $errors->first('number_debts', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('currency') }}
            {{ Form::text('currency', $loan->currency, ['class' => 'form-control' . ($errors->has('currency') ? ' is-invalid' : ''), 'placeholder' => 'Currency']) }}
            {!! $errors->first('currency', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('start_date') }}
            {{ Form::text('start_date', $loan->start_date, ['class' => 'form-control' . ($errors->has('start_date') ? ' is-invalid' : ''), 'placeholder' => 'Start Date']) }}
            {!! $errors->first('start_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_pay') }}
            {{ Form::text('total_pay', $loan->total_pay, ['class' => 'form-control' . ($errors->has('total_pay') ? ' is-invalid' : ''), 'placeholder' => 'Total Pay']) }}
            {!! $errors->first('total_pay', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clause') }}
            {{ Form::text('clause', $loan->clause, ['class' => 'form-control' . ($errors->has('clause') ? ' is-invalid' : ''), 'placeholder' => 'Clause']) }}
            {!! $errors->first('clause', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_payments_types') }}
            {{ Form::text('id_payments_types', $loan->id_payments_types, ['class' => 'form-control' . ($errors->has('id_payments_types') ? ' is-invalid' : ''), 'placeholder' => 'Id Payments Types']) }}
            {!! $errors->first('id_payments_types', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_investments') }}
            {{ Form::text('id_investments', $loan->id_investments, ['class' => 'form-control' . ($errors->has('id_investments') ? ' is-invalid' : ''), 'placeholder' => 'Id Investments']) }}
            {!! $errors->first('id_investments', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('late_payment') }}
            {{ Form::text('late_payment', $loan->late_payment, ['class' => 'form-control' . ($errors->has('late_payment') ? ' is-invalid' : ''), 'placeholder' => 'Late Payment']) }}
            {!! $errors->first('late_payment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_late_payment') }}
            {{ Form::text('total_late_payment', $loan->total_late_payment, ['class' => 'form-control' . ($errors->has('total_late_payment') ? ' is-invalid' : ''), 'placeholder' => 'Total Late Payment']) }}
            {!! $errors->first('total_late_payment', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>