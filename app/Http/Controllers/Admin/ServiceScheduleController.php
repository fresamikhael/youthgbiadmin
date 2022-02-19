<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceSchedule;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ServiceScheduleController extends Controller
{
    public function index()
    {

        if(request()->ajax())
        {
            $query = ServiceSchedule::query();

            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                        type="button"
                                        id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('service-schedule-check', $item->id) . '">
                                        Lihat
                                    </a>
                                    <form action="' . route('service-schedule-delete', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
                ;
        }

        return view('pages.service-schedule.index');
    }

    public function add()
    {
        return view('pages.service-schedule.add');
    }

    public function addPost(Request $request)
    {
        $data = $request->all();

        ServiceSchedule::create($data);

        return redirect()->route('service-schedule-index');
    }

    public function check($id)
    {
        $data = ServiceSchedule::findOrFail($id);

        return view('pages.service-schedule.check', [
            'data' => $data
        ]);
    }

    public function destroy($id)
    {
        $item = ServiceSchedule::findOrFail($id);
        $item->delete();

        return redirect()->route('service-schedule-index');
    }
}
