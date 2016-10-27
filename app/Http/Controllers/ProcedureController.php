<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProcedureRequest;
use App\Http\Requests\UpdateProcedureRequest;
use App\Repositories\ProcedureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProcedureController extends AppBaseController
{
    /** @var  ProcedureRepository */
    private $procedureRepository;

    public function __construct(ProcedureRepository $procedureRepo)
    {
        $this->procedureRepository = $procedureRepo;
    }

    /**
     * Display a listing of the Procedure.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->procedureRepository->pushCriteria(new RequestCriteria($request));
        $procedures = $this->procedureRepository->all();

        return view('procedures.index')
            ->with('procedures', $procedures);
    }

    /**
     * Show the form for creating a new Procedure.
     *
     * @return Response
     */
    public function create()
    {
        return view('procedures.create');
    }

    /**
     * Store a newly created Procedure in storage.
     *
     * @param CreateProcedureRequest $request
     *
     * @return Response
     */
    public function store(CreateProcedureRequest $request)
    {
        $input = $request->all();

        $procedure = $this->procedureRepository->create($input);

        Flash::success('Procedure saved successfully.');

        return redirect(route('procedures.index'));
    }

    /**
     * Display the specified Procedure.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $procedure = $this->procedureRepository->findWithoutFail($id);

        if (empty($procedure)) {
            Flash::error('Procedure not found');

            return redirect(route('procedures.index'));
        }

        return view('procedures.show')->with('procedure', $procedure);
    }

    /**
     * Show the form for editing the specified Procedure.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $procedure = $this->procedureRepository->findWithoutFail($id);

        if (empty($procedure)) {
            Flash::error('Procedure not found');

            return redirect(route('procedures.index'));
        }

        return view('procedures.edit')->with('procedure', $procedure);
    }

    /**
     * Update the specified Procedure in storage.
     *
     * @param  int              $id
     * @param UpdateProcedureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProcedureRequest $request)
    {
        $procedure = $this->procedureRepository->findWithoutFail($id);

        if (empty($procedure)) {
            Flash::error('Procedure not found');

            return redirect(route('procedures.index'));
        }

        $procedure = $this->procedureRepository->update($request->all(), $id);

        Flash::success('Procedure updated successfully.');

        return redirect(route('procedures.index'));
    }

    /**
     * Remove the specified Procedure from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $procedure = $this->procedureRepository->findWithoutFail($id);

        if (empty($procedure)) {
            Flash::error('Procedure not found');

            return redirect(route('procedures.index'));
        }

        $this->procedureRepository->delete($id);

        Flash::success('Procedure deleted successfully.');

        return redirect(route('procedures.index'));
    }
}
