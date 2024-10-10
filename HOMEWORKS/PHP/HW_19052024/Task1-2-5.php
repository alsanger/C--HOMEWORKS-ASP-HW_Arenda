<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW2</title>
</head>
<body>
    <h2><b>Task 1</b><br/></h2>
    <form method='POST'>
    <input type='text' name='nameTask1' />
    <input type='submit' value='Send'></form>

<?php
if(isset($_POST["nameTask1"]))
{
    $value = $_POST["nameTask1"];
    echo "<h3>$value</h3>";
}
?>

<!--////////////////////////////////////////////////////////////////////////////-->
    <h2><b>Task 2</b><br/></h2>
    <form method='POST'>
    <input type='text' name='nameTask2' />
    <input type='submit' value='Search'></form>


<?php
$countries = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
    "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia",
    "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso",
    "Burundi", "Côte d'Ivoire", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic",
    "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Croatia"];

if(isset($_POST["nameTask2"]))
{
    $searchName = $_POST["nameTask2"];
    foreach ($countries as $country)
    {
        $position = stripos($country, $searchName, 0);
        if ($position !== false)
        {
            for ($i = 0; $i < strlen($country); $i++)
            {
                if ($i >= $position && $i < $position + strlen($searchName))
                    echo "<span style='font-size: 20px; color: red;'>$country[$i]</span>";
                else
                    echo "<span style='font-size: 20px;'>$country[$i]</span>";
            }
            echo "</br>";
        }
    }
}
?>
</body>
</html>