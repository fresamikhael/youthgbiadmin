<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MemberData;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MemberDataController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $query = MemberData::query();

            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                    type="button"
                                    id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Aksi
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('member-data-check', $item->id) . '">
                                    Lihat
                                </a>
                                <form action="' . route('member-data-delete', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="dropdown-item text-danger">
                                        Hapus
                                    </button>
                                </form>
                            </div>

                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
                ;
        }

        return view('pages.member-data.index');
    }

    public function add()
    {
        return view('pages.member-data.add');
    }

    public function addPost(Request $request)
    {
        $data = $request->all();

        MemberData::create($data);

        return redirect()->route('member-data-index');
    }

    public function check($id)
    {
        $data = MemberData::findOrFail($id);

        return view('pages.member-data.check', [
            'data' => $data
        ]);
    }

    public function destroy($id)
    {
        $item = MemberData::findOrFail($id);
        $item->delete();

        return redirect()->route('member-data-index');
    }
}
