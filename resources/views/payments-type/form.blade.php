<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('value') }}
            {{ Form::text('value', $paymentsType->value, ['class' => 'form-control' . ($errors->has('value') ? ' is-invalid' : ''), 'placeholder' => 'Value']) }}
            {!! $errors->first('value', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $paymentsType->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apply_days') }}
            {{ Form::text('apply_days', $paymentsType->apply_days, ['class' => 'form-control' . ($errors->has('apply_days') ? ' is-invalid' : ''), 'placeholder' => 'Apply Days']) }}
            {!! $errors->first('apply_days', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>