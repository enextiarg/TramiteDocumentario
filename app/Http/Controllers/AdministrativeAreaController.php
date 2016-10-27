<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdministrativeAreaRequest;
use App\Http\Requests\UpdateAdministrativeAreaRequest;
use App\Repositories\AdministrativeAreaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AdministrativeAreaController extends AppBaseController
{
    /** @var  AdministrativeAreaRepository */
    private $administrativeAreaRepository;

    public function __construct(AdministrativeAreaRepository $administrativeAreaRepo)
    {
        $this->administrativeAreaRepository = $administrativeAreaRepo;
    }

    /**
     * Display a listing of the AdministrativeArea.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->administrativeAreaRepository->pushCriteria(new RequestCriteria($request));
        $administrativeAreas = $this->administrativeAreaRepository->all();

        return view('administrative_areas.index')
            ->with('administrativeAreas', $administrativeAreas);
    }

    /**
     * Show the form for creating a new AdministrativeArea.
     *
     * @return Response
     */
    public function create()
    {
        return view('administrative_areas.create');
    }

    /**
     * Store a newly created AdministrativeArea in storage.
     *
     * @param CreateAdministrativeAreaRequest $request
     *
     * @return Response
     */
    public function store(CreateAdministrativeAreaRequest $request)
    {
        $input = $request->all();

        $administrativeArea = $this->administrativeAreaRepository->create($input);

        Flash::success('Administrative Area saved successfully.');

        return redirect(route('administrativeAreas.index'));
    }

    /**
     * Display the specified AdministrativeArea.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $administrativeArea = $this->administrativeAreaRepository->findWithoutFail($id);

        if (empty($administrativeArea)) {
            Flash::error('Administrative Area not found');

            return redirect(route('administrativeAreas.index'));
        }

        return view('administrative_areas.show')->with('administrativeArea', $administrativeArea);
    }

    /**
     * Show the form for editing the specified AdministrativeArea.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $administrativeArea = $this->administrativeAreaRepository->findWithoutFail($id);

        if (empty($administrativeArea)) {
            Flash::error('Administrative Area not found');

            return redirect(route('administrativeAreas.index'));
        }

        return view('administrative_areas.edit')->with('administrativeArea', $administrativeArea);
    }

    /**
     * Update the specified AdministrativeArea in storage.
     *
     * @param  int              $id
     * @param UpdateAdministrativeAreaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdministrativeAreaRequest $request)
    {
        $administrativeArea = $this->administrativeAreaRepository->findWithoutFail($id);

        if (empty($administrativeArea)) {
            Flash::error('Administrative Area not found');

            return redirect(route('administrativeAreas.index'));
        }

        $administrativeArea = $this->administrativeAreaRepository->update($request->all(), $id);

        Flash::success('Administrative Area updated successfully.');

        return redirect(route('administrativeAreas.index'));
    }

    /**
     * Remove the specified AdministrativeArea from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $administrativeArea = $this->administrativeAreaRepository->findWithoutFail($id);

        if (empty($administrativeArea)) {
            Flash::error('Administrative Area not found');

            return redirect(route('administrativeAreas.index'));
        }

        $this->administrativeAreaRepository->delete($id);

        Flash::success('Administrative Area deleted successfully.');

        return redirect(route('administrativeAreas.index'));
    }
}
