<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReportTypeRequest;
use App\Http\Requests\UpdateReportTypeRequest;
use App\Repositories\ReportTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ReportTypeController extends AppBaseController
{
    /** @var  ReportTypeRepository */
    private $reportTypeRepository;

    public function __construct(ReportTypeRepository $reportTypeRepo)
    {
        $this->reportTypeRepository = $reportTypeRepo;
    }

    /**
     * Display a listing of the ReportType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->reportTypeRepository->pushCriteria(new RequestCriteria($request));
        $reportTypes = $this->reportTypeRepository->all();

        return view('report_types.index')
            ->with('reportTypes', $reportTypes);
    }

    /**
     * Show the form for creating a new ReportType.
     *
     * @return Response
     */
    public function create()
    {
        return view('report_types.create');
    }

    /**
     * Store a newly created ReportType in storage.
     *
     * @param CreateReportTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateReportTypeRequest $request)
    {
        $input = $request->all();

        $reportType = $this->reportTypeRepository->create($input);

        Flash::success('Report Type saved successfully.');

        return redirect(route('reportTypes.index'));
    }

    /**
     * Display the specified ReportType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reportType = $this->reportTypeRepository->findWithoutFail($id);

        if (empty($reportType)) {
            Flash::error('Report Type not found');

            return redirect(route('reportTypes.index'));
        }

        return view('report_types.show')->with('reportType', $reportType);
    }

    /**
     * Show the form for editing the specified ReportType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reportType = $this->reportTypeRepository->findWithoutFail($id);

        if (empty($reportType)) {
            Flash::error('Report Type not found');

            return redirect(route('reportTypes.index'));
        }

        return view('report_types.edit')->with('reportType', $reportType);
    }

    /**
     * Update the specified ReportType in storage.
     *
     * @param  int              $id
     * @param UpdateReportTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReportTypeRequest $request)
    {
        $reportType = $this->reportTypeRepository->findWithoutFail($id);

        if (empty($reportType)) {
            Flash::error('Report Type not found');

            return redirect(route('reportTypes.index'));
        }

        $reportType = $this->reportTypeRepository->update($request->all(), $id);

        Flash::success('Report Type updated successfully.');

        return redirect(route('reportTypes.index'));
    }

    /**
     * Remove the specified ReportType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reportType = $this->reportTypeRepository->findWithoutFail($id);

        if (empty($reportType)) {
            Flash::error('Report Type not found');

            return redirect(route('reportTypes.index'));
        }

        $this->reportTypeRepository->delete($id);

        Flash::success('Report Type deleted successfully.');

        return redirect(route('reportTypes.index'));
    }
}
