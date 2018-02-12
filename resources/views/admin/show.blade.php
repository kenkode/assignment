
@extends('layouts.admin')
@section('content')

      <div class="row" >
        <div class="col-xl-6">
         
              <h3 style="color:green">View Product</h3>

              <br>
            <a class="btn btn-info btn-sm" href="{{ URL::to('admin/product/edit/'.$product->id)}}">Update</a>
            <a class="btn btn-warning btn-sm" href="{{ URL::to('admin/')}}">Go Back</a>
            <a class="btn btn-danger btn-sm" href="{{ URL::to('admin/product/delete/'.$product->id)}}" onclick="return (confirm('Are you sure you want to delete this product?'))">Delete</a>
            <br><br>
            
           <table border="1" class="table table-bordered table-hover" style="width: 800px !important">
              <tr>
                <td>Image:</td>
                <td><img src="{{asset('images/'.$product->image)}}" width="150" height="150" /></td>
              </tr>
              <tr>
                <td>Name:</td>
                <td>{{$product->name}}</td>
              </tr>
              <tr>
                <td>Description:</td>
                <td>{{$product->description}}</td>
              </tr>
              <tr>
                <td>Price:</td>
                <td>Ksh. {{number_format($product->price,2)}}</td>
              </tr>
              
            </table>
          <!-- /.box -->
        </div>
        
          </div>
  @stop
