@extends('layouts.app')

@section('template_title')
    Payments Type
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Payments Type') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('payments-types.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Value</th>
										<th>Description</th>
										<th>Apply Days</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paymentsTypes as $paymentsType)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $paymentsType->value }}</td>
											<td>{{ $paymentsType->description }}</td>
											<td>{{ $paymentsType->apply_days }}</td>

                                            <td>
                                                <form action="{{ route('payments-types.destroy',$paymentsType->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('payments-types.show',$paymentsType->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('payments-types.edit',$paymentsType->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $paymentsTypes->links() !!}
            </div>
        </div>
    </div>
@endsection
