<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = User::all();
        return view('employee.index', compact('employees'));
    }

    public function getData(Request $request)
    {
        if($request->ajax()) {
            $employees = User::with('department');
            return Datatables::of($employees)
                ->addIndexColumn()
                ->setRowClass('{{ $id % 2 == 0 ? "alert-success" : "alert-danger" }}')
                ->setRowId(function($user) {
                    return $user->id;
                })
                ->addColumn('department_name', function ($row) {
                    return $row->department ? $row->department->title : '-';
                })
                ->addColumn('created_at', function ($row) {
                // Format the creation date
                return $row->created_at ? $row->created_at->format('Y-m-d H:i:s') : '-';
                })
                ->editColumn('is_present', function ($row) {
                    if($row->is_present) {
                        return '<span class="badge badge-success">Present</span>';
                    } else {
                        return '<span class="badge badge-danger">Leave</span>';
                    }
                })
                ->addColumn('action', function ($row) {
                    return view('components.user-actions', compact('row'))->render();
                })
                ->rawColumns(['action','is_present'])
                ->make(true);
        }
        return view('employees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
