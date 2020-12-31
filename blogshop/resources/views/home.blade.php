  @extends('layouts.admin')
  
  @section('title')
    <title>TRANG CHỦ</title>    
  @endsection

  @section('content')
    
    <div class="content-wrapper">
     
    @include('category.content-header', ['name'=>'Home', 'key'=>'Home'])
     
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
            <a href="{{ route('category.create')}}" class="btn btn-success float-right" >Add</a>
          </div>
          <div class="col-md-12">
            Danh Mục
          </div>
            
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
   
  @endsection
 