@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">修改一篇文章</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>修改失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/articles/'.$article_info->id) }}" method="POST">
                        {{--  这是 Laravel 中内置的应对 CSRF 攻击的防范措施，任何 POST PUT PATCH 请求都会被检测是否提交了 CSRF 字段  --}}
                        {{--  {!! csrf_field() !!} 实际上会生成一个隐藏的 input：<input type="hidden" name="_token" value="GYZ8OHDAbZICMcEvcTiS82qlZs2XrELklpEl159S">  --}}
                        {{--  这一行也可以这么写：<input type="hidden" name="_token" value="{{ csrf_token() }}">  --}}
                        {{ method_field('PUT') }}
                        {!! csrf_field() !!} 
                        <input type="text" name="title" class="form-control" required="required" placeholder="请输入标题" value="{{ $article_info->title }}">
                        <br>
                        <textarea name="body" rows="10" class="form-control" required="required" placeholder="请输入内容">{{ $article_info->body }}</textarea>
                        <br>
                        <button class="btn btn-lg btn-info">修改文章</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection