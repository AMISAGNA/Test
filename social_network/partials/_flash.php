<?php
if(isset($_SESSION['notification']['message'])) {
    echo '<div id="notification-alert" class="container">
            <div class="alert alert-' . $_SESSION['notification']['message'] . ' alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 onclick="closeNotificationAlert()">' . $_SESSION['notification']['message'] . '</h4>
            </div>
          </div>';
    $_SESSION['notification'] = [];
}
?>

<script>
    function closeNotificationAlert() {
        var alert = document.getElementById('notification-alert');
        alert.style.display = 'none';
    }
</script>
