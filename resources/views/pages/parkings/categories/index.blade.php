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
                                <th>Categories List</th>
                                <th :colspan="2">Execute</th>
                            </tr>
                            </thead>
                            <tbody>
                            <td>
                                <h3><b>Pusat Perbelanjaan</b></h3><br>
                                Jenis dari pusat perbelanjaan yang secara arsitektur berupa bangunan tertutup dengan suhu yang diatur dan memiliki jalur untuk berjalan jalan yang terat...
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
                        <div class="body-box">
                            <div class="form-group">
                                <label for="inputNameCategori" class="control-label col-md-2">Category Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="category_name" id="inputNameCategori">
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
