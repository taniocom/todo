@extends('layout.master')
@section('content')
    <hr>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                เพิ่มรายการ
            </h4>
        </div>
        <div class="panel-body">
            <form action="/update" method="post" role="form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputName">กรอกชื่อรายการ :: </label>
                    <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control">
                    <input type="hidden" name="product_id" value="{{$product->product_id}}">
                </div>
                <div class="form-group">
                    <label for="selectCategory">เลือกหมวดหมู่ :: </label>
                    <select name="category_id" id="" class="form-control">
                        @foreach($categories as $category)
                            <option @if($product->category_id==$category->category_id) selected
                                    @endif value="{{$category->category_id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> แก้ไขข้อมูล</button>
            </form>
        </div>
    </div>
    <hr>
    <p>&copy; 2017 Bundit Nuntates</p>
@endsection