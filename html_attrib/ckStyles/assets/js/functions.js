function ckshow(page)
    {
      return function()
      {
        var p = page;
        $.ajax({
          type: "POST",
          url: "http://localhost/ci_intro/index.php/ourparish/selectPage",
          dataType: "json",
          data: "page=" + p,
          success:
              function(data) {
               showHeader();
              },
                  
          error: function(data){
                console.log(data);
              }
        });
        return false;
      }
    }


  function deleteP(page)
  {
    return function()
    {
      var p = page;
      $.ajax({
      type: "POST",
      url: "http://localhost/ci_intro/index.php/ourparish/deletePage",
      dataType: "json",
      data: "page=" + p,
      success:
        function(data) {
          showHeader();
        },
                  
      error: 
        function(data){
          console.log(data);
        }
      });
        return false;
    }
  }    

 $("#form_addpage").submit(function(){
  var id_page = $("#form_addpage").serialize();
  $.ajax({
    type: "POST",
    url: "http://localhost/ci_intro/index.php/ourparish/addPage",
    dataType: "json",
    data: id_page,
    success:
        function(data) {
          showHeader();
          
        },          
    error: function(data){
        console.log(data);          
        }
  });
      return false;
  });


  
  function showHeader()
  {
    $.ajax({
    type: "POST",
    url: "http://localhost/ci_intro/index.php/ourparish/showHeader",
    dataType: "json",
    success:
    function(data) 
    {
      console.log(data);
      var active = "active";
      $("#pageheader").html('');
      $.each( data, function( key, value ) {                  
          var a = document.createElement('li');
          a.setAttribute("class",active);
          var b = document.createElement("a");
          b.setAttribute("data-toggle", "tab");                

          b.onclick = ckshow(value.page_name);
          b.appendChild(document.createTextNode(value.page_name));

          a.appendChild(b);
          document.getElementById("pageheader").appendChild(a);          
          active="";
      });
      
      $('#addModal').modal('hide');
      $('#manageModal').modal('hide');

      $("#mp").html('');   
      var aa="odd";
      $.each( data, function( key, value ) {    
          var a = document.createElement('tr');
          a.setAttribute("class",aa);
          var b = document.createElement("td");
          b.setAttribute("width", 200);                      
          b.appendChild(document.createTextNode(value.page_name));

          var c = document.createElement('td');
          c.setAttribute("width",100);
          var d = document.createElement('a');
          d.onclick = deleteP(value.page_name);
          d.appendChild(document.createTextNode("Delete"));
          c.appendChild(d);

          var e = document.createElement('td');
          e.setAttribute("width",100);
          var f = document.createElement('a');
          f.appendChild(document.createTextNode("Rename"));
          e.appendChild(f);

          a.appendChild(b);
          a.appendChild(c);
          a.appendChild(e);
          document.getElementById("mp").appendChild(a);
                
          if(aa=="odd"){
              aa="even"; 
          }else if(aa=="even"){
              aa="odd"; 
          }
                
      });
    },
                      
    error: function(data){
          console.log(data);
      }
    });
    return true;
  }