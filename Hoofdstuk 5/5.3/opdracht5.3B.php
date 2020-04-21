<?php
include ("function.php");
?>


<table style="width:100%">
    <tr>
        <td>naam:</td>
        <td>    <?php
            echo $_POST["naam"];
            ?>
        </td>
    </tr>
    <tr>
        <td>leeftijd:</td>
        <td>    <?php
            echo $_POST["age"];
            ?>
        </td>
    </tr>
    <tr>
        <td>gemeente:</td>
        <td>    <?php
            echo $_POST["gemeente"];
            ?>
        </td>
    </tr>
    <tr>
        <td>Aantal inwoners:</td>
        <td>    <?php
            echo $_POST["inwoners"];
            ?>
        </td>
    </tr>
    <tr>
        <td>kenissen:</td>
        <td>    <?php
            echo $_POST["kenjePersonen"];
            ?>
        </td>
    </tr>
    <tr>
        <td>De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken:</td>
        <td>

        </td>
    </tr>
    <tr>
        <td>aantal besmetingen:</td>
        <td>    <?php
            echo $_POST["infected"];
            ?>
        </td>
    </tr>
    <tr>
        <td>Kans per ontmoeting op besmetting:</td>
        <td>    <?php
            echo echoKans();
            ?>
        </td>
    </tr>
    <tr>
        <td>Kansis 1 op:</td>
        <td>    <?php
                $chanceCalculate = getKans1Op();
                echo($chanceCalculate);
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo vergelijkOorzaken($chanceCalculate); ?></td>
        <td>
        </td>
    </tr>
</table>
