<script>
$(function() {
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });




    // submited the pdf
    <?php
        // Check if the session is active (you can replace this with your actual condition)

        if (isset($_SESSION['success'])) {
        ?>
    // Display the Toast automatically when the page loads
    $(document).ready(function() {
        Toast.fire({
            icon: 'success',
            title: '<?php echo $_SESSION['success'] ?>.'
        });
    });
    <?php
        }
        unset($_SESSION['success']);
        ?>

    // error file upload

    <?php
        // Check if the session is active (you can replace this with your actual condition)

        if (isset($_SESSION['error'])) {
        ?>
    // Display the Toast automatically when the page loads
    $(document).ready(function() {
        Toast.fire({
            icon: 'error',
            title: '<?php echo $_SESSION['error'] ?>.'
        });
    });
    <?php
        }
        unset($_SESSION['error']);
        ?>

    // warning file size

    <?php
        // Check if the session is active (you can replace this with your actual condition)

        if (isset($_SESSION['warning'])) {
        ?>
    // Display the Toast automatically when the page loads
    $(document).ready(function() {
        Toast.fire({
            icon: 'warning',
            title: '<?php echo $_SESSION['warning'] ?>.'
        });
    });
    <?php
        }
        unset($_SESSION['warning']);
        ?>
});
</script>