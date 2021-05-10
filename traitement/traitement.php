<?php

if (!empty($_POST))
{
  if (empty($_POST['menu']))
  {
    $echo = "Veuillez sélectionner un menu pour commander";
  } else {

$mayonnaise = isset($_POST['mayonnaise']) ? $_POST['mayonnaise'] : NULL;
$ketchup = isset($_POST['ketchup']) ? $_POST['ketchup'] : NULL;
$moutarde = isset($_POST['moutarde']) ? $_POST['moutarde'] : NULL;
$poivre = isset($_POST['poivre']) ? $_POST['poivre'] : NULL;
$salade = isset($_POST['salade']) ? $_POST['salade'] : NULL;
$tomates = isset($_POST['tomates']) ? $_POST['tomates'] : NULL;
$oignons = isset($_POST['oignons']) ? $_POST['oignons'] : NULL;
$olives = isset($_POST['olives']) ? $_POST['olives'] : NULL;
$coca = isset($_POST['coca']) ? $_POST['coca'] : NULL;
$vittel = isset($_POST['vittel']) ? $_POST['vittel'] : NULL;
$fanta = isset($_POST['fanta']) ? $_POST['fanta'] : NULL;
$perrier = isset($_POST['perrier']) ? $_POST['perrier'] : NULL;

    $composant = array('mayonnaise'=>$mayonnaise,'ketchup'=>$ketchup,'moutarde'=>$moutarde,'poivre'=>$poivre, 'salade'=>$salade, 'tomates'=>$tomates, 'oignons'=>$oignons, 'olives'=>$olives, "coca"=>$coca, 'vittel'=>$vittel,'fanta'=>$fanta, 'perrier'=>$perrier);
    $checkbox = json_encode($composant);
    $menu = $_POST['menu'];



    $echo = "Votre commande : 1 menu ".$_POST['menu'].' ';
    $checkbox = json_decode($checkbox);

    foreach ($checkbox as $choix)
    {
      if ($choix) $echo .= ' + '.$choix.'';
    }
  }
}

?>
