$(document).ready(function(){

  // Make the call to the API
  $.ajax({
    url: "/india-partners/data/projects.json",        
    dataType: "json",      
    success: function(data) {        
      var items = [];
      var i = 1;

      // Loop through all items in the API and build HTML      
      $.each(data.projects, function( key, val ) {
        if (val.website !== "") {
          items.push( "<div class='project-info'><h3 id='"+i+"'>"+val.title+"<a href='#top' class='visible-xs'><span class='glyphicon glyphicon-chevron-up top'></span></a></h3><h4>"+val.location+"</h4>"+val.aim + val.video+"<br /><p><a href='"+val.website+"' class='btn btn-primary' target='_blank'>Find out more</a><a href='/apply' class='btn btn-info'>Apply now</a></p></div><hr />");
        } else {
          items.push( "<div class='project-info'><h3 id='"+i+"'>"+val.title+"<a href='#top' class='visible-xs'><span class='glyphicon glyphicon-chevron-up top'></span></a></h3><h4>"+val.location+"</h4>"+val.aim + val.video+"<br /><p><a href='/apply' class='btn btn-info'>Apply now</a></p></div><hr />");
        }
        i++;
      });

      // DIsplay 
      $(".show-data").html(items);
    }

  });
});