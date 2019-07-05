<?php
class checkingCondition {
    // Function is checking condition
    function checkCond($get, $memberof) {
        if ($get == NULL) {
            header('Location: index.php');
        }
        $memberof = $get[0]["memberof"];
        if (in_array("CN=YourGroup,OU=Distribution,OU=Role Based Access Permissions,OU=_Groups,DC=example,DC=com", $memberof)) {
            //echo "Search Group: YourGroup . "<br>";
            //echo "Found: YourGroup" . "<br>";
        } else {
            header('Location: index.php');
        }
    }
}