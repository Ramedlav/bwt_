<form class="form-signin" action="/account/register" method="post">
    <?php if(isset($message)){require $message;}?>
    <h1 class="h3 mb-3 font-weight-normal"><?php if(isset($title)){echo $title;} ?></h1>
    <label for="inputName" class="sr-only">Имя</label><br>
    <input type="text" name="name" class="form-control" placeholder="Имя" required autofocus>
    <label for="inputEmail" class="sr-only">Электронная почта</label>
    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email адрес" required autofocus>
    <label for="inputPassword" class="sr-only">Пароль</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Пароль" required>
    <b><button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button></b>
</form>
<?php
//