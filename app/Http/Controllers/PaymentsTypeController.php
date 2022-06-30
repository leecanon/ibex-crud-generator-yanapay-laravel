<?php

namespace App\Http\Controllers;

use App\Models\PaymentsType;
use Illuminate\Http\Request;

/**
 * Class PaymentsTypeController
 * @package App\Http\Controllers
 */
class PaymentsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentsTypes = PaymentsType::paginate();

        return view('payments-type.index', compact('paymentsTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $paymentsTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paymentsType = new PaymentsType();
        return view('payments-type.create', compact('paymentsType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PaymentsType::$rules);

        $paymentsType = PaymentsType::create($request->all());

        return redirect()->route('payments-types.index')
            ->with('success', 'PaymentsType created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymentsType = PaymentsType::find($id);

        return view('payments-type.show', compact('paymentsType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paymentsType = PaymentsType::find($id);

        return view('payments-type.edit', compact('paymentsType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PaymentsType $paymentsType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentsType $paymentsType)
    {
        request()->validate(PaymentsType::$rules);

        $paymentsType->update($request->all());

        return redirect()->route('payments-types.index')
            ->with('success', 'PaymentsType updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paymentsType = PaymentsType::find($id)->delete();

        return redirect()->route('payments-types.index')
            ->with('success', 'PaymentsType deleted successfully');
    }
}
