@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
  
      <div class="row">
        <div class="col-xs-10">
              <h3>Product</h3>
            
            <!-- /.box-header -->
            
          @if (Session::has('flash_message'))

            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            {{ Session::get('flash_message') }}
           </div>
          @endif

           @if (Session::has('delete_message'))

            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            {{ Session::get('delete_message') }}
           </div>
          @endif
            <!-- /.box-header -->
            <!-- form start -->
            <a class="btn btn-info btn-sm" href="{{ URL::to('admin/product/add')}}">new product</a>
            <br><br>
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Price (Ksh.)</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;?>
                @foreach($products as $product)
                <tr>
                  <td>{{$i}}</td>
                  <td><img src="{{asset('images/'.$product->image)}}" width="50" height="50" /></td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{number_format($product->price,2)}}</td>
                  <td>

                  <div class="btn-group">
                  <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                  </button>
          
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{URL::to('admin/product/show/'.$product->id)}}">View</a></li>
                    <li><a href="{{URL::to('admin/product/edit/'.$product->id)}}">Update</a></li>
                    <li><a href="{{URL::to('admin/product/delete/'.$product->id)}}" onclick="return (confirm('Are you sure you want to delete this product?'))">Delete</a></li>
                    
                  </ul>
              </div>

                    </td>
                </tr>
                <?php $i++;?>
                @endforeach
                </tbody>
               
              </table>
            
          <!-- /.box -->
        </div>
        
          </div>
          </div>

          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
  @stop