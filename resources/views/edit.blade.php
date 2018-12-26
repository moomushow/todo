@extends('layout.master')
@section('title', 'หน้าหลัก')
@section('content')
<hr>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
        แก้ไขรายการ
        </h4>
    </div>
    <div class="panel-body">
        <form action="/update" method="post" role="form">
            @csrf
            <input type="hidden" name="product_id" value="{{product->product_id}}">
            <div class="form-group">
                <label for="inputName">กรอกชื่อรายการ :: </label>
                <input type="text" name="name" value="{{$product->product_name}}" placeholder="ชื่อรายการ" class="form-control">
            </div>
            <div class="form-group">
                <label for="selectCategory">เลือกหมวดหมู่ :: </label>
                <select name="category_id" id="" selected={{$category->category_name}} class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->category_id}}">{{$category->category_id}}-{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> บันทึก</button>
        </form>
    </div>
</div>
@endsection
