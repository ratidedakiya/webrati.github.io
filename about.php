<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style77.css">
</head>
<body>

<div class="container">
  <h2>Do not be happy to see others in trouble</h2>
  <div class="face">
    <div class="eyes">  
        <span class="eye"></span>
        <span class="eye"></span>    
    </div>
  </div>
  <div class="face">
    <div class="eyes">  
        <span class="eye"></span>
        <span class="eye"></span>    
    </div>
  </div>
  <div class="face">
    <div class="eyes">  
        <span class="eye"></span>
        <span class="eye"></span>    
    </div>
  </div>
  <h2>Let's unite and fight together with covid-19</h2>
</div>
<script type="text/javascript">
      document.querySelector("body").addEventListener('mousemove', eyeball);
      function eyeball(){
            var eye = document.querySelectorAll(".eye");
            eye.forEach(function (eye) {
                let x = (eye.getBoundingClientRect().left) + (eye.clientWidth / 2);
                let y = (eye.getBoundingClientRect().top) + (eye.clientHeight / 2);
                let radian = Math.atan2(event.pageX - x,event.pageY - y);
                let rot = (radian * (180 / Math.PI) * -1) + 270;
                eye.style.transform = "rotate("+ rot +"deg)";

            })
      }
</script>

</body>
</html>