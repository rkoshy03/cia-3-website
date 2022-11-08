<!-- Footer Section Start -->
<footer>
    <a href="">2021 | Easy Coding | All Right Reserved</a>
</footer>
<!-- Footer Section End -->


<!-- Popup Section Start -->

<!-- Popup For Login Account Start -->


<div class="modal fade" id="popupforlogin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <!-- Login Account Start -->
                <div class="container">
                    <div class="row_custom">
                        <div class="col-sm-11">
                            <form action="">
                                <div id="login_main_message"></div>
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Email</label>

                                    <small id="login_email_mess"></small>

                                    <input type="email" class="font-weight-bold form-control" id="login_email" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Password</label>

                                    <small id="login_password_mess"></small>

                                    <input type="password" class="font-weight-bold form-control" id="login_password" placeholder="Enter Your Password">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Login Account End -->


            </div>
            <div class="modal-footer">
                <div class="mr-2" id="spinner"></div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="login_button" class="btn btn-danger">Login</button>
            </div>
        </div>
    </div>
</div>
<!-- Popup For Login Account End -->

<!-- Popup Section End -->



<!-- Script For Bootstrap -->
<script src="js/jquery.js"></script>
<script src="js/pooper.js"></script>
<script src="js/bootstrap.min.js"></script>


<!-- Custom JS -->
<script src="js/custom.js"></script>

<!-- Custom Script -->
<script>
    $(document).scroll(function() {
        $(".navbar").toggleClass("scroll", $(this).scrollTop() > $(".navbar").height());
    })
</script>

</body>

</html>