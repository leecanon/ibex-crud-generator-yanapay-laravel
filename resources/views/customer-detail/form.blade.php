<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('job') }}
            {{ Form::text('job', $customerDetail->job, ['class' => 'form-control' . ($errors->has('job') ? ' is-invalid' : ''), 'placeholder' => 'Job']) }}
            {!! $errors->first('job', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('job_address') }}
            {{ Form::text('job_address', $customerDetail->job_address, ['class' => 'form-control' . ($errors->has('job_address') ? ' is-invalid' : ''), 'placeholder' => 'Job Address']) }}
            {!! $errors->first('job_address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('business') }}
            {{ Form::text('business', $customerDetail->business, ['class' => 'form-control' . ($errors->has('business') ? ' is-invalid' : ''), 'placeholder' => 'Business']) }}
            {!! $errors->first('business', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('business_address') }}
            {{ Form::text('business_address', $customerDetail->business_address, ['class' => 'form-control' . ($errors->has('business_address') ? ' is-invalid' : ''), 'placeholder' => 'Business Address']) }}
            {!! $errors->first('business_address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_clients') }}
            {{ Form::text('id_clients', $customerDetail->id_clients, ['class' => 'form-control' . ($errors->has('id_clients') ? ' is-invalid' : ''), 'placeholder' => 'Id Clients']) }}
            {!! $errors->first('id_clients', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>