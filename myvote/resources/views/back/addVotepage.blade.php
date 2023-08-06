<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-3.7.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</head>

<body class="container-fluid">
    <form action="/back/addVote" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">主題</label>
            <input type="text" class="form-control" name="subject">
        </div>
        <div class="time-set">
            <div>
                <label>開啟時間</label>
                <input type="datetime-local" name="start_time">
            </div>
            <div>
                <label>關閉時間</label>
                <input type="datetime-local" name="stop_time">
            </div>
        </div>
        <div>
            <label for="img">上傳圖檔：</label>
            <input type="file" name="img" id="img">
        </div>

        <div class="mb-3">
            <label for="type">單複選：</label>
            <input type="radio" name="q_type" value="1">單選&nbsp;&nbsp;
            <input type="radio" name="q_type" value="2">複選
        </div>
        <div class="options">
            <div>
                <label for="description">項目：</label>
                <input type="text" name="opt[]" class="description-input">
                <span onclick="addOption()">+</span>
                <span onclick="removeOption(this)">-</span>
            </div>
        </div>

        </br>
        <input type="hidden" name="user_id" value="{{$user_id}}">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    <script>
        function addOption() {
            let opt = `<div>
                <label for="description">項目：</label>
                <input type="text" name="opt[]"  class="description-input">
                <span onclick="addOption()">+</span>
                <span onclick="removeOption(this)">-</span>
            </div>`
            $(".options").append(opt);
        }

        function removeOption(el) {
            let dom = $(el).parent()
            $(dom).remove();
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    </body>
    </html>    