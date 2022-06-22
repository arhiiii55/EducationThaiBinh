<?php
include_once("./header.php");
include_once("./sliderbar.php")
?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Text editor</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Text editor</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">
                    Trumbowyg - A lightweight WYSIWYG editor
                </h4>
                <p>
                    Light, translatable and customisable jQuery plugin. Beautiful
                    design, generates semantic code, comes with a powerful API.
                    <a target="_blank" href="https://alex-d.github.io/Trumbowyg/">Trumbowyg Documentation</a>
                </p>
                <p>
                    Note: Cross origin requests are only supported for protocol
                    schemes: http, data, chrome, chrome-extension, https. (on
                    localhost, this plugin don't show editor buttons)
                </p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-file"></i> WYSIWYG editor example</h3>
                            Editor and generated code are optimized for HTML5 support.
                            Compatible with all recents browsers like IE9+, Chrome,
                            Opera and Firefox.
                        </div>

                        <div class="card-body">
                            <textarea rows="3" class="form-control editor" name="content"></textarea>
                        </div>
                    </div>
                    <!-- end card-->
                </div>
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
        Powered by
        <a target="_blank" href="https://bootstrap24.com"
            title="Download free Bootstrap templates"><b>Bootstrap24.com</b></a>
    </span>
</footer>

<script src="./assets/js/modernizr.min.js"></script>
<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/moment.min.js"></script>

<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>

<script src="./assets/js/detect.js"></script>
<script src="./assets/js/fastclick.js"></script>
<script src="./assets/js/jquery.blockUI.js"></script>
<script src="./assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="./assets/js/admin.js"></script>
</div>
<!-- END main -->

<!-- BEGIN Java Script for this page -->
<script src="./assets/plugins/trumbowyg/trumbowyg.min.js"></script>
<script>
$(document).on("ready", function() {
    "use strict";
    $(".editor").trumbowyg();
});
</script>
<!-- END Java Script for this page -->
</body>

</html>