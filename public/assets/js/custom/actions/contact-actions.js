 
$(document).ready(function($)
{             

 
            $('.data-table-contact').DataTable(
            {
                processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "contactUs",
                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: [ 
                    {data: 'full_name', name: 'full_name'},
                    {data: 'email', name: 'email'},
                    {data: 'message', name: 'message'},
                   ]     


            });
 
           
      


});





 