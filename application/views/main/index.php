
<main role="main" class="container">
    <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
        <img class="mr-3" src="/public/images/img.jpg" alt="" width="48" height="48">

        <div class="lh-100">
            <h1><?php if(isset($title)){echo $title;}?></h1>
        </div>
    </div>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Вы</h6>

<?php
echo 'Имя: '.$users.' Роль: '.$role ;

 ?>
