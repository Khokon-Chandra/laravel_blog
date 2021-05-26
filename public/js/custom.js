$(document).ready(function () {
    $('#VisitorDt').DataTable();
    $('.dataTables_length').addClass('bs-select');
});

function getServiceData () {
    axios.get('/getServiceData')
    .then(function (response) {
        if(response.status == 200) {
            $("#mainDiv").removeClass("d-none");
            $("#loaderDiv").addClass("d-none");
            var jsonData = response.data;
            $.each(jsonData, function (i, item) {
                $('<tr>').html(
                    "<td><img class='table-img' src=" + jsonData[i].service_img + "></td>" +
                    "<td>" + jsonData[i].service_name + "</td>" +
                    "<td>" + jsonData[i].service_des + "</td>" +
                    "<td><a href='' ><i class='fas fa-edit'></i></a></td>" +
                    "<td><a class='serviceDeleteBtn' data-id =" + jsonData[i].id + " data-mdb-toggle='modal' data-mdb-target='#deleteModal' ><i class='fas fa-trash-alt'></i></a></td>"
                ).appendTo('#service_table');
            });
            $('.serviceDeleteBtn').click(function(){
                var id = $(this).data('id');
                $('#deleteConfirmBtn').attr('data-id', id);
            })
            $('#deleteConfirmBtn').click(function(){
                var id = $(this).data('id');
                getServiceDelete(id);
            })
        } else {
            $("#loaderDiv").addClass("d-none");
            $("#wrongDiv").removeClass("d-none");
        }
    })
    .catch(function (error) {
        $("#loaderDiv").addClass("d-none");
        $("#wrongDiv").removeClass("d-none");
    });
    
    function getServiceDelete(deleteId) {
        axios.post('/ServiceDelete', {id:deleteId})
        .then(function (response) {
            if(response.data == 1){
                alert('success');
            } else {
                alert('fali')
            }
        })
        .catch(function(error){

        });
    }
}