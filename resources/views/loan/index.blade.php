@extends('layouts.app')

@section('template_title')
    Loan
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Loan') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('loans.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Cliente</th>
										<th>Monto de prestamo</th>
										<th>Interest</th>
										<th>Total Interest</th>
										<th>Gastos</th>
										<th>Moneda</th>
										<th>Fecha de inicio</th>
										<th>Total a pagar</th>
                                        <th>Number de Cuotas</th>
										<th>Tipo de pago</th>
										<th>Id Investments</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($loans as $loan)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $loan->client->name }}</td>

											<td>{{ $loan->loan_amount }}</td>
											<td>{{ $loan->interest }}</td>
											<td>{{ $loan->total_interest }}</td>
											<td>{{ $loan->expenses }}</td>
											<td>{{ $loan->currency }}</td>
											<td>{{ $loan->start_date }}</td>
											<td>{{ $loan->total_pay }}</td>
                                            <td>{{ $loan->number_debts }}</td>
											<td>{{ $loan->paymentsType->description }}</td>
											<td>{{ $loan->id_investments }}</td>

                                            <td>
                                                <form action="{{ route('loans.destroy',$loan->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('loans.show',$loan->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('loans.edit',$loan->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $loans->links() !!}
            </div>
        </div>
    </div>
@endsection
