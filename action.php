
<?php
include('header.php'); 
include('footer.php');

if (!empty($_POST['question'])) {
    switch ($_POST['question']) {
        case 'info':
            phpinfo(); 
            exit;
            break;
        }
        

    $magic=[
                "C’est certain",
                "C’est complètement ça",
                "Sans aucun doute",
                "Oui, vraiment",
                "Tu peux compter dessus",
                "Augure favorable", 
                "Très probablement",                    
                "Ça m’a l’air de bien se présenter", 
                "Oui",
                "Les signes indiquent que oui", 
                "La réponse est flou, essaye encore",
                "Redemande plus tard",
                "Il ne vaut mieux pas que je réponde tout de suite",
                "Impossible à prévoir pour l’instant",
                "Concentre toi et redemande",
                "Ne compte pas dessus",
                "Ma réponse est non",
                "Mes sources disent non",
                "Ça ne se présente pas bien",
                "Très peu probable"];
           
            $count=count ($magic);
            $randomIndex=rand(0, $count - 1);
            $randomAnswer = $magic[$randomIndex];
?>

<div class="container">
    <div class="content">
        <p>La question posée : </p>
    </div>
    <div class= "title">
        <?php echo htmlspecialchars($_POST['question']); ?>?
    </div>
    <div class="content">La reponse est  : </div>
    <div class= "title">
        <?php echo $randomAnswer; ?>
        </div>
    </div>
    <?php
    
}
?>