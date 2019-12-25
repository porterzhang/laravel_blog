<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{
    //
     //新闻评论管理的列表方法
    public function index()
    {
        return view('admin/comment/index')->withComments(Comment::where([])->orderBy("id", 'desc')->get());
    }


      //删除功能
    public function destroy($id)
    {
        Comment::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }

}
