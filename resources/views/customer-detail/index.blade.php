@extends('layouts.app')

@section('template_title')
    Customer Detail
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Customer Detail') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('customer-details.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Job</th>
										<th>Job Address</th>
										<th>Business</th>
										<th>Business Address</th>
										<th>Id Clients</th>

										{{-- <th>Document Type</th>
										<th>Document Number</th>
										<th>Address</th>
										<th>City</th>
										<th>Email</th>
										<th>Phone Number</th>
										<th>State</th> --}}

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customerDetails as $customerDetail)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $customerDetail->job }}</td>
											<td>{{ $customerDetail->job_address }}</td>
											<td>{{ $customerDetail->business }}</td>
											<td>{{ $customerDetail->business_address }}</td>
											<td>{{ $customerDetail->client->name }}</td>

											{{-- <td>{{ $customerDetail->client->document_type }}</td>
											<td>{{ $customerDetail->client->document_number }}</td>
											<td>{{ $customerDetail->client->address }}</td>
											<td>{{ $customerDetail->client->city }}</td>
											<td>{{ $customerDetail->client->email }}</td>
											<td>{{ $customerDetail->client->phone_number }}</td>
											<td>{{ $customerDetail->client->state }}</td> --}}

                                            <td>
                                                <form action="{{ route('customer-details.destroy',$customerDetail->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('customer-details.show',$customerDetail->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('customer-details.edit',$customerDetail->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $customerDetails->links() !!}
            </div>
        </div>
    </div>
@endsection
