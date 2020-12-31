@extends('layouts.admin')
  
@section('title')
  <title>TRANG CHỦ</title>    
@endsection

@section('content')
  
  <div class="content-wrapper">
 
    @include('category.content-header', ['name'=>'Category', 'key'=>'Add'])
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        
        <div class="col-md-12">
          <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label>Tên Danh Mục</label>
              <input type="text" class="form-control" name="name"
               placeholder="Nhập tên danh mục">
            </div>

            <div class="form-group">
              <label >Chọn Danh Mục Cha</label>
              <select class="form-control" name="parent_id">
                <option value="0">Chọn Danh Mục Cha</option>
                {!! $htmlOption !!}
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
 
@endsection
