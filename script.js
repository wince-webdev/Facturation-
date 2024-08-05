$(function() {
    $('table').DataTable();


    // CREER UNE FACTURE
    $('#create').on('click', function(e){
        let formOrder = $('#formOrder')
        if(formOrder[0].checkValidity()){
            e.preventDefault();
            $.ajax({
                url: 'requette_ajax.php',
                type: 'post',
                data: formOrder.serialize() + '&action=create',
                success: function(response){
                    // console.log(response);
                    $('#createModal').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès',
                    })
                    formOrder[0].reset();
                } 
            })
        }
    })

    // Récuperer les factures
    getFactures();
    function getFactures(){
        $.ajax({
            url: 'requette_ajax.php',
            type: 'post',
            data: { action: 'fetch'},
            success: function(response){
                $('#orderTable').html(response);
                $('#table').DataTable();
                // console.log(response);
                    // $('#createModal').modal('hide');
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'Succès',
                    // })
                    // formOrder[0].reset();
            }
        });
    }
});

