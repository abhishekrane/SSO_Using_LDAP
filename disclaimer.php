<?php
print <<<ENDBLOCK
<!DOCTYPE html>
<html>
<head>
<!--code by Name:Abhishek RedID: 822056658 -->
  <title>Nominee Form</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="disclaimer.css" type="text/css">   
</head>
<body>
 <div class="disclaimer">
 <form action="index.html" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
  <p>
   <h1>Disclaimer</h1><br>
   What is Lorem Ipsum?
   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

   Why do we use it?
   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
  </p>
   <input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the Terms and Conditions and Privacy Policy
   <br><input type="submit" name="submitD" value="submit" style="width:100px;" />

</form>
</div>

</body>

</html>
ENDBLOCK;
?>
