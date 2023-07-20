<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/79be424806.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="todo">
        <form action="/create" method="post">
        <div class="header">
            <input type="text"  class="todo-input" placeholder="Name" name="name">
            <input type="number"  class="todo-input" placeholder="Phone number" name="phone_number">
            <button class="btn-add">Add</button>
        </div>
        </form>
        <div class="todolist">
            <h3>List of Contact</h3>
            <p class="error-info"></p>
            <ul>
                <?php if(count($datas)) :?>
                    <?php foreach($datas as $key=>$data): ?>
                        <li>
                            <p>Name: <?= $data['name']; ?></p>
                            <span>Phone number: <?= $data['phone_number']; ?></span>
                            <div class="tools">
                                <form action="/delete" method="POST">
                                    <input type="text" hidden name="id" value="<?= $data['id']; ?>">
                                    <button class="delete"><i class="fas fa-times"></i></button>
                                </form>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif;?>

            </ul>
        </div>
    </div>
    
    <!-- <div class="popup">
        <h3>Edit your todo:</h3>
        <div class="popup-body">
            <p class="popup-info"></p>
            <input type="text" class="popup-input" placeholder="Wprowadź nową treść zadania...">
            <button class="popup-btn accept">Update</button>
            <button class="popup-btn cancel">Cancel</button>
        </div>
    </div> -->

</body>
</html>