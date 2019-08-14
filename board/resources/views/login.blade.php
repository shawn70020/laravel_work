<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/login/check" class="form-horizontal">
        @csrf
        <fieldset>

        <legend>登入</legend>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">帳號</label>
          <div class="col-md-4">
          <input id="textinput" name="username" type="text" placeholder="請填寫帳號" class="form-control input-md" required="">
          </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">密碼</label>
            <div class="col-md-4">
              <input id="passwordinput" name="passwd" type="password" placeholder="請填寫密碼" class="form-control input-md" required="">
            </div>
          </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button  type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">登入</button>
          </div>
        </div>
        </fieldset>
        </form>
</body>
</html>