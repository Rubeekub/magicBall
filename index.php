<?php 
    include('header.php'); 
?>
<body>
<div class="container">
            <div class="content">
                <div class="title" title="Magic Ball">Magic Ball</div>
                <div class="question utilisateur"><br />
                <form action="action.php" method="POST">
                    <label for="question">Quelle est votre question?</label>
                    <input name="question" id="question" type="text" />
                    <p><button type="submit">Valider</button></p>
                </form>
                </div>
            </div>
        </div>
        </body>
</html>
