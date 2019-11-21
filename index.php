<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>
</head>
<html>
<body>
    <div class="container">
        <div class="jumbotron">
        <h2>Gestion des clients</h2>
        </div>
        <table class="table table-hover">
            <thead>
            <th>
                <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Phone</th>              
                </tr>
            </th>
            </thead>
                <tbody>
                    <?php
                        include 'client.class.php' ;
                        $client = new Client ;
                        $listeclt = $client->ReadAllClients();
                        while($data = $listeclt->fetch())
                        {
                        ?>
                            <tr>
                            <td><?=$data['Id'] ?></td>
                            <td><?=$data['Firstname'] ?></td>
                            <td><?=$data['Lastname'] ?></td>
                            <td><?=$data['Email'] ?></td>
                            <td><?=$data['Phone'] ?></td>     
                          
                            </tr>
                        <?php
                        }                                        
                         ?>
                </tbody>
    </table>
    </div>
</body>
</html>   