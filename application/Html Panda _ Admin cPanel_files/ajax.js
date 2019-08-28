var ajax_req;

$(document).ready(function() {
    
    $("#left_company").change(function() {
        
        var el = $(this);
        
        if(el.is(':checked')) {

            el.attr("checked", confirm("Are you sure this resource left the company."));
        }
    });
    
});


function show_loader()
{
    $(document.body).css({ 'cursor': 'wait' });
}


function hide_loader()
{
    $(document.body).css({ 'cursor': 'default' });
}


function notify_work(el, emp_id)
{   
        show_loader();

        if(ajax_req){ ajax_req.abort(); }

        ajax_req = $.post(base_url + 'admin/employee/notify_work', {"emp_id": emp_id}, function (resp) {

            hide_loader();
        });
}


function notify_to_all()
{   
        show_loader();

        if(ajax_req){ ajax_req.abort(); }
        
        var param = $("#sms_form").serialize();

        ajax_req = $.post(base_url + 'admin/assign_resource/notify_to_all', param, function (resp) {

                hide_loader();
                
                $('#sms_popup').modal('hide');
        });
}


function unassign_employee(assign_id, emp_id)
{
        swal({
            title: 'Remove Employee',
            text: 'Are you sure want to remove this employee from this service?',
            type: false,
            allowOutsideClick: true,
            showConfirmButton: true,
            showCancelButton: true,
            confirmButtonClass: 'btn-danger',
            cancelButtonClass: 'btn-primary',
            closeOnConfirm: true,
            closeOnCancel: true,
            confirmButtonText: 'Yes',
            cancelButtonText: "cancel"
        }, 
        function(t) {

            if(t) {

                $.post(base_url+'admin/service/unassign_employee', {"emp_id":emp_id,"assign_id":assign_id}, function(htmls){

                    $("#modal_employee_popup .modal-body").html(htmls);
                    $('#modal_employee_popup').modal('show');
                });

                service_detail_list(); 
            }
        });

        return false; 
}


function unassign_vehicle(assign_id, vh_id)
{
    swal({
            title: 'Remove Vehicle',
            text: 'Are you sure want to remove this vehicle from this service?',
            type: false,
            allowOutsideClick: true,
            showConfirmButton: true,
            showCancelButton: true,
            confirmButtonClass: 'btn-danger',
            cancelButtonClass: 'btn-primary',
            closeOnConfirm: true,
            closeOnCancel: true,
            confirmButtonText: 'Yes',
            cancelButtonText: "cancel"
        }, 
        function(t) {
            if(t){
                    $.post(base_url+'admin/service/unassign_vehicle', {"vh_id":vh_id, "assign_id":assign_id}, function(htmls){
                        $("#modal_vehicle_popup .modal-body").html(htmls);
                        $('#modal_vehicle_popup').modal('show');
                    });
                    service_detail_list(); 
                }
        });

        return false;   
}


function notallowedalert()
{
    alert("Sorry, You are not allowed!");
}
