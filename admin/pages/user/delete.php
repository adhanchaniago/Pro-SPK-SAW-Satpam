<?php
if ($db->deleteUser($_GET['id']) > 0) {
    echo "
    <script>
    window.location='index.php?page=pages/user/index';
    </script>
    ";
} else {
    echo "
<script>
window.location='index.php?page=pages/user/index';
</script>
";
}
