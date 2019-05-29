<?php
require('assets/php/dbconnect.php');

$req = $db->query("SELECT * FROM todos"); 
$display = $req->fetchAll(); 

function archive($db){
    $req = $db->query("SELECT * FROM todos WHERE archive LIKE 1");
    return $req;
    $req->closeCursor();
}

function show($db){
    $req = $db->query("SELECT * FROM todos WHERE archive LIKE 0");
    return $req;
    $req->closeCursor();
}

$archive = archive($db);
$show = show($db);

if(isset($_POST['submit'])){
        $taches = filter_var($_POST['taches'], FILTER_SANITIZE_STRING);
        $add = $db->exec("INSERT INTO todos (taches) VALUES ('" . $taches . "')");
        header("Refresh:0");
    }

    if(isset($_POST['archive'])){
        if(!empty($_POST['checkbox'])){
            $archive;
            for($i=0;$i<count($_POST['checkbox']);$i++){
                $checkbox = $_POST['checkbox'][$i];
                $db->exec("UPDATE todos SET archive = 1 WHERE ID='$checkbox'");
            }
        }
        header("Refresh:0");
    }

    if(isset($_POST['delete'])){
        $checkbox = $_POST['checkbox'];
        if(!empty($checkbox)){
            for($i=0;$i<count($_POST['checkbox']);$i++){
                $checkbox = $_POST['checkbox'][$i];
                $db->exec("DELETE FROM todos WHERE ID='$checkbox'");
            }
        }
        header("Refresh:0");
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>To Do List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
    <script src="assets/css/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <section class="container-fluid maincontent">
        <div class="top">
            <h3>To Do List SQL</h3>
        </div>
        <div class="middle">
            <h5>Tâches</h5>
            <form method="POST">
                <?php while ($display = $show->fetch()) {
                    echo '<p><input type="checkbox" name="checkbox[]" value="'.$display['ID'].'"/>'." ". $display['taches'] . '</p>';
                } ?>
                <button type="submit" name="archive" class="btn btn-secondary my-3">Archiver</button>
                <button type="submit" name="delete" class="btn btn-danger my-3">Supprimer</button>
            </form>
            <h5>Archives</h5>
            <?php while ($display = $archive->fetch()) {
                    echo '<p><input type="checkbox" name="checkbox[]" value="'.$display['ID'].'" disabled="disabled" checked="checked" />'." ". $display['taches'] . '</p>';
                } ?>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="bottom">
                <h6>Nouvelles Tâches</h6>
                <textarea rows="5" col="100" class="taches mt-3" name="taches"></textarea>
                <p><button type="submit" name="submit" value="Envoyer" class="btn btn-secondary my-3">Envoyer</button></p>
        </form>
        </div>
    </section>
</body>

</html>