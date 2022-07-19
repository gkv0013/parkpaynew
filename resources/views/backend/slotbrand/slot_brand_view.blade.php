@extends('admin.admin_master')
@section('adminarea')



<!-- Content Wrapper. Contains page content -->

<div class="container-full">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-8">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Slot Brands</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Brandname</th>
                                        <th>Address</th>
                                        <th>Slot numbers</th>
                                        <th>Image</th>
                                        <th>selling_price (₹/min) </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($slotplace as $items)
                                    <tr>
                                        <td>{{$items->brandname}}</td>
                                        <td>{{$items->address}}</td>
                                        <td>{{$items->slot_numbers}}</td>
                                        <td><img src="{{asset($items->brand_thumbnail)}}" style="width: 70px; height: 40px;"></td>
                                        <td>{{$items->selling_price}}</td>
                                        <td>
                                            <a href="{{ route('brand.edit',$items->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ route('brand.delete',$items->id) }}" class="btn btn-danger" id="delete">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


                <!-- /.box -->
            </div>
            <!-- /.col -->


            <div class="col-4">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Slot Brands</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <form method="post" action="{{ route('brand.store') }} " enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h5>Brand name<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <input type="text" name="brandname" class="form-control">
                                        @error('brandname')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Address<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <input type="text" name="address" class="form-control">
                                        @error('address')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>No of Slots<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <input type="text" name="slot_numbers" class="form-control">
                                        @error('slot_numbers')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Price<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <input type="text" name="selling_price" class="form-control">
                                        @error('slot_numbers')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Image<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <input type="file" name="brand_image" class="form-control">
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