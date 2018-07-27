@extends("layouts.app")

@section("title" , "| Loyalty")

@section("content")

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
                                <th>Loyalty Program List</th>
                                <th>Happening In</th>
                                <th :colspan="2">Execute</th>
                            </tr>
                            </thead>
                            <tbody>
                            <td>
                               <h3><b>Promo Beli 1 Dapat 1 Hoka Hoka Bento</b></h3>
                            </td>
                            <td>
                                <h5>10 may 2018 - 15 may 2018</h5><br>
                                Mall Arion, Mall Ambasador, Mall Taman Anggrek
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
                                <label for="inputNamePromo" class="col-md-2 control-label">Name Promo</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="promo" id="inputNamePromo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription" class="col-md-2 control-label">Description</label>
                                <div class="col-md-10">
                                    <textarea name="description" class="form-control" id="inputDescription" rows="8"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputImage" class="col-md-2 control-label">Image</label>
                                <div class="col-md-10">
                                    <input type="file" name="file" id="inputImage" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputTempat" class="col-md-2 control-label">Place</label>
                                <div class="col-md-10">
                                    <input type="text" name="place" id="inputTempat" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDate" class="col-md-2 control-label">Date</label>
                                <div class="col-md-10">
                                    <div class="col-sm-6">
                                        <label for="inputfrom" class="control-label col-md-2">From</label>
                                        <input type="date" name="from" id="inputfrom" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputTo" class="control-label col-md-2">To</label>
                                        <input type="date" name="to" id="inputTo" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="button" name="save" class="btn btn-primary">Save</button>
                                    <button type="button" name="cancel" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

@endsection
