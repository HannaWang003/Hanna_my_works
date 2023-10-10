<style>
    /* element */
    td {
        border: 1px solid black;
    }
</style>
<!-- Level 1_直列示九九乘法-->
<div class="container">
    <h1>直列示九九乘法</h1>
    <?php
    for ($j = 2; $j < 10; $j++) {
        for ($i = 1; $i < 10; $i++) {
            echo "$j&nbspx&nbsp$i=" . $i * $j . "<br>";
        }
    }
    ?>
</div>
<!--Level 1-1_橫列示九九乘法-->
<div class="container">
    <h1>橫列示九九乘法</h1>
    <?php
    for ($j = 2; $j < 10; $j++) {
        for ($i = 1; $i < 10; $i++) {
            echo "$j&nbspx&nbsp$i=" . $i * $j . "&nbsp,&nbsp";
        }
        echo "<br>";
    }
    ?>
</div>
<!--Level 2_將各乘組分隔開來-->
<div class="container">
    <h1>將各乘組分隔開來</h1>
    <?php
    for ($j = 2; $j < 10; $j++) {
        for ($i = 1; $i < 10; $i++) {
            echo "$j&nbspx&nbsp$i=" . $i * $j . "<br>";
        }
        echo "<br>";
    }
    ?>
</div>
<!--Level 3_表格化-->
<div class="container">
    <h1>表格化</h1>
    <?php
    for ($j = 2; $j < 10; $j++) {
        echo "<td>";
        for ($i = 1; $i < 10; $i++) {
            echo "$j&nbspx&nbsp$i=" . $i * $j . "<br>";
        }
        echo "</td>";
    }
    ?>
</div>
</table>
<!--Level 4_將表格分成2列-->
<div class="container">
    <h1>將表格分成2列</h1>
    <table>
        <tr>
            <?php
            for ($j = 2; $j < 10; $j++) {
                if ($j == 6) {
                    echo "</tr><tr>";
                }
                echo "<td>";
                for ($i = 1; $i < 10; $i++) {
                    echo "$j&nbspx&nbsp$i=" . $i * $j . "<br>";
                }
                echo "</td>";
            }
            ?>
        </tr>
    </table>
</div>