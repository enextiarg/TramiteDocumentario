<?php

namespace App\Http\Controllers;

use App\Helper\Helpers;
use App\Http\Requests\CreateFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Models\Customer;
use App\Models\DocumentType;
use App\Models\File;
use App\Models\Procedure;
use App\Repositories\FileRepository;
use Flash;
use Illuminate\Http\Request;

class UserFileController extends Controller
{
    /** @var  FileRepository */
    private $fileRepository;

    public function __construct(FileRepository $fileRepo)
    {
        $this->fileRepository = $fileRepo;
    }

    /**
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $query = File::where('customer_id', \Auth::user()->id);

        if ($request->has('folio')) {
            $query = $query->where('folio', $request->input('folio', null));
        }

        $files = $query->get();

        return view('user_files.index')->with(array(
            'files' => $files
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new File.
     *
     * @return Response
     */
    public function create()
    {
        $procedures = Procedure::all()->toArray();
        $customers = Customer::all()->toArray();
        $document_types = DocumentType::all()->toArray();
        return view('files.create')->with(array(
            'procedures' => Helpers::model2Array($procedures, 'id', 'name'),
            'customers' => Helpers::model2Array($customers, 'id', 'firstname.lastname'),
            'document_types' => Helpers::model2Array($document_types, 'id', 'name')
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFileRequest $request)
    {
        $input = $request->all();

        $file = $this->fileRepository->create($input);

        Flash::success('File saved successfully.');

        return redirect(route('files.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = $this->fileRepository->findWithoutFail($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('files.index'));
        }

        return view('files.show')->with('file', $file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file = $this->fileRepository->findWithoutFail($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('customer.files.index'));
        }

        return view('files.edit')->with('file', $file);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateFileRequest $request)
    {
        $file = $this->fileRepository->findWithoutFail($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('customer.files.index'));
        }

        $file = $this->fileRepository->update($request->all(), $id);

        Flash::success('File updated successfully.');

        return redirect(route('customer.files.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = $this->fileRepository->findWithoutFail($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('customer.files.index'));
        }

        $this->fileRepository->delete($id);

        Flash::success('File deleted successfully.');

        return redirect(route('customer.files.index'));
    }
}
