@extends("layouts.app")

@section("title", "| List Customer")

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col">
                            <h3 class="box-title">Hover Data Table</h3>
                            <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-default">Create New</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Customers Name</th>
                                <th>List of Vehicles</th>
                                <th :colspan="2">Execute</th>
                            </tr>
                            </thead>
                            <tbody>
                                <td>
                                    Respati Tri Susetyo
                                </td>
                                <td>
                                    <button class="btn btn-app" data-toggle="modal" data-target="#modal-list-vehicles">
                                        <span class="badge bg-teal">67</span>
                                        <i class="fa fa-inbox"></i> Orders
                                    </button>
                                </td>
                                <td>
                                    <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                    <a class="btn btn-warning">
                                        <i class="fa fa-times"></i> Delete
                                    </a>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>


    //MODAL
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Default Modal</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input class="form-control" id="inputName" placeholder="Name" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input class="form-control" id="inputEmail" placeholder="email" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                                <div class="col-sm-10">
                                    <input class="form-control" id="inputPhone"  placeholder="phone" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputVehicles" class="col-sm-2 control-label">Vehicles Type</label>

                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="inputPlat" class="col-sm-2 control-label">Types</label>
                                            <div class="col-md-10">
                                                <select class="form-control select2 select2-hidden-accessible no-margin" style="width: 100%;" tabindex="-1" aria-hidden="true" id="inputVehicles">
                                                    <option value="bmw">Mobil</option>
                                                    <option value="bmw">Motor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPlat" class="col-sm-2 control-label">Brands</label>
                                            <div class="col-md-10">
                                                <select class="form-control select2 select2-hidden-accessible  no-margin" style="width: 100%;" tabindex="-1" aria-hidden="true" id="inputVehicles">
                                                    <option value="bmw">BMW</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="margin-left: 0;">
                                            <label for="inputPlat" class="col-sm-2 control-label">Plat</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="plat">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-default btn-lg">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <hr class="divider">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-success">
                                        Save
                                        <i class="fa fa-check"></i>
                                    </button>
                                    <button class="btn btn-danger">
                                        Cancel
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- modal list vehicles -->
    <div class="modal fade" id="modal-list-vehicles">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">List Vehicles</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-6" style="display: inline-flex">
                                <i class="fa fa-car icon-size"></i>
                                <div class="rebox-detail">
                                    <h3 class="rebox-h3"><b>B 123 RIC</b></h3>
                                    <p class="rebox-p">BMW series</p>
                                </div>
                            </div>
                            <div class="col-xs-6" style="display: inline-flex">
                                <i class="fa fa-car icon-size"></i>
                                <div class="rebox-detail">
                                    <h3 class="rebox-h3"><b>B 123 RIC</b></h3>
                                    <p class="rebox-p">BMW series</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


@endsection