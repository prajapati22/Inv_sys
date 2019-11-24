<script>
    // declaring function for button click
    function log_in() {
        $('#log_in').addClass('active');
        $('#admin_login').removeClass('active');
        $('#sign_up').removeClass('active');
    }

    function admin_login() {
        $('#admin_login').addClass('active');
        $('#log_in').removeClass('active');
        $('#sign_up').removeClass('active');
    }

    function sign_up() {
        $('#sign_up').addClass('active');
        $('#admin_login').removeClass('active');
        $('#log_in').removeClass('active');
    }
    // exuciting function
    $('#log_in').click(function () {
        log_in();
    });
    $('#admin_login').click(function () {
        admin_login();
    });
    $('#sign_up').click(function () {
        sign_up();
    });

</script>
