<form>
username : <input type="text" name="username"></br>
<input type="Submit" value="submit" >
</form>

<?php
    
    require("../connection/connection.php");
    
    if(!isset($_GET["username"])) {
        echo "username query param is empty";
        return;
    }

    $username = $_GET['username'];

    $sql = "SELECT * FROM person WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Fetch the details of the person
            $person = $result->fetch_assoc();

            // Display the person's details
            echo "Username: " . $person['username'] . "<br>";
            echo "Password: " . $person['password'] . "<br>";
        } else {
            echo "Person not found";
        }
    } else {
        echo "Error executing SQL statement: " . $stmt->error;
    }

    $stmt->close();

?>

