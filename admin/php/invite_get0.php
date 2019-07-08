<?php
    require("connect.php");
    $sql = "SELECT id, link FROM invite WHERE isused='no' LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $link = $row["link"];
        }
    }
    $sql = "update invite set isused = 'yes',update_time = NOW() where isused='no' limit 1";
    $result = $conn->query($sql);
    //echo $link;
    echo "<input id=\"ButtonText\" type=\"text\" name=\"\" value=\"$link\">";
    $conn->close();
 ?>
