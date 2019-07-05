<?php
session_start();
$get=$_SESSION['s'];
$_SESSION['z']=$get;

require_once('../src/classes/checkCondition.php');
$db = new checkingCondition;
$db->checkCond($get, $memberof);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Routing</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <?php
            print ($get["0"]["extensionattribute1"]["0"]) . ' ' . ($get["0"]["extensionattribute2"]["0"]);
        ?>
    </header>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat culpa vitae blanditiis quibusdam mollitia provident perspiciatis repudiandae aspernatur eligendi maiores. Porro fugit possimus alias nulla corporis veniam magni sed magnam.
        Dolores quod assumenda, id quisquam possimus vero excepturi cumque? Aliquam est officiis quasi enim voluptate quae, corrupti dolore quo beatae aliquid. Iste nulla recusandae ad? Laboriosam delectus fugit aliquid nemo?
        Omnis cumque tempora, animi quae et porro voluptatem esse beatae? Laborum optio amet sequi provident aliquid id nihil obcaecati ad eos, magnam error repellat voluptates illum iure est sint magni.
        Nesciunt autem possimus facilis! Laudantium ipsa tempora, cum corporis sapiente quibusdam asperiores, dicta inventore magni libero maxime cupiditate dolorem assumenda aut in voluptas debitis, dolor repudiandae accusantium culpa eveniet voluptatem.
        Sint expedita suscipit voluptates optio nihil omnis dolorum quos earum reprehenderit totam illo accusantium repellendus adipisci culpa sequi, quas placeat ea unde! Quam odio fugiat pariatur fuga, architecto praesentium sint.
        Iusto, sapiente. Dolor pariatur dolore sint officia corrupti autem nisi in reprehenderit, minus voluptate impedit earum harum consectetur asperiores! Doloribus non, consequatur ea quam odio excepturi eius quae corporis ipsum?
        Inventore suscipit eos veritatis facilis amet quas? Neque dolor sapiente quia alias sequi accusantium sint ratione libero aliquam placeat molestiae possimus nihil, autem explicabo officiis nesciunt atque aut quos! Esse!
        Illo amet reprehenderit odio magni blanditiis nostrum exercitationem, quidem mollitia dolores fuga! Animi incidunt deserunt quibusdam repellendus dicta, nisi repudiandae enim, quos quaerat nesciunt natus eum dolore ea perspiciatis aut.
        Mollitia deserunt recusandae accusamus, quibusdam quo corporis alias autem veritatis error, sed quaerat ratione culpa obcaecati laudantium, ipsam minus ut ullam placeat aliquid est exercitationem enim nihil qui. Rem, vero.
        Modi assumenda ipsum distinctio tempore voluptatum doloribus quod dolores deleniti et praesentium, vero maiores architecto! Facilis, at corrupti quibusdam esse nesciunt distinctio excepturi voluptas culpa unde reiciendis asperiores obcaecati hic?
        Tenetur unde neque enim earum obcaecati iure alias soluta temporibus? Quod voluptas quam quidem voluptatem in, impedit ipsa, non nostrum sapiente minus ut amet quis ipsum commodi necessitatibus. Consequuntur, velit?
        Eligendi, expedita mollitia soluta minima quisquam, amet deleniti quia ratione a, blanditiis molestias repellendus similique! Dicta, doloribus non dolores aliquam distinctio odit omnis necessitatibus sapiente, ipsam maxime quod! Nemo, labore.
        Inventore, minus! Maxime enim dolor alias fugiat! Fugiat, rerum facere laborum nisi, recusandae similique sequi beatae eligendi sit sint temporibus inventore. Eaque perferendis quisquam corporis qui facere! Eum, quam doloremque!
        Aperiam inventore quod debitis, voluptatum esse eius corrupti harum voluptates placeat rerum iusto accusamus hic maxime expedita, nam saepe similique id neque provident in culpa deleniti, necessitatibus doloribus possimus! Iure.
    </p>
</body>
</html>