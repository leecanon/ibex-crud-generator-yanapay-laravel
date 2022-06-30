<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $client->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('document_type') }}
            {{ Form::text('document_type', $client->document_type, ['class' => 'form-control' . ($errors->has('document_type') ? ' is-invalid' : ''), 'placeholder' => 'Document Type']) }}
            {!! $errors->first('document_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('document_number') }}
            {{ Form::text('document_number', $client->document_number, ['class' => 'form-control' . ($errors->has('document_number') ? ' is-invalid' : ''), 'placeholder' => 'Document Number']) }}
            {!! $errors->first('document_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $client->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('city') }}
            {{ Form::text('city', $client->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $client->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone_number') }}
            {{ Form::text('phone_number', $client->phone_number, ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => 'Phone Number']) }}
            {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state') }}
            {{ Form::text('state', $client->state, ['class' => 'form-control' . ($errors->has('state') ? ' is-invalid' : ''), 'placeholder' => 'State']) }}
            {!! $errors->first('state', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>