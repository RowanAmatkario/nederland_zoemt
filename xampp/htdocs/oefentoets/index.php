<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefentoets</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <td>MA</td>
        <td>DI</td>
        <td>WO</td>
        <td>DO</td>
        <td>VR</td>
        <td>ZA</td>
        <td>ZO</td>
    </tr>
    </thead>
    <?php
    $teller = 1;
    $start = 6;

    echo "</tr>";
    for ($weken = 0; $weken < 5; $weken++) {
        echo "<tr>";
        for ($dag = 1; $dag <= 7; $dag++) {
            if ($weken == 0 && $dag < $start) {
                echo "<td> </td>";
            } else {
                if ($teller <= 30) {
                    echo "<td>" . $teller . "</td>";
                    $teller++;
                } else {
                    echo "<td> </td>";
                }
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>