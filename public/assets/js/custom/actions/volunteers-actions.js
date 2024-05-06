 
$(document).ready(function($)
{             

 
            var table = $('.data-table-volunteers').DataTable(
            {
                processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "volunteers",
                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: [ 


                 {data:   'name' ,                 name: 'name'       } ,                        
                  {data:   'mobile' ,               name:     'mobile' } ,
                 {data:     'email' ,                name:    'email' } ,
                 {data:   'address',               name:   'address'   },
                  {data:   'volunteered' ,          name:     'volunteered'} , 
                 {data:   'volunteered_place' ,    name:    'volunteered_place' }, 
                  {data:   'skills' ,               name:    'skills' }, 
                 {data:   'volunteer_skills' ,     name:       'volunteer_skills'} , 
                  {data:   'beginning_volunteering' ,       name: 'beginning_volunteering' }, 
                 {data:   'end_volunteering' ,             name:    'end_volunteering' }, 
                 {data:   'study_experience_volunteer' ,   name:    'study_experience_volunteer'} , 
                  {data:   'cv_volunteer'       ,              name:  'cv_volunteer'   }   
            
                    
                   ]     


            });
 
           
      


});





 