
<!-- 
F. Dave Damon V. Pararuan
BSIT 2-2


-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTECH 2201</title>
    <style>
        body {
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    margin: 0;
    font-size:medium;
    background-color: black;
}

table {
    border-collapse: collapse;
    width: 50%;
    margin: 20px auto;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px; /* Adjust padding as needed */
    text-align: center;
    font-size: 12px; /* Adjust font size as needed */
    line-height: 1.5; /* Adjust line-height for vertical alignment */
    font-size:20px;
    color:black;
}

.header-row th {
    vertical-align: middle;
}

.background {
    background-repeat: no-repeat;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
    background-color: white;
    width: 80%;
    margin: 0 auto;
    border-radius: 15%; /* Adjust border radius as needed */
}

.center {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh; /* Make sure the container takes at least the full viewport height */
}
h1 {
    text-align: center;
}
p{
    text-align:center;
}

    </style>
</head>
<body>
    <div class="center">
        <div style="padding: 50px;" class="background">
            <table>
            <h1> Multiplication Table 20x20</h1>

                <tr class="header-row">
                    <?php 
                        for ($i = 0; $i <= 20; $i++) {
                            echo "<b><th>" . $i . "</b></th>";
                        }
                    ?>
                </tr>
                <?php 
                    for ($i = 1; $i <= 20; $i++) {
                        echo "<tr>";
                        echo "<b><td>" . $i . "</b></td>";

                        for ($j = 1; $j <= 20; $j++) {
                            $result = $i * $j;
                            echo "<td>$result</td>";
                        }

                        echo "</tr>";
                    }
                ?>
            </table>
            <br>
            <p>I used this design because of the simplicity of it. It is simple and easy to understand and see the output.</p>

        </div>
    </div>
</body>

</html>
