
<div class="nav-scroller bg-white shadow-sm">
    <nav class="nav nav-underline">
        <a class="nav-link active" href="#">Dashboard</a>
    </nav>
</div>

<main role="main" class="container">
    <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
        <img class="mr-3" src="/public/images/img.jpg" alt="" width="48" height="48">

        <div class="lh-100">
            <small><?php if(isset($title)){echo $title;}?></small>
        </div>
    </div>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Вопросы</h6>

<?php foreach($vars as $key => $value):?>

    <div class="media text-muted pt-3">
        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">


<?php foreach($value as $a => $b): ?>
        <strong class="d-block text-gray-dark">
            <?php if($a == 'name'){echo 'name: '.$b;} ?>
        </strong>
        <strong class="d-block text-gray-dark">
            <?php if($a == 'email'){echo ' email: '.$b;} ?>
        </strong>
        <?php if($a == 'request'){echo $b;}?>
<?php endforeach;?>
        </p>
    </div>
<?php
endforeach;
?>

        <small class="d-block text-right mt-3">
            <a href="#">All updates</a>
        </small>
    </div>

</main>

