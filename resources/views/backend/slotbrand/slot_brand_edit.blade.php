@extends('admin.admin_master')
@section('adminarea')



<!-- Content Wrapper. Contains page content -->

<div class="container-full">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="row">




            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Slot Brands</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <form method="post" action="{{ route('brand.update',$brand->id) }} " enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$brand->id}}">
                                <input type="hidden" name="old_image" value="{{$brand->brand_image}}">

                                <div class="form-group">
                                    <h5>Brand name<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <input type="text" name="brandname" class="form-control" value="{{$brand->brandname}}">
                                        @error('brandname')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Address<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <input type="text" name="address" class="form-control" value="{{$brand->address}}">
                                        @error('address')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>No of Slots<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <input type="text" name="slot_numbers" class="form-control" value="{{$brand->slot_numbers}}">
                                        @error('slot_numbers')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Price<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <input type="text" name="selling_price" class="form-control" value="{{$brand->selling_price}}">
                                        @error('slot_numbers')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Image<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <input type="file" name="brand_image" class="form-control" value="{{$brand->brand_image}}">
                                        @error('brand_image')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-xs-rigt">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


                <!-- /.box -->
            </div>








        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->







@endsection