<?php
session_start();
if (!isset($_SESSION['userid'])) {
?>
    <script>
        alert('잘못된 접근입니다.');
        history.back();
    </script>
<?php
}
?>