 
$(document).ready(function($)
{             

 
            var table = $('.data-table-employment-order').DataTable(
            {
                processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "employmentsOrders",
                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: [ 

                    {data:  'first_name', name:'first_name'    },        
                    {data:  'father_name',  name: 'father_name' } ,  
                    {data:  'grandfather_name', name:'grandfather_name' } , 
                    {data:  'family_name',  name:'family_name'          } ,  
                    {data:  'mobile',     name:        'mobile'               }     ,     
                    {data:  'email',  name:        'email'     },  
                    {data:  'gender', name:        'gender'        }         , 
                     {data:  'qualification',name:        'qualification' }   ,
                    {data:  'Birthday', name:        'Birthday'  }  , 
                    {data:  'cv', name:  'cv'}  ,
               
                ]     


            });
 
           
      


});





 