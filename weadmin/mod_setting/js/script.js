function chooseMainpage(ID) {

  var mainpageID;
  // console.log(ID);
  if (ID != '') {
      mainpageID = ID;
  } else {
      mainpageID = "theme-1";
  }

  $("#inputMainpage").val(mainpageID);
  $(".mainpageActive.m_main").hide();
  $(".mainpageActive.m_main#" + mainpageID).show();
}
