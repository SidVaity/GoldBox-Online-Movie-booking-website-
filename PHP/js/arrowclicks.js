var img_tracker = 1;


function right_click(){
  img_tracker++;
  var pimage = document.getElementById('posters-1');
  var image = document.getElementById('posters');
  var nimage = document.getElementById('posters-2');


  if (img_tracker == 1){
    pimage.src = 'images/ghost_rider.jpg';
    image.src = 'images/lotr.jpg';
    nimage.src = 'images/hobbit.jpg';
  }
  else if (img_tracker == 2){
    pimage.src = 'images/lotr.jpg';
    image.src = 'images/hobbit.jpg';
    nimage.src = 'images/deadpool.jpg';
  }
  else if (img_tracker == 3) {
    pimage.src = 'images/hobbit.jpg'
    image.src = 'images/deadpool.jpg';
    nimage.src = 'images/insidious_2.jpg';

  }
  else if(img_tracker == 4){
    pimage.src = 'images/deadpool.jpg';
    image.src = 'images/insidious_2.jpg';
    nimage.src = 'images/Exsist.jpg';

  }
  else if(img_tracker == 5){
    pimage.src = 'images/insidious_2.jpg';
    image.src = 'images/Exsist.jpg';
    nimage.src = '';
  }
  else {
  }


}

function left_click(){
  var pimage = document.getElementById('posters-1');
  var image = document.getElementById('posters');
  var nimage = document.getElementById('posters-2');

  img_tracker--;
  if (img_tracker == 0){
    pimage.src = '';
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
    pimage.src = 'images/insidious_2.jpg';
    image.src = 'images/Exsist.jpg';
    nimage.src ='';

  }


}
