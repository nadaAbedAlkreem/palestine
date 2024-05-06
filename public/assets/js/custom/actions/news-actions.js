

$(document).ready(function ($) {
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
    
    
            columns = [
            { data: "title_ar", name: "title_ar" },
            { data: "date", name: "date" },
            { data: "description_ar", name: "description" },
            { data: "location_ar", name: "location" },
            { data: "action", name: "action" }] ;
        }else
        {
            columns = [
            { data: "title", name: "title" },
            { data: "date", name: "date" },
            { data: "description", name: "description" },
            { data: "location", name: "location" },
            { data: "action", name: "action" } ] ; 
    
    
        }
    
    
     var table = $(".data-table-news").DataTable({
        language: language_datatables,
        processing: true,
        serverSide: true,
        ordering: false,
        searching: false,
        info: false,
        ajax: {
            url: "news",
            data: function (d) {
                // d.category = $('#category').val()
            },
        },
        
        columns:  columns,
    });

    $("#SubmitFormNews").on("submit", function (e) {
        e.preventDefault();

        let formData = new FormData($("#SubmitFormNews")[0]);

        Images().forEach((e) => {
            console.log(e);
            formData.append("images[]", e);
        });
        
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: "news",
            data: formData,
            contentType: false, // determint type object
            processData: false, // processing on response
            success: function (response) {
                $("#successMsg").show();
                console.log(response);
                Swal.fire({
                    text: "You have successfully  add data!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
            },

            error: function (response) {
                console.log(response);
                console.log("response");
                Swal.fire({
                    text: response.responseJSON.message,
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
            },
        });
    });
    $(".data-table-news").on("click", ".deleteRecord[data-id]", function (e) 
    {
        e.preventDefault();
        $(".show_confirm").click(function (event) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((willDelete) => {
                if (willDelete.isConfirmed) {
                    var id = $(this).data("id");
                    var token = $("meta[name='csrf-token']").attr("content");

                    $.ajax({
                        url: "news/" + id,
                        type: "DELETE",
                        data: {
                            id: id,
                            _token: token,
                        },
                        success: function () {
                            console.log("it Works");
                            $(".data-table-news").DataTable().ajax.reload();
                        },
                    });
                }
            });
        });
    });
    $("#SubmitFormNewsEdit").on("submit", function (e) {
        e.preventDefault();

        let formData = new FormData($("#SubmitFormNewsEdit")[0]);
        Images().forEach((e) => {
            console.log(e);
            formData.append("images[]", e);
        });

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "post",
            url: "news/update",
            data: formData,
            contentType: false, // determint type object
            processData: false, // processing on response
            success: function (response) {
                $("#successMsg").show();
                console.log(response);
                Swal.fire({
                    text: "You have successfully reset data !",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
                $(".data-table-news-images").DataTable().ajax.reload();
            },

            error: function (response) {
                console.log(response);
                console.log("response");
                Swal.fire({
                    text: response.responseJSON.message,
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
            },
        });
    });
});

