
@extends('layouts.admin')
@section('content')

<style type="text/css">
  #imagePreview {
    width: 180px;
    height: 180px;
    background-position: center center;
    background-image:url("{{asset('images/'.$product->image) }}");
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>

<script type="text/javascript">
  $(document).ready(function(){
  $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
            }
    });
  });
</script>

      <div class="row" >
        <div class="col-xl-6">
         
              <h3 style="color:green">Edit Product</h3>
            
            <form role="form" method="POST" action="{{ url('admin/product/update/'.$product->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <p style="color: red">Please fill in the fields in *</p>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" id="uploadFile" name="image"><br>
                  <div id="imagePreview"></div>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Name <span style="color: red">*</span></label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter product name" style="width: 30%" value="{{$product->name}}" name="name" required="">
                </div>

                <div class="form-group">
                <label>Description </label><br>
                <textarea class="form-control" style="width: 30%; height: 200px;" placeholder="Enter product description" name="description">{{$product->description}}</textarea>
              </div>

                <div class="form-group">
                  <label for="exampleInputEmail1"> Price</label>
                  <div class="input-group">
                  <span class="input-group-addon">KES</span>
                  <input type="text" class="form-control" id="price" placeholder="Enter product price" style="width: 27%" value="{{$product->price * 100}}" name="price">
                  <script type="text/javascript">
                   $(document).ready(function() {
                   $('#price').priceFormat();
                   });
                  </script>
                </div>
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          <!-- /.box -->
        </div>
        
          </div>
  @stop
