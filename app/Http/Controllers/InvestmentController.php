<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;

/**
 * Class InvestmentController
 * @package App\Http\Controllers
 */
class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investments = Investment::paginate();

        return view('investment.index', compact('investments'))
            ->with('i', (request()->input('page', 1) - 1) * $investments->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $investment = new Investment();
        return view('investment.create', compact('investment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Investment::$rules);

        $investment = Investment::create($request->all());

        return redirect()->route('investments.index')
            ->with('success', 'Investment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $investment = Investment::find($id);

        return view('investment.show', compact('investment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $investment = Investment::find($id);

        return view('investment.edit', compact('investment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Investment $investment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investment $investment)
    {
        request()->validate(Investment::$rules);

        $investment->update($request->all());

        return redirect()->route('investments.index')
            ->with('success', 'Investment updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $investment = Investment::find($id)->delete();

        return redirect()->route('investments.index')
            ->with('success', 'Investment deleted successfully');
    }
}
