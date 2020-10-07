<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/chck.css">
  </head>
  <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <input type="text" id="search-text" placeholder="Search..">

    <div class="search-container">

      <ul class="data-view">



      </ul>

    </div>

    <div id="search-result">
<img id='search-poster' src=".$m." height='50px' width='50px' alt=''></td>
    </div>




    <script type="text/javascript">
      $(document).ready(function(){
        $('#search-text').keyup(function(){
          var txt = $(this).val();
          if(txt != ''){
              $.ajax({
                url:"search-fetch.php",
                method:"post",
                data:{search:txt},
                dataType:"text",
                success:function(data){
                  $('#search-result').html(data);
                }

              });
          }
          else {
            $('#search-result').html('');
          }
        });
      });
    </script>
  </body>
</html>
