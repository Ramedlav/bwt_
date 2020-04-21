
<form class="form-signin" method="post" action="/support/send">
    <?php include("application/captcha/captcha.php"); ?>
    <?php if(isset($message)){require $message;}?>
    <img class="mb-4" src="/public/images/img.jpg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal"><?php if(isset($title)){echo $title;}?></h1>

    <label for="inputName" class="sr-only">Имя</label><br>
    <input type="text" name="name" class="form-control" placeholder="Имя" required autofocus><br>

    <label for="inputEmail" class="sr-only">Email адрес</label>
    <input type="text" name="email" class="form-control" placeholder="Email адрес" required ><br>

    <label for="TextareaEdit" class="sr-only">Введите сообщение</label>
    <textarea class="form-control" id="TextareaEdit" placeholder="Введите сообщение" name="request" required ></textarea><br>

    <img src="/public/images/file.gif" /><br>

    <label  for="inputCaptcha" class="sr-only">Введите цифры с картинки</label><br>
    <input name="captcha" id="inputCaptcha" class="form-control" placeholder="Введите цифры с картинки" type="text" required><br>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
</form>
<?php //echo $_SESSION['captcha']; ?>
