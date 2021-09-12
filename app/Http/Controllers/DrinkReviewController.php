<?php

namespace App\Http\Controllers;

use App\Models\DrinkReview;
use App\Repository\DrinkReviewRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class DrinkReviewController extends Controller
{
    private DrinkReviewRepositoryInterface $drinkReviewRepository;

    public function __construct(DrinkReviewRepositoryInterface $drinkReviewRepository)
    {
        $this->drinkReviewRepository = $drinkReviewRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $drinkReview = new DrinkReview($request->all());
        $drinkReview->user_id = Auth::id();
        $this->drinkReviewRepository->add($drinkReview);

        return redirect()
            ->route('drinks')
            ->with('success', 'Drink cos tam');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id): View
    {
        return view('drinks.show', [
            'reviews' => $this->drinkReviewRepository->all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
