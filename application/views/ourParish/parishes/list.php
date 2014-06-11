<html>
<head>
  <title>OurParish</title>
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript" ></script>
  <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>/html_attrib/parishStyles/scriptsList.js"></script>
  <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>/html_attrib/parishStyles/js/helper.js"></script>

</head>

<body> 
  <div id="init" data-base_url="<?php echo base_url(); ?>"></div>
  <script type="text/javascript">
    var a = new ParishDataContainer()
    .push_back(
        new ParishData(
            "pic3.jpg",
            "San Isidro Parish Church",
            "Talamban, Cebu City",  
            "Description Description Description",
            "Parish page"
          )
    ).push_back(
      new ParishData(
          "pic1.jpg",
          "Redemptorist Church",
          "Osmena Boulevard,Cebu City",
          "Description Description Description",
          "Parish page"
        )
    ).push_back(
      new ParishData(
          "pic6.jpg",
          "Gethsemane Parish Church",
          "Cabrera st. Casuntingan, Mandue City",
          "Description Description Description",
          "Parish page"
        )
    ).push_back(
      new ParishData(
          "pic9.jpg",
          "National Shrine of St. Joseph",
          "Centro, Mandaue City",
          "Description Description Description",
          "Parish page"
        )
    ).push_back(
      new ParishData(
          "s5.jpg",
          "Basilica Minore del Santo Nino de Cebu Pilgrim Center",
          "Osmena Boulevard,Cebu City",
          "Description Description Description",
          "Parish page"
        )
    ).push_back(
      new ParishData(
          "pic7.jpg",
          "San Roque Parish Church",
          "Sugbangdaku, Mandaue City",
          "Description Description Description",
          "Parish page"
        )
    ).push_back(
      new ParishData(
          "pic8.jpg",
          "St. Peter and Paul Parish Church",
          "Bantayan Island, Cebu",
          "Description Description Description",
          "Parish page"
        )
        ).push_back(
      new ParishData(
          "pic10.jpg",
          "Our Lady of Guadalupe Parish",
          "Guadalupe, Cebu City",
          "Description Description Description",
          "Parish page"
        )
    ).push_back(
      new ParishData(
          "pic11.jpg",
          "Sacred Heart Parish Church",
          "Jakosalem St., Cebu City",
          "Description Description Description",
          "Parish page"
        )
    ).sort();
    var test = new ListManager(a, 5);
    test.init();
  </script>      
          
  <div id="parish_display" class="container"></div>
          
  <ul id="pages"class="pagination"></ul>
   <script type="text/javascript">test.view("<?php echo base_url(); ?>");</script>    
      
<!-- Latest compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/html_attrib/parishStyles/js/bootstrap.min.js"></script>
</body>
</html>

