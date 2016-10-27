<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArchiveRequest;
use App\Http\Requests\UpdateArchiveRequest;
use App\Repositories\ArchiveRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArchiveController extends AppBaseController
{
    /** @var  ArchiveRepository */
    private $archiveRepository;

    public function __construct(ArchiveRepository $archiveRepo)
    {
        $this->archiveRepository = $archiveRepo;
    }

    /**
     * Display a listing of the Archive.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->archiveRepository->pushCriteria(new RequestCriteria($request));
        $archives = $this->archiveRepository->all();

        return view('archives.index')
            ->with('archives', $archives);
    }

    /**
     * Show the form for creating a new Archive.
     *
     * @return Response
     */
    public function create()
    {
        return view('archives.create');
    }

    /**
     * Store a newly created Archive in storage.
     *
     * @param CreateArchiveRequest $request
     *
     * @return Response
     */
    public function store(CreateArchiveRequest $request)
    {
        $input = $request->all();

        $archive = $this->archiveRepository->create($input);

        Flash::success('Archive saved successfully.');

        return redirect(route('archives.index'));
    }

    /**
     * Display the specified Archive.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $archive = $this->archiveRepository->findWithoutFail($id);

        if (empty($archive)) {
            Flash::error('Archive not found');

            return redirect(route('archives.index'));
        }

        return view('archives.show')->with('archive', $archive);
    }

    /**
     * Show the form for editing the specified Archive.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $archive = $this->archiveRepository->findWithoutFail($id);

        if (empty($archive)) {
            Flash::error('Archive not found');

            return redirect(route('archives.index'));
        }

        return view('archives.edit')->with('archive', $archive);
    }

    /**
     * Update the specified Archive in storage.
     *
     * @param  int              $id
     * @param UpdateArchiveRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArchiveRequest $request)
    {
        $archive = $this->archiveRepository->findWithoutFail($id);

        if (empty($archive)) {
            Flash::error('Archive not found');

            return redirect(route('archives.index'));
        }

        $archive = $this->archiveRepository->update($request->all(), $id);

        Flash::success('Archive updated successfully.');

        return redirect(route('archives.index'));
    }

    /**
     * Remove the specified Archive from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $archive = $this->archiveRepository->findWithoutFail($id);

        if (empty($archive)) {
            Flash::error('Archive not found');

            return redirect(route('archives.index'));
        }

        $this->archiveRepository->delete($id);

        Flash::success('Archive deleted successfully.');

        return redirect(route('archives.index'));
    }
}
