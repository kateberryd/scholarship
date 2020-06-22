var searchIDs = [];

  $("input:checkbox:checked").map(function(){
    searchIDs.push($(this).val().toLowerCase());

  });

  console.log(searchIDs)
  if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("chemistry", searchIDs) !== -1  && 
  $.inArray("biology", searchIDs) !== -1 &&
  $.inArray("physics", searchIDs) !== -1 ){
    $('#courses').append($('<option>', {value:'biochemistry', text:'Biochemistry'}));
    $('#courses').append($('<option>', {value:'biotechnology', text:'Biotechnology'}));
    $('#courses').append($('<option>', {value:'microbiology', text:'Microbiology'}));
    $('#courses').append($('<option>', {value:'molecular biology', text:'Molecular biology'}));
    $('#courses').append($('<option>', {value:'B.Sc Nursing', text:'B.Sc Nursing'}));
    $('#courses').append($('<option>', {value:'medicine and surgery', text:'Medicine and Surgery'}));
    $('#courses').append($('<option>', {value:'dental surgery', text:'Dental Surgery'}));
    $('#courses').append($('<option>', {value:'Food processing', text:'Food Processing'}));
    $('#courses').append($('<option>', {value:'environmental biology', text:'Environmental Biology'}));
    $('#courses').append($('<option>', {value:'experimental biology', text:'Experimental Biology'}));
    $('#courses').append($('<option>', {value:'animal biology', text:'Animal Biology'}));
    $('#courses').append($('<option>', {value:'plant biology', text:'Plant Biology'}));
    $('#courses').append($('<option>', {value:'marine biology', text:'Marine Biology'}));
    $('#courses').append($('<option>', {value:'terrestrial and freshwater ecology', text:'Terrestrial and Freshwater Ecology'}));
  
  }

 else if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("chemistry", searchIDs) !== -1  && 
  $.inArray("biology", searchIDs) !== -1 &&
  $.inArray("mathematics", searchIDs) !== -1 ){
    $('#courses').append($('<option>', {value:'biochemistry', text:'Biochemistry'}));
    $('#courses').append($('<option>', {value:'biotechnology', text:'Biotechnology'}));
    $('#courses').append($('<option>', {value:'microbiology', text:'Microbiology'}));
    $('#courses').append($('<option>', {value:'molecular biology', text:'Molecular biology'}));
    $('#courses').append($('<option>', {value:'B.Sc Nursing', text:'B.Sc Nursing'}));
    $('#courses').append($('<option>', {value:'medicine and surgery', text:'Medicine and Surgery'}));
    $('#courses').append($('<option>', {value:'dental surgery', text:'Dental Surgery'}));
    $('#courses').append($('<option>', {value:'Food processing', text:'Food Processing'}));
    $('#courses').append($('<option>', {value:'environmental biology', text:'Environmental Biology'}));
    $('#courses').append($('<option>', {value:'experimental biology', text:'Experimental Biology'}));
    $('#courses').append($('<option>', {value:'animal biology', text:'Animal Biology'}));
    $('#courses').append($('<option>', {value:'plant biology', text:'Plant Biology'}));
    $('#courses').append($('<option>', {value:'marine biology', text:'Marine Biology'}));
    $('#courses').append($('<option>', {value:'terrestrial and freshwater ecology', text:'Terrestrial and Freshwater Ecology'}));
  
  }
  else if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("chemistry", searchIDs) !== -1  && 
  $.inArray("geography", searchIDs) !== -1 &&
  $.inArray("biology", searchIDs) !== -1 ){

    $('#courses').append($('<option>', {value:'B.Sc Occupational and environmental safety and health', text:'B.Sc Occupational and Environmental Safety and Health'}));
  }

  else if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("chemistry", searchIDs) !== -1  && 
  $.inArray("mathematics", searchIDs) !== -1 &&
  $.inArray("physics", searchIDs) !== -1 ){

    $('#courses').append($('<option>', {value:'applied chemistry', text:'Applied Chemistry'}));
    $('#courses').append($('<option>', {value:'environmental chemistry', text:'Environmental Chemistry'}));
    $('#courses').append($('<option>', {value:'industrial chemistry', text:'Industrial Chemistry'}));
  }


  else if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("mathematics", searchIDs) !== -1 &&
  $.inArray("physics", searchIDs) !== -1  && 
  $.inArray("chemistry", searchIDs) !== -1  ) {
    $('#courses').append($('<option>', {value:'B.Sc computer system engineering', text:'B.Sc Computer System Engineering'}));
    $('#courses').append($('<option>', {value:'B.Sc information Technology', text:'B.Sc Information Technology'}));
    $('#courses').append($('<option>', {value:'Computer Science', text:'Computer Science'}));
    $('#courses').append($('<option>', {value:'Software Engineering', text:'Software Engineering'}));
    $('#courses').append($('<option>', {value:'Mathematics ', text:'Mathematics'}));
    $('#courses').append($('<option>', {value:'Statiscal Science', text:'Statistical Science'}));
    $('#courses').append($('<option>', {value:'Mathematics and Modeling', text:'Mathematics and Modeling Processes'}));
    $('#courses').append($('<option>', {value:'Physics electronics', text:'Physics Electronics'}));
    $('#courses').append($('<option>', {value:'Energy and Evironmental physics', text:'Energy and Environmental Physics'}));
    $('#courses').append($('<option>', {value:'Medical Physics', text:'Medical physics'}));
  
  }


  else if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("mathematics", searchIDs) !== -1 &&
  $.inArray("physics", searchIDs) !== -1  && 
  $.inArray("geography", searchIDs) !== -1  ) {

    $('#courses').append($('<option>', {value:'B.Sc computer system engineering', text:'B.Sc Computer System Engineering'}));
    $('#courses').append($('<option>', {value:'B.Sc information Technology', text:'B.Sc Information Technology'}));
    $('#courses').append($('<option>', {value:'Computer Science', text:'Computer Science'}));
    $('#courses').append($('<option>', {value:'Software Engineering', text:'Software Engineering'}));
    $('#courses').append($('<option>', {value:'Mathematics ', text:'Mathematics'}));
    $('#courses').append($('<option>', {value:'Statiscal Science', text:'Statistical Science'}));
    $('#courses').append($('<option>', {value:'Mathematics and Modeling', text:'Mathematics and Modeling Processes'}));
    $('#courses').append($('<option>', {value:'Physics electronics', text:'Physics Electronics'}));
    $('#courses').append($('<option>', {value:'Energy and Evironmental physics', text:'Energy and Environmental Physics'}));
    $('#courses').append($('<option>', {value:'Medical Physics', text:'Medical physics'}));
  }


  else if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("english literature", searchIDs) !== -1 &&
  $.inArray("government", searchIDs) !== -1  &&
  $.inArray("history", searchIDs) !== -1   ) {

    $('#courses').append($('<option>', {value:'fine arts in film production', text:'Fine Arts in Film Production'}));
    $('#courses').append($('<option>', {value:'fine arts in animation', text:'Fine Arts in Animation'}));
    $('#courses').append($('<option>', {value:'B.Sc gender and Development studies', text:'B.Sc Gender and Developent Studies'}));
    $('#courses').append($('<option>', {value:'LL.B (Law)', text:'LL.B (Law)'}));
    $('#courses').append($('<option>', {value:'Sociology ', text:'Sociology'}));
    $('#courses').append($('<option>', {value:'Psychology', text:'Psychology'}));





  }

  else if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("english literature", searchIDs) !== -1 &&
  $.inArray("government", searchIDs) !== -1 &&
  $.inArray("commerce", searchIDs) !== -1    )  {

    $('#courses').append($('<option>', {value:'fine arts in film production', text:'Fine Arts in Film Production'}));
    $('#courses').append($('<option>', {value:'fine arts in animation', text:'Fine Arts in Animation'}));
    $('#courses').append($('<option>', {value:'B.Sc gender and Development studies', text:'B.Sc Gender and Developent Studies'}));
    $('#courses').append($('<option>', {value:'LL.B (Law)', text:'LL.B (Law)'}));
    $('#courses').append($('<option>', {value:'Sociology ', text:'Sociology'}));
    $('#courses').append($('<option>', {value:'Psychology', text:'Psychology'}));
  }

  else if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("english literature", searchIDs) !== -1 &&
  $.inArray("government", searchIDs) !== -1 &&
  $.inArray("history", searchIDs) !== -1  ) {

    $('#courses').append($('<option>', {value:'fine arts in film production', text:'Fine Arts in Film Production'}));
    $('#courses').append($('<option>', {value:'fine arts in animation', text:'Fine Arts in Animation'}));
    $('#courses').append($('<option>', {value:'B.Sc gender and Development studies', text:'B.Sc Gender and Developent Studies'}));
    $('#courses').append($('<option>', {value:'LL.B (Law)', text:'LL.B (Law)'}));
    $('#courses').append($('<option>', {value:'Sociology ', text:'Sociology'}));
    $('#courses').append($('<option>', {value:'Psychology', text:'Psychology'}));
  }

  else if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("financial accounting", searchIDs) !== -1 &&
  $.inArray("commerce", searchIDs) !== -1  &&
  $.inArray("history", searchIDs) !== -1  ) {

    $('#courses').append($('<option>', {value:'Hotel and Tourism Management', text:'Hotel and Tourism Management'}));
    $('#courses').append($('<option>', {value:'Economics', text:'Economics'}));
    $('#courses').append($('<option>', {value:'Business and Managemant', text:'Business and Management'}));
    $('#courses').append($('<option>', {value:'Social and Economics studies', text:'Social and Economic Studies'}));
    
   
  }

  else if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("financial accounting", searchIDs) !== -1 &&
  $.inArray("commerce", searchIDs) !== -1  &&
  $.inArray("geography", searchIDs) !== -1 ) {

    $('#courses').append($('<option>', {value:'Hotel and Tourism Management', text:'Hotel and Tourism Management'}));
    $('#courses').append($('<option>', {value:'Economics', text:'Economics'}));
    $('#courses').append($('<option>', {value:'Business and Managemant', text:'Business and Management'}));
    $('#courses').append($('<option>', {value:'Social and Economics studies', text:'Social and Economic Studies'}));
  }

  else if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("financial accounting", searchIDs) !== -1 &&
  $.inArray("commerce", searchIDs) !== -1  &&
  $.inArray("economics", searchIDs) !== -1  ) {

    $('#courses').append($('<option>', {value:'Hotel and Tourism Management', text:'Hotel and Tourism Management'}));
    $('#courses').append($('<option>', {value:'Economics', text:'Economics'}));
    $('#courses').append($('<option>', {value:'Business and Managemant', text:'Business and Management'}));
    $('#courses').append($('<option>', {value:'Social and Economics studies', text:'Social and Economic Studies'}));
  }

  else if( $.inArray("english", searchIDs) !== -1 && 
  $.inArray("geography", searchIDs) !== -1 &&
  $.inArray("chemistry", searchIDs) !== -1  &&
  $.inArray("physics", searchIDs) !== -1  ) {

    $('#courses').append($('<option>', {value:'geology', text:'Geology'}));
    $('#courses').append($('<option>', {value:'geosciences', text:'Geosciences'}));
    
  }
  else{
    $('#courses').append($('<option>', {value:'No available courses', text:'No available courses'}));
  }
