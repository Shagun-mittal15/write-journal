
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>write journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="write_journal_style.css">
  </head>
  <body>
           <div class="center">
              <div class="info">
                <form action="journal_info.php" method="post" enctype="multipart/form-data">
                <input type="date" name="date" placeholder="enter date"><br><br>
                <input type="text" name="loc" placeholder="enter location"><br><br>
                <input type="text" name="memory" placeholder="enter your moments"><br><br>
                <input type="file" name="img" placeholder="upload image"><br><br>
                <input type="submit" name="submit" value="submit" id="btn"><br><br>
                </form>
              </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>