<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fichiers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <table class="table">
    <thead>
        <tr>
          <th scope="col">Surname</th>
          <th scope="col">Firstname</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">City</th>
          <th scope="col">State</th>
        </tr>
      </thead>
            <tbody>
                <?php 
                $list = file('https://ncode.amorce.org/customers.csv');
                    foreach($list as $key => $value){
                        $pieces = explode(",", $value);
                        echo '<tr>';
                        foreach($pieces as $key2 => $value2){
                            echo "<td>".$value2.'</td>';
                        }
                        echo "</tr>";
                        }
                ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>