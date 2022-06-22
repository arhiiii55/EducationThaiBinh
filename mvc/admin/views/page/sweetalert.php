<?php include_once("./header.php");
include_once("./sliderbar.php") ?>
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">SweetAlert</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">SweetAlert</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>
                                <i class="far fa-hand-pointer"></i> Show simple alert
                            </h3>
                        </div>

                        <div class="card-body">

                            <a class="btn btn-primary" href="#" role="button" id="example1">Show alert</a>
                        </div>
                    </div>
                    <!-- end card-->
                </div>



                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>
                                <i class="far fa-hand-pointer"></i> Alert with title and description
                            </h3>
                        </div>

                        <div class="card-body">

                            <a class="btn btn-primary" href="#" role="button" id="example2">Show alert</a>

                        </div>
                    </div>
                    <!-- end card-->
                </div>



                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>
                                <i class="far fa-hand-pointer"></i> Alert with title, description and icon
                            </h3>
                        </div>

                        <div class="card-body">

                            <a class="btn btn-danger" href="#" role="button" id="example3">Show alert</a>

                        </div>
                    </div>
                    <!-- end card-->
                </div>



                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>
                                <i class="far fa-hand-pointer"></i> Example with multiple options
                            </h3>
                        </div>

                        <div class="card-body">

                            <a class="btn btn-danger" href="#" role="button" id="example4">Show alert</a>

                        </div>
                    </div>
                    <!-- end card-->
                </div>


                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>
                                <i class="far fa-hand-pointer"></i> Example with input
                            </h3>
                        </div>

                        <div class="card-body">

                            <a class="btn btn-info" href="#" role="button" id="example5">Show alert</a>

                        </div>
                    </div>
                    <!-- end card-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>
                                <i class="far fa-hand-pointer"></i> Advanced example with AJAX
                            </h3>
                        </div>

                        <div class="card-body">

                            <a class="btn btn-info" href="#" role="button" id="example6">Show alert</a>

                        </div>
                    </div>
                    <!-- end card-->
                </div>

            </div>


            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Documentation</h4>
                <p>You can find examples and documentation about SweetAlert plugin here:
                    <a target="_blank" href="https://sweetalert.js.org/">SweetAlert documentation</a>
                </p>
            </div>


        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->

<footer class="footer">
    <span class="text-right">
        Copyright <a target="_blank" href="#">Your Company</a>
    </span>
    <span class="float-right">
        <!-- Copyright footer link MUST remain intact if you download free version. -->
        <!-- You can delete the links only if you purchased the pro or extended version. -->
        <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
        Powered by <a target="_blank" href="https://bootstrap24.com"
            title="Download free Bootstrap templates"><b>Bootstrap24.com</b></a>
    </span>
</footer>

<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="assets/js/admin.js"></script>

</div>
<!-- END main -->

<!-- BEGIN Java Script for this page -->
<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
<script>
$(document).on('ready', function() {

    $(document).on("click", "#example1", function() {
        swal("Hello world!");
    });

    $(document).on("click", "#example2", function() {
        swal("Here's the title!", "...and here's the text!")
    });

    $(document).on("click", "#example3", function() {
        swal("Good job!", "You clicked the button!", "success")
    });


    $(document).on("click", "#example4", function() {
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    });

    $(document).on("click", "#example5", function() {
        swal("Write something here:", {
                content: "input",
            })
            .then((value) => {
                swal(`You typed: ${value}`);
            });
    });

    $(document).on("click", "#example6", function() {
        swal({
                text: 'Search for a movie. e.g. "Titanic".',
                content: "input",
                button: {
                    text: "Search!",
                    closeModal: false,
                },
            })
            .then(name => {
                if (!name) throw null;

                return fetch(`https://itunes.apple.com/search?term=${name}&entity=movie`);
            })
            .then(results => {
                return results.json();
            })
            .then(json => {
                const movie = json.results[0];

                if (!movie) {
                    return swal("No movie was found!");
                }

                const name = movie.trackName;
                const imageURL = movie.artworkUrl100;

                swal({
                    title: "Top result:",
                    text: name,
                    icon: imageURL,
                });
            })
            .catch(err => {
                if (err) {
                    swal("Oh noes!", "The AJAX request failed!", "error");
                } else {
                    swal.stopLoading();
                    swal.close();
                }
            });
    });

});
</script>
<!-- END Java Script for this page -->

</body>

</html>