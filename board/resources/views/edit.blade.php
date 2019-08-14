<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="/update/{{$news->id}}" class="form-horizontal">
        @csrf
        <fieldset>
        <legend>編輯消息</legend>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">標題</label>
          <div class="col-md-6">
          <input id="textinput" name="topic" type="text" class="form-control input-md" value="{{$news->topic }}" required="">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textarea">內容</label>
          <div class="col-md-4">
            <textarea class="form-control" id="textarea" name="content">{{ $news->content }}</textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-success">編輯</button>
          </div>
        </div>
        </fieldset>
        </form>
</body>
</html>