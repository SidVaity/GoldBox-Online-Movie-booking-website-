<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">

    var img_tracker = 1;

    var myVar;

    function myFunction() {
      myVar = setInterval(right_click, 3500);
    }



    function right_click(){
      img_tracker++;
      var pimage = document.getElementById('posters-1');
      var image = document.getElementById('posters');
      var nimage = document.getElementById('posters-2');

      if (img_tracker == 1){
        pimage.src= 'images/Exsist.jpg';
        image.src = 'images/ghost_rider.jpg';
        nimage.src = 'images/hobbit.jpg';
      }

      else if (img_tracker == 2){
        pimage.src = 'images/ghost_rider.jpg';
        image.src = 'images/lotr.jpg';
        nimage.src = 'images/hobbit.jpg';

      }
      else if (img_tracker == 3){
        pimage.src = 'images/lotr.jpg';
        image.src = 'images/hobbit.jpg';
        nimage.src = 'images/deadpool.jpg';
      }
      else if (img_tracker == 4) {
        pimage.src = 'images/hobbit.jpg';

        image.src = 'images/deadpool.jpg';
        nimage.src = 'images/insidious_2.jpg';

      }
      else if(img_tracker == 5){
        pimage.src = 'images/deadpool.jpg';
        image.src = 'images/insidious_2.jpg';
        nimage.src = 'images/Exsist.jpg';

      }
      else if(img_tracker == 6){
        pimage.src = 'images/insidious_2.jpg';
        image.src = 'images/Exsist.jpg';
        nimage.src = 'images/ghost_rider.jpg';

      }
      else {
        img_tracker = 0;
      }


    }

    function left_click(){
      var pimage = document.getElementById('posters-1');
      var image = document.getElementById('posters');
      var nimage = document.getElementById('posters-2');

      img_tracker--;
      if (img_tracker == 0){
        pimage.src= '';
        image.src = 'images/ghost_rider.jpg';
        nimage.src = 'images/hobbit.jpg';
      }
      else if (img_tracker == 1){
          pimage.src = 'images/ghost_rider.jpg'
          image.src = 'images/lotr.jpg';
          nimage.src = 'images/hobbit.jpg';

      }
      else if (img_tracker == 2) {
        pimage.src = 'images/lotr.jpg';
        image.src = 'images/hobbit.jpg';
        nimage.src = 'images/deadpool.jpg';

      }
      else if(img_tracker == 3){
        pimage.src = 'images/hobbit.jpg'
        image.src = 'images/deadpool.jpg';
        nimage.src = 'images/insidious_2.jpg';


      }
      else if(img_tracker == 4){
        pimage.src = 'images/deadpool.jpg';
        image.src = 'images/insidious_2.jpg';
        nimage.src = 'images/Exsist.jpg';

      }


      else {
      }


    }

    </script>
    <link rel="stylesheet" href="arrow.css" type="text/css">
  </head>
  <body>
    <!-- <div class="right-arrow">
    </div>
     <div class="left-arrow">
     </div> -->

  <div class="img-id">

      <script>
        myFunction();
      </script>




      <img class="img-align-1" id="posters-1" src="images/ghost_rider.jpg" alt="" style="height:280px; width:380px ;">
      <img class="img-align" id="posters" src="images/lotr.jpg" alt="" style="height:400px; width:700px ;">
      <img class="img-align-2" id="posters-2" src="images/hobbit.jpg" alt="" style="height:280px; width:420px ;">


    </div>
  </body>
</html>
