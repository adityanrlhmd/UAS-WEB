<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap");
    .main {
        background: #fff4f4;
        position: relative;
        height: 100vh;
    }
    .main .Container-sm {
        background: white;
        max-width: 700px !important;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 50px 30px;
        border-radius: 20px;
        box-shadow: 10px 10px 10px rgb(0, 0, 0, 0.2)  }
    .main .Container-sm input {
        width: 400px;
        height: 50px;
        padding: 0 20px;
        margin: 10px 0;
        border-radius: 30px; }
    .main .Container-sm button {
        width: 100%;
        text-decoration: none;
        margin: 5px 0;
        border-radius: 50px;
        font-size: 18px !important; }
    .main .Container-sm h1 {
        text-align: center;
        margin: 0 0 50px 0 }
    .main .Container-sm .text-muted {
        text-align: center;
        font-size: 10px; }
</style>
<body>
    <section class="main">
        <div class="Container-sm">
            <h1>
                SIGN IN
            </h1>
            <form action="/login/auth" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" name="username" class="form-control" id="loginemail" placeholder="Email Address" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" id="loginpass" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-dark btn-lg btn-block">SIGN IN</button>
                <p class="text-muted">
                    <a href="#" class="text-reset">forgot password ?    </a>
                </p>
                </div>
            </form>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>
