<?php include "function.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="todo-app">
        <h1>My To-Do List</h1>
        <form id="add-todo-form">
            <input type="text" id="todo-input" placeholder="Add a new to-do item...">
            <button type="submit">Add</button>
        </form>
        <ul id="todo-list">
         <?php get_data(); ?>
        </ul>
    </div>

    <script>
        function addTodo() {
        }

        var submitButton =document.getElementById("add-todo-form")
        .addEventListener("submit", function(e) {
        e.preventDefault();
        addTodo();
        });
  
    </script>

    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        function addTodo() {
                var input = document.getElementById("todo-input").value;

                $.ajax({
                    url: "function.php",
                    type: "POST",
                    data: {"add":"add",
                        todo: input},
                    success: function(response) {
                        document.getElementById("todo-list").innerHTML = response;
                    }
                });
                }
    </script>
    

</body>
</html>