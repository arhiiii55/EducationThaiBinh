<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Blog posts</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Blog posts</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">

                        <div class="card-header">
                            <span class="pull-right">
                                <button class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#modal_add_user">
                                    <i class="fas fa-user-plus" aria-hidden="true"></i> Add khóa học</button>
                            </span>
                            <div class="modal fade custom-modal" tabindex="-1" role="dialog"
                                aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <form action="#" method="post" enctype="multipart/form-data">

                                            <div class="modal-header">
                                                <h5 class="modal-title">Add new user</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Full name (required)</label>
                                                            <input class="form-control" name="name" type="text"
                                                                required />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Valid Email (required)</label>
                                                            <input class="form-control" name="email" type="email"
                                                                required />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Password (required)</label>
                                                            <input class="form-control" name="password" type="text"
                                                                required />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Role</label>
                                                            <select name="role_id" class="form-control" required>
                                                                <option value="">- select -</option>
                                                                <optgroup label="Staff member">
                                                                    <option value="1">Administrator</option>
                                                                    <option value="2">Manager</option>
                                                                    <option value="3">Author</option>
                                                                </optgroup>

                                                                <optgroup label="Registered member">
                                                                    <option value="4">User</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Skype (optional)</label>
                                                            <input class="form-control" name="skype" type="text" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Email verified</label>
                                                            <select name="email_verified" class="form-control">
                                                                <option value="1">YES</option>
                                                                <option value="0">NO</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Active</label>
                                                            <select name="active" class="form-control">
                                                                <option value="1">YES</option>
                                                                <option value="0">NO</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label>Avatar image (optional):</label>
                                                    <br />
                                                    <input type="file" name="image">
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary">Add user</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <h3>
                                <i class="far fa-user"></i> All users
                            </h3>
                        </div>
                        <!-- end card-header -->

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 300px">Article details</th>
                                            <th style="width:110px">Category</th>
                                            <th style="min-width:110px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="blog_list"><img class="img-fluid d-none d-lg-block"
                                                        alt="image" src="https://via.placeholder.com/180x120" />
                                                </div>
                                                <h4> Vivamus condimentum rutrum odio</h4>
                                                <p>Posted by <b>Administrator</b> at Nov 29 2018</p>
                                                <p>Nulla cursus maximus lacus at efficitur. In lobortis ante
                                                    vitae nulla semper, in volutpat libero aliquet. Morbi sit
                                                    amet nibh vitae metus interdum finibus sed nec nisl. Ut quam
                                                    dolor, bibendum id maximus ut, suscipit consectetur sem.</p>
                                            </td>

                                            <td>Blog</td>

                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm btn-block"><i
                                                        class="far fa-edit"></i> Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i
                                                        class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="blog_list"><img class="img-fluid d-none d-lg-block"
                                                        alt="image" src="https://via.placeholder.com/180x120" />
                                                </div>
                                                <h4>Duis scelerisque eros sit amet risus lobortis</h4>
                                                <p>Posted by <b>Administrator</b> at Nov 29 2018</p>
                                                <p>Nulla cursus maximus lacus at efficitur. In lobortis ante
                                                    vitae nulla semper, in volutpat libero aliquet. Morbi sit
                                                    amet nibh vitae metus interdum finibus sed nec nisl. Ut quam
                                                    dolor, bibendum id maximus ut, suscipit consectetur sem.</p>
                                            </td>

                                            <td>Blog</td>

                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm btn-block"><i
                                                        class="far fa-edit"></i> Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i
                                                        class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="blog_list"><img class="img-fluid d-none d-lg-block"
                                                        alt="image" src="https://via.placeholder.com/180x120" />
                                                </div>
                                                <h4>Vestibulum justo et feugiat consectetur</h4>
                                                <p>Posted by <b>Administrator</b> at Nov 29 2018</p>
                                                <p>Nulla cursus maximus lacus at efficitur. In lobortis ante
                                                    vitae nulla semper, in volutpat libero aliquet. Morbi sit
                                                    amet nibh vitae metus interdum finibus sed nec nisl. Ut quam
                                                    dolor, bibendum id maximus ut, suscipit consectetur sem.</p>
                                            </td>

                                            <td>News</td>

                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm btn-block"><i
                                                        class="far fa-edit"></i> Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i
                                                        class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="blog_list"><img class="img-fluid d-none d-lg-block"
                                                        alt="image" src="https://via.placeholder.com/180x120" />
                                                </div>
                                                <h4>Quisque ac justo porttitor mi egestas fermentum</h4>
                                                <p>Posted by <b>Administrator</b> at Nov 29 2018</p>
                                                <p>Nulla cursus maximus lacus at efficitur. In lobortis ante
                                                    vitae nulla semper, in volutpat libero aliquet. Morbi sit
                                                    amet nibh vitae metus interdum finibus sed nec nisl. Ut quam
                                                    dolor, bibendum id maximus ut, suscipit consectetur sem.</p>
                                            </td>

                                            <td>News</td>

                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm btn-block"><i
                                                        class="far fa-edit"></i> Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i
                                                        class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="blog_list"><img class="img-fluid d-none d-lg-block"
                                                        alt="image" style="max-width:180px; height:auto;"
                                                        src="https://via.placeholder.com/180x120" /></div>
                                                <h4>Aenean vehicula erat id mauris porttitor</h4>
                                                <p>Posted by <b>Administrator</b> at Nov 29 2018</p>
                                                <p>Nulla cursus maximus lacus at efficitur. In lobortis ante
                                                    vitae nulla semper, in volutpat libero aliquet. Morbi sit
                                                    amet nibh vitae metus interdum finibus sed nec nisl. Ut quam
                                                    dolor, bibendum id maximus ut, suscipit consectetur sem.</p>
                                            </td>

                                            <td>News</td>

                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm btn-block"><i
                                                        class="far fa-edit"></i> Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i
                                                        class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <!-- end card-body -->

                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->