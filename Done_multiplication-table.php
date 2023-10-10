<style>
    /* element */
    table,tr,td {
        border: 1px solid black;
    }
    td{
        padding:20px;
    }
    /* .div */
    .container{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
</style>
<div class="container">
    <h1>Multiplication Table</h1>
    <h2>九九乘法表</h2>
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