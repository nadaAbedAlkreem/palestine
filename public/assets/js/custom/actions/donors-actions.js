 
$(document).ready(function($)
{             

 
            var table = $('.data-table-donors').DataTable(
            {
                processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "donors",
                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: [ 
                   {data:'name',  name:'name'},                                                  
                    {data:'email'  ,    name:   'email'  },
                   {data:'mobile' ,  name: 'mobile' },
                   {data:'project' ,  name: 'project' },
                    {data:'country' ,    name: 'country' },
                    {data:'city' ,      name:'city' },
                    {data:'announcing_donor' ,     name:   'announcing_donor' },
                   {data:'money' ,              name:   'money' },
                   {data:'donation_method' ,             name:    'donation_method' }]
        
            });
 
           
      


});





 