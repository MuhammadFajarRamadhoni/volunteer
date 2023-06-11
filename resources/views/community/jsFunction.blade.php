<script>
    $("#form-buat-komunitas").submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{Route('community.simpan-komunitas')}}",
            data: $("#form-buat-komunitas").serialize(), 
            success: function(data){
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Tersimpan',
                });
                $('#modal-form-tambah-community').modal('hide');
                $("#form-buat-komunitas").trigger('reset');
            }
        });
    });
</script>