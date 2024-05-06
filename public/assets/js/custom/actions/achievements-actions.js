 
$(document).ready(function($)
{             
    var columns  = null  ; 
    var language_datatables = null;
    var currentUrl = window.location.href;
    console.log(currentUrl);
    var parts = currentUrl.split("/");
    var current_lang = parts[parts.length - 2];
    console.log(current_lang);


    if (current_lang == "ar") 
    {       
        language_datatables = {
            sEmptyTable: "لا يوجد بيانات ",
            sInfo: "يتم عرض _START_ إلى _END_ من _TOTAL_ من الإدخالات",
            sInfoEmpty: "عرض 0 إلى 0 من أصل 0 إدخالات",
            sInfoFiltered: "(تمت التصفية من إجمالي _MAX_ الإدخالات)",
            sInfoPostFix: "",
            sInfoThousands: "",
            sLengthMenu: "إظهار إدخالات _MENU_",
            sLoadingRecords: "جارٍ التحميل...",
            sProcessing: "جارٍ المعالجة...",
            sSearch: "البحث:",
            sZeroRecords: "لم يتم العثور على سجلات مطابقة",
            oPaginate: {
                sFirst: "الأولى",
                sLast: "الأخير",
                sNext: "التالي",
                sPrevious: "السابق",
            },
            oAria: {
                sSortAscending: ": التنشيط لفرز الأعمدة تصاعديًا",
                sSortDescending: ": التنشيط لفرز الأعمدة تنازليًا",
            },
        };


        columns =  [ 
            {data: 'title_ar', name: 'title_ar'},
            {data: 'count', name: 'count'},
            {data: 'action', name: 'action'}]  ;   
        }else
        {
        
        columns = [ 
            {data: 'title', name: 'title'},
            {data: 'count', name: 'count'},
            {data: 'action', name: 'action'}
                ]      ; 


    } 
 
            var table = $('.data-table-achievements').DataTable(
            {
                language: language_datatables,
                processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "achievements",
                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: columns ,   


            });
 
           
          
            $(".data-table-achievements").on('click', '.deleteRecord[data-id]', function (e)
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
                                    console.log(id);
                                    var token = $("meta[name='csrf-token']").attr("content");
                            
                                    $.ajax(
                                    {
                                    url: "achievements/"+id,
                                    type: 'DELETE',
                                    data: 
                                    {
                                        "id": id,
                                        "_token": token,
                                    },
                                    success: function ()
                                    {
                                        console.log("it Works");
                                        $('.data-table-achievements').DataTable().ajax.reload();
                                    }
                                    });

                                }
                            });

                        
                        });

                
                });

                $('#SubmitFormAchievements').on('submit',function(e)
{   
                
                e.preventDefault();

                let formData = new FormData($('#SubmitFormAchievements')[0]);
 
                  
                $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        } });
                $.ajax(
                {
                type:"post",
                url: "achievements",
                data: formData,
                contentType:false, // determint type object 
                processData: false,  // processing on response 
                success:function(response)
                {
                console.log(response);
                console.log("response");

                Swal.fire({
                                text: "You have successfully reset your password!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: 
                                {
                                    confirmButton: "btn btn-primary"
                                }
                    })
                


                },

                error: function(response) 
                    {
                        console.log(response)  ; 
                            Swal.fire(
                                {
                                        text:  response.responseJSON.message  , 
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"

                                                }
                                    })
                    },
                });


});




});





 