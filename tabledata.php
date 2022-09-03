<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dark.css">
    <title>Library</title>
</head>
<body>
<div class="logout"><a href="index.php">Go Back</a></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 style="text-align: center;">WELCOME TO MOVIE LIBRARY</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Release Year</th>
                                    <th>Director</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $conn = mysqli_connect("localhost", "kakadidh_kakadidh", "its+@+secret", "kakadidh_mydb");
                                    $sql = "SELECT * FROM movieTable";
                                    $result = $conn->query($sql);
                                    $i=1;
                                    if($result->num_rows > 0){
                                        while($row = $result-> fetch_assoc()){
                                            echo '<tr><td>' . $i . "</td><td>" . $row["movieName"] . "</td><td>" . $row["releaseYear"] . "</td><td>" . $row["director"] . "</td></tr>";
                                            $i++;
                                        }
                                    }
                                    else{
                                        echo "No Results";
                                    }
                                    $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
