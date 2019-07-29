<?php

namespace App\Http\Controllers\Admin;

use App\Models\CategoryNew;
use App\Models\News;
use Illuminate\Http\Request;

use App\Models\Slug;
use App\Http\Controllers\Controller;
use Datatables;

class NewController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('permission:post_list', ['only' => ['index']]);
//        $this->middleware('permission:post_create', ['only' => ['create', 'store']]);
//        $this->middleware('permission:post_edit', ['only' => ['edit', 'update']]);
//        $this->middleware('permission:post_delete', ['only' => ['delete']]);
//        $this->middleware('permission:post_view', ['only' => ['show']]);
//
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = News::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a  href="'.route('post.edit', $row->id).'" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                        <i class="la la-edit"></i>
                      </a> <a  href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill deleteUser" title="View">
                      <i class="la la-close"></i>
                    </a>';

                    return $btn;
                })
                ->rawColumns(['action'])

                ->make(true);
        }
        return view('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= CategoryNew::all();
        return view('admin.post.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:slugs',
            'description' => 'required',
            'thumbnail'=>'required',
            'body'=>'required',
            'postcate_id' => 'required'
        ]);
        $slug = new Slug;
        $slug->slug = $request->slug;
        $slug->type = 'new';
        $slug->save();
        $data = new News();
        $data->title = $request->title;
        $data->slug_id = $slug->id;
        $data->description = $request->description;
        $data->image = $request->thumbnail;
        $data->content = $request->body;
        $data->cid = $request->postcate_id;
        $newsave = $data->save();
        if(!$newsave){
            Slug::findOrFail($slug->id)->delete();
        }
        return redirect()->route('post.index')
            ->with('success','Tạo mới bài viết thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data2 = News::find($id);
        $data = CategoryNew::all();
        return view('admin.post.edit',compact('data2','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = News::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:slugs,slug,'.$data->slug_id ,
            'description' => 'required',
            'thumbnail'=>'required',
            'body'=>'required',
            'postcate_id' => 'required'
        ]);


        $data->title = $request->title;
        $data->description = $request->description;
        $data->image = $request->thumbnail;
        $data->body = $request->body;
        $data->postcate_id = $request->postcate_id;
        $data->save();
        $slug = Slug::findOrFail($data->slug_id);
        $slug->slug = $request->slug;
        $slug->type = 'post';
        $slug->save();
        return redirect()->route('post.index')
            ->with('success','Sửa bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = News::find($id);
        $data->delete();
        Slug::findOrFail($data->slug_id)->delete();
        return redirect()->route('post.index')
            ->with('success','Xóa bài viết thành công');
    }
}
