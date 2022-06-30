<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('num_debts_order') }}
            {{ Form::text('num_debts_order', $due->num_debts_order, ['class' => 'form-control' . ($errors->has('num_debts_order') ? ' is-invalid' : ''), 'placeholder' => 'Num Debts Order']) }}
            {!! $errors->first('num_debts_order', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('debt_amount') }}
            {{ Form::text('debt_amount', $due->debt_amount, ['class' => 'form-control' . ($errors->has('debt_amount') ? ' is-invalid' : ''), 'placeholder' => 'Debt Amount']) }}
            {!! $errors->first('debt_amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('debt_payment_date') }}
            {{ Form::text('debt_payment_date', $due->debt_payment_date, ['class' => 'form-control' . ($errors->has('debt_payment_date') ? ' is-invalid' : ''), 'placeholder' => 'Debt Payment Date']) }}
            {!! $errors->first('debt_payment_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state') }}
            {{ Form::text('state', $due->state, ['class' => 'form-control' . ($errors->has('state') ? ' is-invalid' : ''), 'placeholder' => 'State']) }}
            {!! $errors->first('state', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_loans') }}
            {{ Form::text('id_loans', $due->id_loans, ['class' => 'form-control' . ($errors->has('id_loans') ? ' is-invalid' : ''), 'placeholder' => 'Id Loans']) }}
            {!! $errors->first('id_loans', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>