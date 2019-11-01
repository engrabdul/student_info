<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesemesterRequest;
use App\Http\Requests\UpdatesemesterRequest;
use App\Repositories\semesterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class semesterController extends AppBaseController
{
    /** @var  semesterRepository */
    private $semesterRepository;

    public function __construct(semesterRepository $semesterRepo)
    {
        $this->semesterRepository = $semesterRepo;
    }

    /**
     * Display a listing of the semester.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $semesters = $this->semesterRepository->all();

        return view('semesters.index')
            ->with('semesters', $semesters);
    }

    /**
     * Show the form for creating a new semester.
     *
     * @return Response
     */
    public function create()
    {
        return view('semesters.create');
    }

    /**
     * Store a newly created semester in storage.
     *
     * @param CreatesemesterRequest $request
     *
     * @return Response
     */
    public function store(CreatesemesterRequest $request)
    {
        $input = $request->all();

        $semester = $this->semesterRepository->create($input);

        Flash::success('Semester saved successfully.');

        return redirect(route('semesters.index'));
    }

    /**
     * Display the specified semester.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $semester = $this->semesterRepository->find($id);

        if (empty($semester)) {
            Flash::error('Semester not found');

            return redirect(route('semesters.index'));
        }

        return view('semesters.show')->with('semester', $semester);
    }

    /**
     * Show the form for editing the specified semester.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $semester = $this->semesterRepository->find($id);

        if (empty($semester)) {
            Flash::error('Semester not found');

            return redirect(route('semesters.index'));
        }

        return view('semesters.edit')->with('semester', $semester);
    }

    /**
     * Update the specified semester in storage.
     *
     * @param int $id
     * @param UpdatesemesterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesemesterRequest $request)
    {
        $semester = $this->semesterRepository->find($id);

        if (empty($semester)) {
            Flash::error('Semester not found');

            return redirect(route('semesters.index'));
        }

        $semester = $this->semesterRepository->update($request->all(), $id);

        Flash::success('Semester updated successfully.');

        return redirect(route('semesters.index'));
    }

    /**
     * Remove the specified semester from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $semester = $this->semesterRepository->find($id);

        if (empty($semester)) {
            Flash::error('Semester not found');

            return redirect(route('semesters.index'));
        }

        $this->semesterRepository->delete($id);

        Flash::success('Semester deleted successfully.');

        return redirect(route('semesters.index'));
    }
}
