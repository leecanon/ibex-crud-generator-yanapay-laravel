@extends('layouts.app')

@section('template_title')
    Due
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Due') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('dues.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        {{-- <th>No</th> --}}
                                        
										<th>Cantidad de Cuotas</th>
										<th>Debt Amount</th>
										<th>Debt Payment Date</th>
										<th>State</th>
                                        <th>Cliente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dues as $due)
                                        <tr>
                                            {{-- <td>{{ ++$i }}</td> --}}
                                            
											<td>{{ $due->num_debts_order }}</td>
											<td>{{ $due->debt_amount }}</td>
											<td>{{ $due->debt_payment_date }}</td>
											<td>{{ $due->state }}</td>
                                            <td>{{ $due->loan->client->name }}</td>

                                            <td>
                                                <form action="{{ route('dues.destroy',$due->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('dues.show',$due->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('dues.edit',$due->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $dues->links() !!}
            </div>
        </div>
    </div>
@endsection
