<?php

namespace App\Http\Controllers;

use App\Models\CustomerDetail;
use App\Models\Client;
use Illuminate\Http\Request;

/**
 * Class CustomerDetailController
 * @package App\Http\Controllers
 */
class CustomerDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerDetails = CustomerDetail::paginate();

        return view('customer-detail.index', compact('customerDetails'))
            ->with('i', (request()->input('page', 1) - 1) * $customerDetails->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customerDetail = new CustomerDetail();
        return view('customer-detail.create', compact('customerDetail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CustomerDetail::$rules);

        $customerDetail = CustomerDetail::create($request->all());

        return redirect()->route('customer-details.index')
            ->with('success', 'CustomerDetail created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customerDetail = CustomerDetail::find($id);

        return view('customer-detail.show', compact('customerDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customerDetail = CustomerDetail::find($id);
        $name = Client::pluck('name', 'id');
        return view('customer-detail.edit', compact('customerDetail','name'));
    }
 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CustomerDetail $customerDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerDetail $customerDetail)
    {
        request()->validate(CustomerDetail::$rules);

        $customerDetail->update($request->all());

        return redirect()->route('customer-details.index')
            ->with('success', 'CustomerDetail updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $customerDetail = CustomerDetail::find($id)->delete();

        return redirect()->route('customer-details.index')
            ->with('success', 'CustomerDetail deleted successfully');
    }
}
