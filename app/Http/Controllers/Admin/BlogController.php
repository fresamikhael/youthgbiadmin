<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    public function index()
    {

        if(request()->ajax())
        {
            $query = Blog::query();

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
                                    <a class="dropdown-item" href="' . route('blog-check', $item->id) . '">
                                        Lihat
                                    </a>
                                    <form action="' . route('blog-delete', $item->id) . '" method="POST">
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

        return view('pages.blog.index');
    }

    public function add()
    {
        return view('pages.blog.add');
    }

    public function addPost(Request $request)
    {
        $data = $request->all();

        Blog::create($data);

        return redirect()->route('blog-index');
    }

    public function check($id)
    {
        $data = Blog::findOrFail($id);

        return view('pages.blog.check', [
            'data' => $data
        ]);
    }

    public function destroy($id)
    {
        $item = Blog::findOrFail($id);
        $item->delete();

        return redirect()->route('blog-index');
    }
}
