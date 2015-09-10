<div id="content" class="col-md-6">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Please Login</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" placeholder="Email" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input name="password" type="password" class="form-control" placeholder="Password" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-default">Cancel</button>
                </div>
                <div class="form-group pull-right">
                    <button type="submit" class="btn btn-info" formaction="">Sign in</button>
                    <button type="submit" class="btn btn-info" formaction="add">Register</button>
                </div>
            </div><!-- /.box-footer -->
        </form>
    </div><!-- /.box -->
</div>