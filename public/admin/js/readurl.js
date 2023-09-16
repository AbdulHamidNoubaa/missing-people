{/* <script type="text/javascript"> */}
  function readURL(input)
  {
    if(input.files && input.files[0]){
      var reader = new FileReader();
      reader.onload = function(e)
      {
        $('#uploadedimg').attr('src', e.target.result);
      }
      reader.readAsDateURL(input.files[0]);
    }
  }
//   </script>