
function deleteme(del){
    if(confirm("Are you sure, You want to Delete this Data")){
      window.location.href='php/delete.php?del=' +del+'';
      return true;
    }
  }