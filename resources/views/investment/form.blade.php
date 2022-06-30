<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('partner_name') }}
            {{ Form::text('partner_name', $investment->partner_name, ['class' => 'form-control' . ($errors->has('partner_name') ? ' is-invalid' : ''), 'placeholder' => 'Partner Name']) }}
            {!! $errors->first('partner_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('investment_amount') }}
            {{ Form::text('investment_amount', $investment->investment_amount, ['class' => 'form-control' . ($errors->has('investment_amount') ? ' is-invalid' : ''), 'placeholder' => 'Investment Amount']) }}
            {!! $errors->first('investment_amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('currency') }}
            {{ Form::text('currency', $investment->currency, ['class' => 'form-control' . ($errors->has('currency') ? ' is-invalid' : ''), 'placeholder' => 'Currency']) }}
            {!! $errors->first('currency', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>