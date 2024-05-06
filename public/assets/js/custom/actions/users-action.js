$(document).ready(function($)
{             
 
    $('#filter_column_type_user').on('change', function() {
        table.ajax.reload();
    });

 
            var table = $('.data-table-users').DataTable(
            {
                 processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "users",
                                data: function (d) {
                                    d.filter_column_type_user = $('#filter_column_type_user').val()
                                }
                },
                columns: [
                    
                     {data: 'id', name: 'id'},
                     {data: 'full_name', name: 'full_name'},
                     {data: 'email', name: 'email'},
                     {data: 'roles', name: 'roles'},
                     {data: 'action', name: 'action'},]     


            });
 
  
            $(".data-table-users").on('click', '.deleteRecord[data-id]', function (e)
            { 
                        e.preventDefault();
                    $('.show_confirm').click(function(event)
                        {
                    
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            })
                            .then((willDelete) => 
                            { 
                                if (willDelete.isConfirmed)
                                {
                                    var id = $(this).data("id");
                                    var token = $("meta[name='csrf-token']").attr("content");
                            
                                    $.ajax(
                                    {
                                    url: "users/"+id,
                                    type: 'DELETE',
                                    data: 
                                    {
                                        "id": id,
                                        "_token": token,
                                    },
                                    success: function ()
                                    {
                                        console.log("it Works");
                                        $('.data-table-users').DataTable().ajax.reload();
                                    }
                                   , error:function(error) 
                                    {
                                        console.log(error);


                                    }
                                    });

                                }
                            });

                        
                        });

                
                });

 
  
 




});
