<?php
if ($db->deletePeserta($_GET['id']) > 0) {
    echo "
    <script>
    window.location='index.php?page=pages/peserta/index';
    </script>
    ";
} else {
    echo "
<script>
window.location='index.php?page=pages/peserta/index';
</script>
";
}
